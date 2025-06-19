<?php
// Email Test Script - Run this to test if your server can send emails
// Visit this page in your browser to test email functionality

echo "<h2>Email Function Test</h2>";

// Check if mail function exists
if (!function_exists('mail')) {
    echo "<p style='color: red;'>❌ Mail function is NOT available on this server.</p>";
    echo "<p>Contact your hosting provider to enable PHP mail functionality.</p>";
    exit;
}

echo "<p style='color: green;'>✅ Mail function is available.</p>";

// Test email sending
$test_email = "support@virtualconnekt.com.ng";
$subject = "Test Email from Contact Form";
$message = "This is a test email to verify that PHP mail function is working correctly.";
$headers = "From: Test <noreply@" . $_SERVER['HTTP_HOST'] . ">";

echo "<h3>Sending test email...</h3>";

$result = mail($test_email, $subject, $message, $headers);

if ($result) {
    echo "<p style='color: green;'>✅ Test email sent successfully!</p>";
    echo "<p>Check your inbox at: " . $test_email . "</p>";
} else {
    echo "<p style='color: red;'>❌ Failed to send test email.</p>";
    echo "<p>Possible issues:</p>";
    echo "<ul>";
    echo "<li>Mail server not configured properly</li>";
    echo "<li>Hosting provider has restrictions</li>";
    echo "<li>Need to configure SMTP settings</li>";
    echo "</ul>";
}

echo "<hr>";
echo "<h3>Server Information:</h3>";
echo "<p><strong>PHP Version:</strong> " . phpversion() . "</p>";
echo "<p><strong>Server:</strong> " . $_SERVER['HTTP_HOST'] . "</p>";
echo "<p><strong>Server Software:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>";

// Check for common mail configuration
if (function_exists('ini_get')) {
    echo "<p><strong>SMTP:</strong> " . (ini_get('SMTP') ?: 'Not set') . "</p>";
    echo "<p><strong>smtp_port:</strong> " . (ini_get('smtp_port') ?: 'Not set') . "</p>";
    echo "<p><strong>sendmail_path:</strong> " . (ini_get('sendmail_path') ?: 'Not set') . "</p>";
}

echo "<hr>";
echo "<p><small>Delete this file after testing for security reasons.</small></p>";
?>
