<?php 
session_start();
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['msg'];
        
        $to='fronlech90@gmail.com';
        $subject='Form submission';
        $message="Name: ".$name."\n"."message:".$message;
        $headers="From: ".$email;
        
        if(mail($to, $subject, $message, $headers))
        {
            $_SESSION['msg']="message sent";
            header('location:index.php');
           /* echo "<h1>Sent success! Thank you"." ".$name."</h1>";*/

        }
        else{
            echo "Something went wrong!";
        }
        
    }

    
?>

