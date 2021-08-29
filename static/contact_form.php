<?php

if (isset($_POST['submit'])){

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $message = $_POST['message'];
            $subject = $_POST['subject'];
            
            $to = "contact@multimipevectori.com";
            $body = "";
            $body .= "De la :".$userName. "\r\n";
            $body .= "Email :".$userEmail. "\r\n";
            $body .= "Mesaj :".$message. "\r\n";

            $headers = "From: ".$userEmail;

            $result = mail($to,$subject,$body,$headers);
            if($result)
                header("Location: thanks.php");
			else header("Location: errormail.php"); 
            
        }
?>






