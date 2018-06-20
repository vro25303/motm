<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $attendence = trim(strip_tags($_POST['attendence']));

       // set here
       $subject = "Contact form submitted!";
       $to = 'virgilioreinoso@gmail.com';

       $body = <<<HTML $attendence HTML;

       $headers = "From: $name\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       if(mail($to, $subject, $body, $headers)){

         echo 'Your mail has been sent successfully.';

       } else{

         echo 'Unable to send email. Please try again.';

       }
       header('Location: index.html');
?>
