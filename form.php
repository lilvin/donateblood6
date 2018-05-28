<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: www.donateblood.com'; 
    $to = 'liliankirito@gmail.com';
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Thank you for your email!</p>';
    } else { 
        echo '<p>An error occurred. Please try sending your message again.</p>'; 
    }
}
?>
