<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $topic = $_POST['topic'];
        $message = $_POST['message'];

        if(strlen($fname) < 3 || strlen($lname) < 3 || strlen($topic) < 2 || strlen($message) < 2) {
            header("Location: index.html");
        }

        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            header("Location: index.html");
        }
    
        $to = "kontakt@asroads.pl";
    
        $email_body = 
            "Imię: $fname\n".
            "Nazwisko: $lname\n".
            "Telefon: $phone\n".
            "Wiadomość: $message";
        
        $headers = "Od: asroads.com $mail";
        mail($to, $topic, $email_body, $headers);
        header("Location: ../index.html");
    }
?>