<?php
// Allow requests from your site
header("Access-Control-Allow-Origin: https://www.curaide.ai");
header("Content-Type: application/json");
// Read the incoming JSON
$input = file_get_contents('php://input');
// Initialize cURL to forward the data
if ($_SERVER["HTTP_HOST"] == "www.curaide.ai" ||  $_SERVER["HTTP_HOST"] == "curaide.ai") {
    $ch = curl_init('https://laravel.fwsom.com/api/infoemail-submit');
} else {
    $ch = curl_init('https://laravel.fwsom.com/api/infoemail-submit');
}
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $input);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
if (curl_errno($ch)) {
    echo json_encode([
        'error' => true,
        'message' => 'cURL error: ' . $curlError
    ]);
} else {
    if (empty($response)) {
        echo json_encode([
            'error' => true,
            'message' => "Empty response from API. HTTP Code: $httpCode"
        ]);
    } else {
        http_response_code($httpCode);
        echo $response;
    }
}
curl_close($ch);
