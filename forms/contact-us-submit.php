<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/commonFunctions.php';
class FormHandler
{
    private $postData;
    private $sessionData;
    private $serverData;
    private $errors = [];
    private $uploadDir;
    private $apiUrl = 'https://laravel.fwsom.com/api/global-form-submit';
    private $apiToken = '15b6244e5f1203c021945b4f784f6238';
    private $thanksSubmittedUrl = "/forms/thanks_submitted.php";
    private $thanksUrl = "/forms/thanks.php";
    private $serviceName = "FW AI HC";
    private $subServiceName = "";
    private $payload = [];
    private $apiResponse = [];
    private $captcha_status = "";
    public function __construct($postData, $sessionData, $serverData)
    {
        $this->postData = $postData;
        $this->sessionData = $sessionData;
        $this->serverData = $serverData;
        $this->uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/attachments';
    }
    public function handleFormSubmission()
    {
        try {
            $this->validateInputs()
                ->sanitizeInputs()
                ->handleFileUpload()
                ->preparePayload()
                ->savePayloadCopyLocally()
                ->sendPayloadToApi()
                ->saveUserDetailsToSession()
                ->finalStep();
        } catch (Exception $e) {
            $this->sendJsonResponse(false, "", ['errors' => ['An unexpected error occurred.']]);
        }
    }
    private function validateInputs()
    {
        $this->errors = $this->validateInputData($this->postData, $this->sessionData);
        if (!empty($this->errors) && $this->captcha_status!= "fail") {
            $this->sendJsonResponse(false, "", ['isValid' => false, 'errors' => $this->errors]);
        }
        return $this;
    }
    private function validateInputData($data, $session)
    {
        $errors = [];
        if (empty($data['FirstName']) || strlen($data['FirstName']) < 4) {
            $errors['FirstName'] = 'First name must be at least 4 characters long.';
        }
        if (!filter_var($data['Email'], FILTER_VALIDATE_EMAIL)) {
            $errors['Email'] = 'Please enter a valid email address.';
        }
        if (!preg_match('/^[0-9]{10}$/', $data['phone'])) {
            $errors['phone'] = 'Please enter a valid 10-digit phone number.';
        }
        if (empty($data['description'])) {
            $errors['description'] = 'Description cannot be empty.';
        }
        if(strlen($data['description']) < 30){
            $errors['description'] = 'Description seems too short—please elaborate!';
        }
        if (isset($data['captcha_number']) && isset($session['securimage_code_value']) && strtolower($data['captcha_number']) !== strtolower($session['securimage_code_value'])) {
            $errors['captcha_number'] = 'Captcha number does not match.';
            $this->captcha_status = "fail";
        }
        return $errors;
    }
    private function sanitizeInputs()
    {
        $invalidCompanies = ['no company', 'not company', 'not a company', 'not applicable', 'not available', '-', ''];
        $this->postData['Company'] = $this->postData['Company'] ?? '';
        $this->postData['Description_of_requirements'] = cleanDescription($this->postData['description'] ?? '');
        $this->postData['FirstName'] = cleanString($this->postData['FirstName'] ?? '');
        $this->postData['phone'] = cleanString($this->postData['phone'] ?? '');
        $this->postData['Email'] = cleanString($this->postData['Email'] ?? '');
        $this->postData['Company'] = in_array(strtolower(trim($this->postData['Company'])), $invalidCompanies) ? $this->postData['FirstName'] : trim($this->postData['Company']);
        return $this;
    }
    private function saveUserDetailsToSession()
     {
         $_SESSION["FirstName"] = $this->postData["FirstName"] ?? '';
         $_SESSION["Email"] = $this->postData["Email"] ?? '';
         $_SESSION["phone"] = $this->postData["phone"] ?? '';
         return $this;
     }
    private function handleFileUpload()
    {
        if (!isset($_FILES['upfile1']) || !is_array($_FILES['upfile1']['tmp_name'])) {
            return $this; // No files uploaded
        }
        $uploadedUrls = [];
        foreach ($_FILES['upfile1']['tmp_name'] as $key => $tmpName) {
            if (!$tmpName) {
                continue; // Skip if no file uploaded for this index
            }
            $file = [
                'name' => $_FILES['upfile1']['name'][$key],
                'tmp_name' => $tmpName,
                'error' => $_FILES['upfile1']['error'][$key]
            ];
            $filename = basename($file['name']);
            $targetPath = $this->uploadDir . '/' . $filename;
            if (!is_dir($this->uploadDir)) {
                mkdir($this->uploadDir, 0777, true);
            }
            if ($file['error'] !== UPLOAD_ERR_OK || !move_uploaded_file($file['tmp_name'], $targetPath)) {
                $this->errors['upfile1'] = 'An error occurred during file upload.';
                $this->sendJsonResponse(false, '', ['isValid' => false, 'errors' => $this->errors]);
            }
            $uploadedUrls[] = getSiteUrl() . 'attachments/' . $filename;
        }
        $this->postData['attachments'] = implode(' | ', $uploadedUrls);
        return $this;
    }
    private function preparePayload()
    {
        $this->payload = [
            'FirstName' => $this->postData['FirstName'] ?? '',
            'Email' => strtolower(trim($this->postData['Email'] ?? '')),
            'phone' => $this->postData['phone'] ?: '0000000000',
            'description' => $this->postData['description'] ?? '',
            'Company' => $this->postData['Company'] ?? '',
            'ip' => getUserIpAddress() ?? '',
            'country' => $this->getCountryCode(),
            'check-bot-entry' => $this->postData['check-bot-entry'] ?? '',
            'currentpage_url' => $this->postData['currentpage_url'] ?? '',
            'service_name' => $this->serviceName,
            'sub_service_name' => $this->subServiceName,
            'startedUrl' => $this->postData['startedUrl'] ?? '',
            'userId' => $this->postData['userId'] ?? '',
            'utm_source' => $this->postData['utm_source'] ?? '',
            'utm_medium' => $this->postData['utm_medium'] ?? '',
            'utm_campaign' => $this->postData['utm_campaign'] ?? '',
            'utm_adgroup' => $this->postData['utm_adgroup'] ?? '',
            'utm_term' => $this->postData['utm_term'] ?? '',
            'utm_content' => $this->postData['utm_content'] ?? '',
            'gclid' => $this->postData['gclid'] ?? '',
            'clientid' => isset($this->sessionData['ga_client_id']) ? $this->sessionData['ga_client_id'] : (isset($_COOKIE["_ga"]) ? substr($_COOKIE["_ga"], 6) : "-"),
            'action_value' => $this->postData['action_value'] ?? '',
            'form_name' => $this->determineFormName(),
            'attachments' => $this->postData['attachments'] ?? '',
            'site_name' => $this->serverData['SERVER_NAME'],
            'search_engine' => '-',
            'useragent' => $this->serverData['HTTP_USER_AGENT'] ?? '',
            'keywords' => '',
            'captcha_status' => $this->captcha_status
        ];
        return $this;
    }
    private function getCountryCode()
    {
        $countryNameId = $this->postData['ip_country_name'] ?? null;
        preg_match('/^\d{4}/', $countryNameId, $matches);
        $countryCode = $matches[0] ?? '';
        return $countryCode;
    }
    private function determineFormName()
    {
        $actionValue = $this->postData['action_value'] ?? '';
        return ($actionValue === "general" || strpos($this->postData['currentpage_url'], 'contact.php') !== false) ?
            "Main Form" : "Small Form";
    }
    private function sendPayloadToApi()
    {
        $ch = curl_init($this->apiUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->payload));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'X-Campaign-Token: ' . $this->apiToken
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification to avoid CORS issues
        if (!$response = curl_exec($ch)) {
            $this->sendJsonResponse(false, '', ['errors' => ['Failed to connect to API.']]);
        }
        curl_close($ch);
        $this->apiResponse = json_decode($response, true) ?? [];
        //echo '<pre>';print_r($this->apiResponse);echo '</pre>';
        return $this;
    }
    private function finalStep()
    {
        if ($this->captcha_status == "fail") {
            $this->sendJsonResponse(false, "", ['isValid' => false, 'errors' => $this->errors]);
        }
        elseif ($this->apiResponse['status'] === 'success') {
            $this->savePayloadToJsonFile($this->apiResponse['data']);
            $this->sendJsonResponse(true, $this->thanksUrl, null, true);
        } elseif (isset($this->apiResponse['spam']['isSpam']) && $this->apiResponse['spam']['isSpam'] && !$this->apiResponse['spam']['dieAction']) {
            $this->sendJsonResponse(false, $this->thanksSubmittedUrl, null, true);
        } else {
            $apiResponse['errors'] = flattenErrorMessages($this->apiResponse['errors'] ?? []);
            $this->sendJsonResponse(false, "", ['errors' => $this->apiResponse['errors'] ?? $this->apiResponse]);
        }
    }
    private function savePayloadCopyLocally()
    {
        $filePath = __DIR__ . '/before-submitted-data.json';
        $existingData = [];
        $data = $this->payload;
        $data['sent_at'] = date('Y-m-d H:i:s');
        if (file_exists($filePath)) {
            $jsonContent = file_get_contents($filePath);
            $existingData = json_decode($jsonContent, true) ?? [];
        }
        $existingData[] = $data;
        file_put_contents($filePath, json_encode($existingData, JSON_PRETTY_PRINT));
        return $this;
    }
    private function savePayloadToJsonFile($data)
    {
        $filePath = __DIR__ . '/submitted-data.json';
        $existingData = [];
        if (file_exists($filePath)) {
            $jsonContent = file_get_contents($filePath);
            $existingData = json_decode($jsonContent, true) ?? [];
        }
        $existingData[] = $data;
        file_put_contents($filePath, json_encode($existingData, JSON_PRETTY_PRINT));
    }
    private function sendJsonResponse($success, $redirectUrl = "", $additionalData = [], $isValid = false)
    {
        $response = [
            'isValid' => $isValid,
            'success' => $success,
            'redirect_url' => $redirectUrl,
            'errors' => $this->errors
        ];
        if (!empty($additionalData)) {
            $response = array_merge($response, $additionalData);
        }
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}
// Instantiate and process the form
$formHandler = new FormHandler($_POST, $_SESSION, $_SERVER);
$formHandler->handleFormSubmission();