<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Honeypot: real users never fill this hidden field, bots usually do.
    $honeypot = trim($_POST['website'] ?? '');
    if ($honeypot !== '') {
        http_response_code(400);
        echo "failed";
        exit;
    }

    // Reject submissions made suspiciously fast (likely automated bots).
    $formTs = (int) ($_POST['form_ts'] ?? 0);
    if ($formTs > 0 && (time() * 1000 - $formTs) < 3000) {
        http_response_code(400);
        echo "failed";
        exit;
    }

    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Strip any newline/CR characters to prevent header injection.
    $email = str_replace(["\r", "\n"], '', $email);

    $errors = [];

    if ($name === '' || !preg_match("/^[A-Za-z\s.'-]{2,60}$/", $name)) {
        $errors[] = 'Invalid name.';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email address.';
    }
    if ($phone === '' || !preg_match("/^[0-9+\-\s()]{7,20}$/", $phone)) {
        $errors[] = 'Invalid phone number.';
    }
    if ($company === '' || mb_strlen($company) < 2 || mb_strlen($company) > 100) {
        $errors[] = 'Invalid company name.';
    }
    if (mb_strlen($message) > 1000) {
        $errors[] = 'Message too long.';
    }

    if (!empty($errors)) {
        http_response_code(422);
        echo "failed";
        exit;
    }

    $to = "info@curaide.ai";
    $subject = "Curaide Enquiry";
    $body = "
    Curaide Enquiry (Demo/Download Request):
    Name: $name
    Email: $email
    Phone: $phone
    Company: $company
    Message: $message
    ";
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8\r\n";
    $headers .= "From: noreply@curaide.ai\r\n";
    $headers .= "Reply-To: $email\r\n";
    if(mail($to, $subject, $body, $headers)){
        echo "success";
    } else {
        http_response_code(500);
        echo "failed";
    }
} else {
    http_response_code(405);
    echo "failed";
}
?>