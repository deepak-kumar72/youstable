<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';


if(isset($_POST["send"]))

{

  function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


   $nameErr = $emailErr = $phoneErr = $messageErr = "";


    if (isset($_POST["name"])) {

        if (empty($_POST["name"])) {
            $nameErr = "name is not set";
        } else {
            $name = input_data($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only alphabets and white space are allowed";
            }
        }
    }


    if (isset($_POST["email"])) {

        if (empty($_POST["email"])) {
            $emailEr = "email is not set";
        } else {
            $email = input_data($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
    }


  if (isset($_POST["phone"])) {

        if (empty($_POST["phone"])) {
            $phoneErr = "phone is not set";
        } else {
            $phone = input_data($_POST["phone"]);
            if (!preg_match("/^[0-9]*$/", $phone)) {
                $phoneErr = "Only numeric value is allowed.";
            }
        }
    }


    if (isset($_POST["message"])) {

        if (empty($_POST["message"])) {
          
        } else {
            $mesaage = input_data($_POST["message"]);         
        }
    }




 if ($nameErr == "" && $emailErr == "" && $phoneErr == "" && $messageErr == "") 

 {
  
  

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: sales@youstable.com' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";
$subject = "My subject";
$message = "testing"

$to = "yashpal@youstable.com";
echo "sending";
mail($to,$subject,$message,$headers);




}

else
{
  echo "field err";
}

}