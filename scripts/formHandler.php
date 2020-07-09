<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $topic = $_POST['topic'];
        $message = $_POST['message'];
    
        $to = "kontakt@asroads.com";
    
        $email_body = 
            "Imię: $fname\n".
            "Nazwisko: $lname\n".
            "Telefon: $phone\n".
            "Wiadomość: $message";
        
        $headers = "Od: asroads.com $mail";
        mail($to, $topic, $message, $headers);
        header("Location: ../index.html");
    }
?>