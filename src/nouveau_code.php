<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

require_once 'dbconnexion.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

    $_SESSION['verification_code'] = $verification_code;

    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'me.is.amine11@gmail.com';
        $mail->Password = 'wjyyvqxjflxisldz';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            )
        );

        $mail->setFrom('me.is.amine11@gmail.com', 'Maboum-School.com');
        $mail->addAddress($_SESSION['email'], $_SESSION['nom']);
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau code de vérification';
        $mail->Body = '
        <html>
        <head>
            <style>
                .container {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    padding: 20px;
                    border-radius: 5px;
                }
                .bar {
                    background-color: #ffffff;
                    padding: 10px;
                    text-align: center;
                    border-radius: 5px;
                }
                
                .title {
                    color: #06bcf9;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
                .code {
                    font-size: 30px;
                    color: #ffffff;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="bar">
                    <img src="../img/logo.png" alt="Logo" class="logo">
                </div>
                <div>
                    <p class="title">Récupération de votre compte</p>
                    <p>Votre code de vérification est : <span class="code">' . $verification_code_reset . '</span></p>
                </div>
            </div>
        </body>
        </html>
    ';
        $mail->send();
        echo "Nouveau code envoyé avec succès";
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi du nouveau code: {$mail->ErrorInfo}";
    }

    header("Location: ../view/verifcode.php");
    exit();
}

?>