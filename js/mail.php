<html>

<head>
    <title>PHP Mail Sender</title>
</head>

<body>
    <?php
    $name = $_POST['send-name'];
    $email = $_POST['send-from'];
    $message = $_POST['send-message'];

    $to = "gxespence@gmail.com";
    $subject = "Contact Form Email";
    $body = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;
    $headers = "From: " . $email;

    //send email
    mail($to, $subject, $body, $headers);
    ?>
</body>

</html>