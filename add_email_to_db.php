<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$username = $_POST['username'];
$email = $_POST['email'];

$mail = new PHPMailer(true);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
$mail->Port = 465; // set the SMTP port for the GMAIL server
$mail->Username = "praktykiartofcode@gmail.com"; // GMAIL username
$mail->Password = "ZAQ!2wsx"; // GMAIL password
$mail->isHTML(true);
$mail->CharSet = "UTF-8";


$mail->AddAddress($email, $username);
$mail->SetFrom('praktykiartofcode@gmail.com', 'Praktyki Art Of Code');
$mail->Subject = "Dziękujemy za dołączenie do naszego newslettera!";
$mail_content = "<h1>Witamy serdecznie, $username!</h1>
<hr>
<p>Dziękujemy za rejestrację w naszym newsletterze, zapraszamy do dalszego śledzenia naszej strony https://jp-praktyki.github.io!

</p>";

$mail->Body = $mail_content;

try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
    //Something went bad
    echo "Fail :(";
}


try{
    $pdo = new PDO('sqlite:newsletter.db');
    $pdo->exec("INSERT INTO scores (username, email) VALUES('$username', '$email');");
}

catch(PDOException $e){
    echo $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pseudo.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="baner">
         <span>INF.02</span><br>twoje źródło wiedzy do egzaminu
       </div>

       <nav>
        <ol>
         <a href="index.html"><li>Strona główna</li></a>
         <a href="articles.html"><li>Artykuły</li></a>
         <a href="links.html"><li>Przydatne Linki</li></a>
         <a href="newsletter.html"><li>Newsletter</li></a>
         <a href="contact.html"><li>Kontakt</li></a>
        </ol>
     </nav>

    </header>

    <div class="container short">
        <article>
            <h1>Dziękujemy za dołączenie do naszego newslettera!</h1>
            <p>Niedługo otrzymasz pierwszą wiadomość...</p>
        </article>
    </div>


    <footer>
        <div class="footer">
            <p>Kontakt</p>
            <p><a href="mailto:juliapirch.jp@gmail.com">email: juliapirch.jp@gmail.com</a></p>
            <p>Author: Julia Pirch</p>
            <p>Company: Art of Code</p>
        </div>
        <div id="rights">All rigths reserved ©</div>
        
    </footer>

</body>
</html>
