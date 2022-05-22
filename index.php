<?php


    if(isset($_POST['submit'])){

        $name = $_POST['fname'];
        $email = $_POST['email'];
        $mssg = $_POST['message'];

        $to = "amarachukwuani23@gmail.com";
        $body = "";
        $body .= "From: ".$name."\r\n";
        $body .= "Email: ".$email."\r\n";
        $body .= "Message: ".$mssg."\r\n";

        mail($to, $mssg, $body);
    }













?>




<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
        <body>

        <form action="" method="POST">
                <p><input type="text" name="fname" placeholder="what's your fullname"></p>
                <p><input type="text" name="email" placeholder="Write your email here"></p>
                <p><textarea placeholder="What is your message" name="message"> </textarea></p>
                <input type="submit" value="submit here" name="submit">
        </form>

        </body>