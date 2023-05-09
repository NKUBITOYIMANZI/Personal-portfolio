<?php // get the form data $name = $_POST[‘name’]; $email = $_POST[‘email’]; $web = $_POST[‘web’]; $subject = $_POST[‘subject’]; $text = $_POST[‘text’];

// set the email recipient $to = ‘your_email_address@example.com’;

// set the email headers $headers = “From: $name <$email>\r\n”; $headers .= “Reply-To: $email\r\n”;

// set the email body $message = “Name: $name\r\n”; $message .= “Email: $email\r\n”; $message .= “Web: $web\r\n”; $message .= “Subject: $subject\r\n”; $message .= “Text: $text\r\n”;

// send the email using mail() function if (mail($to, $subject, $message, $headers)) { echo “Email sent successfully!”; } else { echo “Email sending failed!”; } ?>