<?php

// //but it will go to spam
// $to ="shivamkumar292911@gmail.com";
// $subject = "hello";
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= 'From: shivam5162323@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

// mail($to, $subject, $message, $headers);

// if(mail($to,$subject,$message,$headers)){
//     echo "Email was sent successfully";
// } else(
//     echo "Failed";
// )












$to ="shivamkumar292911@gmail.com";
$subject = "hello";
$message = "Dear students,<br>The exams for all offline studnts will be held offline. <br>Good Luck<br>Chandigarh University"
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ChandigarhUniversity@cumail.in' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
