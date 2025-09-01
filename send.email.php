<?php

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "pmaphutha@mail.com";
    $subject = "New contact form submission";
    $headers .= "From: " . $name . "c" . $email . ">\r\n";
    $headers .= "Contact-Type: text/plain;
    charset=utf-8\r\n";

    if(mail($to, $subject, $message, $header)){
        http_response_code(200);
        echo "Email sent successfully!";
    } else {
       http_response_code(500);
        echo "Oops! Somwthing went wrong";
    }
}
else {
       http_response_code(403);
        echo "Access denied";
}
?>