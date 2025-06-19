<?php
// Simple Contact Form Handler using PHP mail()
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    
    // Validate required fields
    if (empty($firstName) || empty($lastName) || empty($email) || empty($message)) {
        http_response_code(400);
        echo json_encode(["error" => "All fields are required."]);
        exit;
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["error" => "Invalid email format."]);
        exit;
    }
    
    // Email settings
    $to = "support@virtualconnekt.com.ng";
    $subject = "New Contact Form Submission from " . $firstName . " " . $lastName;
    $body = "Name: " . $firstName . " " . $lastName . "\n";
    $body .= "Email: " . $email . "\n\n";
    $body .= "Message:\n" . $message;
    $headers = "From: " . $email;
    
    // Send email using simple mail() function
    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo json_encode(["success" => "Thank you! Your message has been sent."]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => "Sorry, there was an error sending your message. Please try again."]);
    }
} else {
    http_response_code(403);
    echo json_encode(["error" => "Invalid request method."]);
}
?>
