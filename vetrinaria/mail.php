<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent=" From: $name \n Celular: $phone \n Mensaje: $message \n Correo: $email";
$recipient = "daniel1333@outlook.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
if (mail($recipient, $subject, $formcontent, $mailheader)){
    echo "<script>
            
            window.history.go(-1);
     </script>";

} else {
    echo"<script>
    
    </script>";
};
 
?>
