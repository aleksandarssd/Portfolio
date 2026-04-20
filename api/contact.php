<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST["name"]) ? strip_tags(trim($_POST["name"])) : '';
    $email = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : '';
    $message = isset($_POST["message"]) ? strip_tags(trim($_POST["message"])) : '';

    // Validation
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => implode(" ", $errors)]);
        exit;
    }

    // Email Configuration
    $to = "aleksandarrsd@gmail.com"; // Your email address
    $subject = "New Portfolio Contact from $name";
    
    // Email Headers
    $headers = "From: noreply@skandarmokni.com\r\n"; // Use a domain-based email here if possible
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Email Body
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Send Email
    if (mail($to, $subject, $email_content, $headers)) {
        http_response_code(200);
        echo json_encode(["status" => "success", "message" => "Message sent successfully. I will get back to you soon."]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Failed to send message. Please try again later."]);
    }
} else {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Method Not Allowed"]);
}
?>
