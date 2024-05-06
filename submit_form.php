<style>
    body {
        background-color: #ffffff; /* White color */
    }
</style>

<p><strong>Phone:</strong> (+254714550754)</p>
<p><strong>Email:</strong> <a href="mailto:kenyatta.fidel@yahoo.com">kenyatta.fidel@yahoo.com</a></p>

<form action="/submit_form.php" method="POST">
    ...
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email recipient and subject
    $to = 'recipient@example.com'; // Specify the recipient email address
    $subject = 'New Contact Form Submission';

    // Prepare the email body
    $email_body = "You have received a new message from the user $name.\n";
    $email_body .= "Here is the message:\n$message\n";
    $email_body .= "Reply to: $email";

    // Email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send the email
    if(mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for contacting us, $name. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Not a POST request, display a simple error message
    echo "Error: Form is not submitted.";
}
?>
