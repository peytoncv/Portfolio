<?php

if($_POST[“message”]) {


mail(“peytonnwork@gmail.com”, “Here is the subject line”,


$_POST[“insert your message here”]. “From: an@email.address”);


}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form Data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Display the submitted data
    echo "Name:  " . $name . "<br>" ;
    echo "Email:  " . $email . "<br>" ;
    echo "Subject:  " . $subject . "<br>" ;
    echo "Message:  " . $message . "<br>" ;

}

?>