<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require_once 'db.php';
require_once 'util.php';

  $db = new Database;
  $util = new Util;


  // Handle Add New User Ajax Request
  if (isset($_POST['add'])) {
    $nom = $util->testInput($_POST['nom']);
    $prenom = $util->testInput($_POST['prenom']);
    $etablissement = $util->testInput($_POST['etablissement']);
    $classe = $util->testInput($_POST['classe']);
    $representant = $util->testInput($_POST['representant']);
    $telephone = $util->testInput($_POST['telephone']);
    $adresse = $util->testInput($_POST['adresse']);
    $complement = $util->testInput($_POST['complement']);
    $codepostal = $util->testInput($_POST['codepostal']);
    $ville = $util->testInput($_POST['ville']);
    $email = $util->testInput($_POST['email']);
    $typesoutien = $util->testInput($_POST['typesoutien']);
    $matiere = $util->testInput($_POST['matiere']);
    $campus = $util->testInput($_POST['campus']);
    $heure_payee = $util->testInput($_POST['heurep']);
    $heure = $util->testInput($_POST['heure']);

    if ($db->insert($nom, $prenom, $etablissement, $classe, $representant, $telephone, $adresse, $complement, $codepostal, $ville, $email, $typesoutien, $matiere, $campus, $heure_payee, $heure)) {
      echo $util->showMessage('success', 'Client ajouté avec Success !');
    } else {
      echo $util->showMessage('danger', 'Erreur');
    }
}


  // Handle Fetch All Users Ajax Request
  if (isset($_GET['read'])) {
    $client = $db->read();
    $output = '';
    if ($client) {
      foreach ($client as $row) {
        $output .= '<tr>
                        <td>' . (isset($row['id']) ? $row['id'] : '') . '</td>
                        <td>' . ($row['nom'] ?? '') . '</td>
                        <td>' . ($row['prenom'] ?? '') . '</td>
                        <td>' . ($row['etablissement'] ?? '') . '</td>
                        <td>' . ($row['classe'] ?? '') . '</td>
                        <td>' . ($row['representant'] ?? '') . '</td>
                        <td>' . ($row['telephone'] ?? '') . '</td>
                        <td>' . ($row['adresse'] ?? '') . '</td>
                        <td>' . ($row['complement'] ?? '') . '</td>
                        <td>' . ($row['codepostal'] ?? '') . '</td>
                        <td>' . ($row['ville'] ?? '') . '</td>
                        <td>' . ($row['email'] ?? '') . '</td>
                        <td>' . ($row['type_soutien'] ?? '') . '</td>
                        <td>' . ($row['matiere'] ?? '') . '</td>
                        <td>' . ($row['campus'] ?? '') . '</td>
                        <td>' . ($row['heure_payee'] ?? '') . '</td>
                        <td>' . ($row['heure'] ?? '') . '</td>
                        <td>
                        <a href="#" id="' . $row['id'] . '" class="btn btn-success btn-sm rounded-pill py-0 editLink" data-toggle="modal" data-target="#editUserModal" data-client-id="' . $row['id'] . '" ">Modifier</a>

                        <a href="#" id="' . $row['id'] . '" class="btn btn-danger btn-sm rounded-pill py-0 deleteLink">Supprimer</a>
                      </td>
                    </tr>';
      }
      echo $output;
    } else {
      echo '<tr>
              <td colspan="16">Pas de clients dans la base de données !</td>
            </tr>';
    }
  }


  // Handle Edit User Ajax Request
  if (isset($_GET['edit'])) {
    $id = $_GET['id'];

    $user = $db->readOne($id);
    echo json_encode($user);
  }

  // Handle Update User Ajax Request
  if (isset($_POST['update'])) {
    $id = $util->testInput($_POST['id']) ?? "";
    $nom = $util->testInput($_POST['nom']) ?? "";
    $prenom = $util->testInput($_POST['prenom']) ?? "";
    $etablissement = $util->testInput($_POST['etablissement']) ?? "";
    $classe = $util->testInput($_POST['classe']) ?? "";
    $representant = $util->testInput($_POST['representant']) ?? "";
    $telephone = $util->testInput($_POST['telephone']) ?? "";
    $adresse = $util->testInput($_POST['adresse']) ?? "";
    $complement = $util->testInput($_POST['complement']) ?? "";
    $codepostal = $util->testInput($_POST['codepostal']) ?? "";
    $ville = $util->testInput($_POST['ville']) ?? "";
    $email = $util->testInput($_POST['email']) ?? "";
    $typesoutien = $util->testInput($_POST['typesoutien']) ?? "";
    $matiere = $util->testInput($_POST['matiere']) ?? "";
    $campus = $util->testInput($_POST['campus']) ?? "";
    $heure_payee = $util->testInput($_POST['heurep']) ?? "";
    $heure = $util->testInput($_POST['heure']) ?? "";


    if ($heure <= 2) {
      $mail = new PHPMailer(true);
      try{
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
              'verify_peer_name' =>false,
              'allow_self_signed' => true,
          )
          );

          $mail->setFrom('me.is.amine11@gmail.com', 'Maboum-School.com');

          $mail->addAddress($email, $nom);

          $mail->isHTML(true);

          $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

          $mail->Subject = 'Rappel de votre solde';

          $mail->Body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
          <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">
          <head>
          <title></title>
          <meta charset="UTF-8" />
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
          <!--[if !mso]>-->
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <!--<![endif]-->
          <meta name="x-apple-disable-message-reformatting" content="" />
          <meta content="target-densitydpi=device-dpi" name="viewport" />
          <meta content="true" name="HandheldFriendly" />
          <meta content="width=device-width" name="viewport" />
          <meta name="format-detection" content="telephone=no, date=no, address=no, email=no, url=no" />
          <style type="text/css">
          table {
          border-collapse: separate;
          table-layout: fixed;
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt
          }
          table td {
          border-collapse: collapse
          }
          .ExternalClass {
          width: 100%
          }
          .ExternalClass,
          .ExternalClass p,
          .ExternalClass span,
          .ExternalClass font,
          .ExternalClass td,
          .ExternalClass div {
          line-height: 100%
          }
          body, a, li, p, h1, h2, h3 {
          -ms-text-size-adjust: 100%;
          -webkit-text-size-adjust: 100%;
          }
          html {
          -webkit-text-size-adjust: none !important
          }
          body, #innerTable {
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale
          }
          #innerTable img+div {
          display: none;
          display: none !important
          }
          img {
          Margin: 0;
          padding: 0;
          -ms-interpolation-mode: bicubic
          }
          h1, h2, h3, p, a {
          line-height: 1;
          overflow-wrap: normal;
          white-space: normal;
          word-break: break-word
          }
          a {
          text-decoration: none
          }
          h1, h2, h3, p {
          min-width: 100%!important;
          width: 100%!important;
          max-width: 100%!important;
          display: inline-block!important;
          border: 0;
          padding: 0;
          margin: 0
          }
          a[x-apple-data-detectors] {
          color: inherit !important;
          text-decoration: none !important;
          font-size: inherit !important;
          font-family: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important
          }
          u + #body a {
          color: inherit;
          text-decoration: none;
          font-size: inherit;
          font-family: inherit;
          font-weight: inherit;
          line-height: inherit;
          }
          a[href^="mailto"],
          a[href^="tel"],
          a[href^="sms"] {
          color: inherit;
          text-decoration: none
          }
          img,p{margin:0;Margin:0;font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:22px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}h1{margin:0;Margin:0;font-family:Roboto,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:34px;font-weight:400;font-style:normal;font-size:28px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}h2{margin:0;Margin:0;font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:30px;font-weight:400;font-style:normal;font-size:24px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}h3{margin:0;Margin:0;font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:26px;font-weight:400;font-style:normal;font-size:20px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}
          </style>
          <style type="text/css">
          @media (min-width: 481px) {
          .hd { display: none!important }
          }
          </style>
          <style type="text/css">
          @media (max-width: 480px) {
          .hm { display: none!important }
          }
          </style>
          <style type="text/css">
          @media (min-width: 481px) {
          h1,img,p{margin:0;Margin:0}img,p{font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:22px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}h1{font-family:Roboto,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:34px;font-weight:400;font-style:normal;font-size:28px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}h2,h3{margin:0;Margin:0;font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}h2{line-height:30px;font-size:24px}h3{line-height:26px;font-size:20px}.t61,.t64{mso-line-height-alt:60px!important;line-height:60px!important;display:block!important}.t62{padding:60px!important;border-radius:8px!important;overflow:hidden!important;width:480px!important}.t14,.t5,.t51,.t55,.t9{width:600px!important}.t58{width:496px!important}.t47{width:800px!important}.t46{text-align:left!important}.t22{mso-line-height-alt:inherit!important;line-height:inherit!important;font-size:0px!important}.t23{width:20%!important}.t20{padding-right:15px!important}.t19{Margin-left:0px!important}.t45{width:80%!important;max-width:800px!important}.t43{padding-bottom:10px!important}
          }
          </style>
          <style type="text/css" media="screen and (min-width:481px)">.moz-text-html img,.moz-text-html p{margin:0;Margin:0;font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:22px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}.moz-text-html h1{margin:0;Margin:0;font-family:Roboto,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:34px;font-weight:400;font-style:normal;font-size:28px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}.moz-text-html h2{margin:0;Margin:0;font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:30px;font-weight:400;font-style:normal;font-size:24px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}.moz-text-html h3{margin:0;Margin:0;font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:26px;font-weight:400;font-style:normal;font-size:20px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}.moz-text-html .t61,.moz-text-html .t64{mso-line-height-alt:60px!important;line-height:60px!important;display:block!important}.moz-text-html .t62{padding:60px!important;border-radius:8px!important;overflow:hidden!important;width:480px!important}.moz-text-html .t14,.moz-text-html .t5,.moz-text-html .t9{width:600px!important}.moz-text-html .t58{width:496px!important}.moz-text-html .t47{width:800px!important}.moz-text-html .t46{text-align:left!important}.moz-text-html .t22{mso-line-height-alt:inherit!important;line-height:inherit!important;font-size:0px!important}.moz-text-html .t23{width:20%!important}.moz-text-html .t20{padding-right:15px!important}.moz-text-html .t19{Margin-left:0px!important}.moz-text-html .t45{width:80%!important;max-width:800px!important}.moz-text-html .t43{padding-bottom:10px!important}.moz-text-html .t51,.moz-text-html .t55{width:600px!important}</style>
          <!--[if !mso]>-->
          <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;800&amp;family=Inter+Tight:wght@500&amp;display=swap" rel="stylesheet" type="text/css" />
          <!--<![endif]-->
          <!--[if mso]>
          <style type="text/css">
          img,p{margin:0;Margin:0;font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:22px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}h1{margin:0;Margin:0;font-family:Roboto,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:34px;font-weight:400;font-style:normal;font-size:28px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}h2{margin:0;Margin:0;font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:30px;font-weight:400;font-style:normal;font-size:24px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}h3{margin:0;Margin:0;font-family:Lato,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:26px;font-weight:400;font-style:normal;font-size:20px;text-decoration:none;text-transform:none;letter-spacing:0;direction:ltr;color:#333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px}div.t61,div.t64{mso-line-height-alt:60px !important;line-height:60px !important;display:block !important}td.t62{padding:60px !important;border-radius:8px !important;overflow:hidden !important;width:600px !important}td.t14,td.t5,td.t9{width:600px !important}td.t58{width:578px !important}td.t47{width:800px !important}div.t46{text-align:left !important}div.t22{mso-line-height-alt:inherit !important;line-height:inherit !important;font-size:0px !important}div.t23{width:20% !important}td.t20{padding-right:15px !important}table.t19{Margin-left:0px !important}div.t45{width:80% !important;max-width:800px !important}td.t43{padding-bottom:10px !important}td.t51,td.t55{width:600px !important}
          </style>
          <![endif]-->
          <!--[if mso]>
          <xml>
          <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
          </xml>
          <![endif]-->
          </head>
          <body id="body" class="t67" style="min-width:100%;Margin:0px;padding:0px;background-color:#D8DFEB;"><div class="t66" style="background-color:#D8DFEB;"><table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" align="center"><tr><td class="t65" style="font-size:0;line-height:0;mso-line-height-rule:exactly;background-color:#D8DFEB;" valign="top" align="center">
          <!--[if mso]>
          <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false">
          <v:fill color="#D8DFEB"/>
          </v:background>
          <![endif]-->
          <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" id="innerTable"><tr><td><div class="t61" style="mso-line-height-rule:exactly;font-size:1px;display:none;">&nbsp;</div></td></tr><tr><td>
          <table class="t63" role="presentation" cellpadding="0" cellspacing="0" align="center"><tr>
          <!--[if !mso]>--><td class="t62" style="background-color:#FFFFFF;width:400px;padding:40px 40px 40px 40px;">
          <!--<![endif]-->
          <!--[if mso]><td class="t62" style="background-color:#FFFFFF;width:480px;padding:40px 40px 40px 40px;"><![endif]-->
          <table role="presentation" width="100%" cellpadding="0" cellspacing="0"><tr><td>
          <table class="t2" role="presentation" cellpadding="0" cellspacing="0" align="center"><tr>
          <!--[if !mso]>--><td class="t1" style="width:119px;">
          <!--<![endif]-->
          <!--[if mso]><td class="t1" style="width:119px;"><![endif]-->
          <div style="font-size:0px;"><img class="t0" style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width="119" height="125.84375" alt="" src="https://tabular.b-cdn.net/u/b2282f02-0b38-4f7c-8893-0928a5316785/c189d411-ff36-4673-a529-3c2f08186f17.png"/></div></td>
          </tr></table>
          </td></tr><tr><td><div class="t3" style="mso-line-height-rule:exactly;mso-line-height-alt:28px;line-height:28px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td>
          <table class="t6" role="presentation" cellpadding="0" cellspacing="0" align="center"><tr>
          <!--[if !mso]>--><td class="t5" style="width:480px;">
          <!--<![endif]-->
          <!--[if mso]><td class="t5" style="width:480px;"><![endif]-->
          <h1 class="t4" style="margin:0;Margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:41px;font-weight:800;font-style:normal;font-size:39px;text-decoration:none;text-transform:none;letter-spacing:-1.56px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:1px;">Recharger votre compte ! </h1></td>
          </tr></table>
          </td></tr><tr><td><div class="t7" style="mso-line-height-rule:exactly;mso-line-height-alt:33px;line-height:33px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td>
          <table class="t10" role="presentation" cellpadding="0" cellspacing="0" align="center"><tr>
          <!--[if !mso]>--><td class="t9" style="width:480px;">
          <!--<![endif]-->
          <!--[if mso]><td class="t9" style="width:480px;"><![endif]-->
          <p class="t8" style="margin:0;Margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:-0.64px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">
              Bonjour, <br><br>
          </p>

          <p class="t8" style="margin:0;Margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:-0.64px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">
              Nous esp&eacute;rons que ce message vous trouve en pleine forme. <br><br>
          </p>

          <p class="t8" style="margin:0;Margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:-0.64px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">
              Nous souhaitons vous rappeler que votre solde d&rsquo;heures de soutien pour nos services pr&eacute;sentiels est actuellement de <span style="font-weight: bold; color: red;">' . $heure . '</span> heure. Afin de garantir un accompagnement continu et sans interruption, nous vous recommandons de recharger votre compte dès que possible. <br><br>
          </p>

          <p class="t8" style="margin:0;Margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:-0.64px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">
              Nos services pr&eacute;sentiels sont con&ccedil;us pour r&eacute;pondre &agrave; vos besoins de manière efficace et personnalis&eacute;e. Pour continuer &agrave; b&eacute;n&eacute;ficier de notre expertise et de notre soutien dans vos projets, nous vous encourageons &agrave; recharger votre solde d&rsquo;heures. <br><br>
          </p>

          <p class="t8" style="margin:0;Margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:-0.64px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">
              Pour effectuer la recharge de votre solde d&rsquo;heures, veuillez vous rendre &agrave; notre bureau le plus proche. Nos &eacute;quipes seront ravies de vous assister dans cette d&eacute;marche et de r&eacute;pondre &agrave; toutes vos questions &eacute;ventuelles. <br><br>
          </p>

          <p class="t8" style="margin:0;Margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:-0.64px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">
              Nous vous remercions pour votre confiance continue en nos services et nous nous tenons &agrave; votre disposition pour toute demande suppl&eacute;mentaire. <br><br>
          </p>

          <p class="t8" style="margin:0;Margin:0;font-family:Albert Sans,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:400;font-style:normal;font-size:16px;text-decoration:none;text-transform:none;letter-spacing:-0.64px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">
              Cordialement, <br><br>
          </p>

          </tr></table>
          </td></tr><tr><td><div class="t11" style="mso-line-height-rule:exactly;mso-line-height-alt:18px;line-height:18px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td><div class="t13" style="mso-line-height-rule:exactly;mso-line-height-alt:35px;line-height:35px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td>
          <table class="t15" role="presentation" cellpadding="0" cellspacing="0" align="center"><tr>
          <!--[if !mso]>--><td class="t14" style="width:480px;">
          <!--<![endif]-->
          <!--[if mso]><td class="t14" style="width:480px;"><![endif]-->
          </tr></table>
          </td></tr><tr><td><div class="t16" style="mso-line-height-rule:exactly;mso-line-height-alt:94px;line-height:94px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td><div class="t57" style="mso-line-height-rule:exactly;mso-line-height-alt:2px;line-height:2px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td>
          <table class="t59" role="presentation" cellpadding="0" cellspacing="0" align="center"><tr>
          <!--[if !mso]>--><td class="t58" style="background-color:#FFFFFF;border:1px solid #000;width:398px;padding:14px 40px 0 40px;">
          <!--<![endif]-->
          <!--[if mso]><td class="t58" style="background-color:#FFFFFF;border:1px solid #000;width:480px;padding:14px 40px 0 40px;"><![endif]-->
          <table role="presentation" width="100%" cellpadding="0" cellspacing="0"><tr><td>
          <table class="t48" role="presentation" cellpadding="0" cellspacing="0" align="center"><tr>
          <!--[if !mso]>--><td class="t47" style="width:480px;padding:0 0 15px 0;">
          <!--<![endif]-->
          <!--[if mso]><td class="t47" style="width:480px;padding:0 0 15px 0;"><![endif]-->
          <div class="t46" style="display:inline-table;width:100%;text-align:center;vertical-align:middle;">
          <!--[if mso]>
          <table role="presentation" cellpadding="0" cellspacing="0" align="left" valign="middle" width="398"><tr><td width="79.6" valign="middle"><![endif]-->
          <div class="t23" style="display:inline-table;text-align:initial;vertical-align:inherit;width:100%;max-width:200px;">
          <table role="presentation" width="100%" cellpadding="0" cellspacing="0" class="t21"><tr>
          <td class="t20"><table role="presentation" width="100%" cellpadding="0" cellspacing="0"><tr><td>
          <!--[if !mso]>--><table class="t19" role="presentation" cellpadding="0" cellspacing="0" style="Margin-left:auto;Margin-right:auto;">
          <!--<![endif]-->
          <!--[if mso]><table class="t19" role="presentation" cellpadding="0" cellspacing="0" align="left"><![endif]-->
          <tr>
          <!--[if !mso]>--><td class="t18" style="width:92px;">
          <!--<![endif]-->
          <!--[if mso]><td class="t18" style="width:92px;"><![endif]-->
          <div style="font-size:0px;"><a href="https://www.maboum-school.fr/" target="_blank" rel="noopener noreferrer"><img class="t17" style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width="64.60000000000001" height="68.3125" alt="" src="https://tabular.b-cdn.net/u/b2282f02-0b38-4f7c-8893-0928a5316785/c189d411-ff36-4673-a529-3c2f08186f17.png"/></a></div></td>
          </tr></table>
          </td></tr></table></td>
          </tr></table>
          <div class="t22" style="mso-line-height-rule:exactly;mso-line-height-alt:15px;line-height:15px;font-size:1px;display:block;">&nbsp;</div></div>
          <!--[if mso]>
          </td><td width="318.4" valign="middle"><![endif]-->
          <div class="t45" style="display:inline-table;text-align:initial;vertical-align:inherit;width:100%;max-width:480px;">
          <table role="presentation" width="100%" cellpadding="0" cellspacing="0" class="t44"><tr>
          <td class="t43" style="padding:10px 0 11px 0;"><div class="t42" style="display:inline-table;width:100%;text-align:right;vertical-align:middle;">
          <!--[if mso]>
          <table role="presentation" cellpadding="0" cellspacing="0" align="right" valign="middle" width="189"><tr><td class="t25" style="width:17px;" width="17"></td><td width="29" valign="middle"><![endif]-->
          <div class="t29" style="display:inline-table;text-align:initial;vertical-align:inherit;width:33.33333%;max-width:63px;"><div class="t28" style="padding:0 17px 0 17px;">
          <table role="presentation" width="100%" cellpadding="0" cellspacing="0" class="t27"><tr>
          <td class="t26"><div style="font-size:0px;"><a href="https://www.facebook.com/maboumschool" target="_blank" rel="noopener noreferrer"><img class="t24" style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width="29" height="29" alt="" src="https://30d61d41-387a-436d-b448-d68c6fabeab0.b-cdn.net/e/a8b82150-c259-48cb-9f0e-14e8ddca3588/cc3f4b40-5683-4e43-ba81-a6d0fe199ff8.png"/></a></div></td>
          </tr></table>
          </div></div>
          <!--[if mso]>
          </td><td class="t25" style="width:17px;" width="17"></td><td class="t31" style="width:17px;" width="17"></td><td width="29" valign="middle"><![endif]-->
          <div class="t35" style="display:inline-table;text-align:initial;vertical-align:inherit;width:33.33333%;max-width:63px;"><div class="t34" style="padding:0 17px 0 17px;">
          <table role="presentation" width="100%" cellpadding="0" cellspacing="0" class="t33"><tr>
          <td class="t32"><div style="font-size:0px;"><a href="https://www.instagram.com/maboumschool/?hl=fr" target="_blank" rel="noopener noreferrer"><img class="t30" style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width="29" height="29" alt="" src="https://30d61d41-387a-436d-b448-d68c6fabeab0.b-cdn.net/e/a8b82150-c259-48cb-9f0e-14e8ddca3588/cca49cfe-0010-4225-b786-742680fe9589.png"/></a></div></td>
          </tr></table>
          </div></div>
          <!--[if mso]>
          </td><td class="t31" style="width:17px;" width="17"></td><td class="t37" style="width:17px;" width="17"></td><td width="29" valign="middle"><![endif]-->
          <div class="t41" style="display:inline-table;text-align:initial;vertical-align:inherit;width:33.33333%;max-width:63px;"><div class="t40" style="padding:0 17px 0 17px;">
          <table role="presentation" width="100%" cellpadding="0" cellspacing="0" class="t39"><tr>
          <td class="t38"><div style="font-size:0px;"><a href="https://www.linkedin.com/company/maboum-school/" target="_blank" rel="noopener noreferrer"><img class="t36" style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width="29" height="29" alt="" src="https://30d61d41-387a-436d-b448-d68c6fabeab0.b-cdn.net/e/a8b82150-c259-48cb-9f0e-14e8ddca3588/f0cc4bd6-67cf-4e25-9d4e-f3860fba2d1d.png"/></a></div></td>
          </tr></table>
          </div></div>
          <!--[if mso]>
          </td><td class="t37" style="width:17px;" width="17"></td>
          </tr></table>
          <![endif]-->
          </div></td>
          </tr></table>
          </div>
          <!--[if mso]>
          </td>
          </tr></table>
          <![endif]-->
          </div></td>
          </tr></table>
          </td></tr><tr><td><div class="t50" style="mso-line-height-rule:exactly;mso-line-height-alt:4px;line-height:4px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td>
          <table class="t52" role="presentation" cellpadding="0" cellspacing="0" align="center"><tr>
          <!--[if !mso]>--><td class="t51" style="width:480px;">
          <!--<![endif]-->
          <!--[if mso]><td class="t51" style="width:480px;"><![endif]-->
          <p class="t49" style="margin:0;Margin:0;font-family:Inter Tight,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:500;font-style:normal;font-size:14px;text-decoration:none;text-transform:none;direction:ltr;color:#777777;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">69 RUE JULES WATTEEUW, 59100</p></td>
          </tr></table>
          </td></tr><tr><td><div class="t54" style="mso-line-height-rule:exactly;mso-line-height-alt:4px;line-height:4px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td>
          <table class="t56" role="presentation" cellpadding="0" cellspacing="0" align="left"><tr>
          <!--[if !mso]>--><td class="t55" style="width:480px;">
          <!--<![endif]-->
          <!--[if mso]><td class="t55" style="width:480px;"><![endif]-->
          <p class="t53" style="margin:0;Margin:0;font-family:Inter Tight,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;line-height:21px;font-weight:500;font-style:normal;font-size:12px;text-decoration:none;text-transform:none;direction:ltr;color:#777777;text-align:left;mso-line-height-rule:exactly;mso-text-raise:3px;">Copyright © 2022 All rights reserved.</p></td>
          </tr></table>
          </td></tr></table></td>
          </tr></table>
          </td></tr><tr><td><div class="t60" style="mso-line-height-rule:exactly;mso-line-height-alt:48px;line-height:48px;font-size:1px;display:block;">&nbsp;</div></td></tr></table></td>
          </tr></table>
          </td></tr><tr><td><div class="t64" style="mso-line-height-rule:exactly;font-size:1px;display:none;">&nbsp;</div></td></tr></table></td></tr></table></div></body>
          </html>';
          $mail->send();
  }catch (Exception $e) {
    echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
}}

    if ($db->update($id, $nom, $prenom, $etablissement, $classe, $representant, $telephone, $adresse, $complement, $codepostal, $ville, $email, $typesoutien, $matiere, $campus, $heure_payee, $heure)) {
      echo $util->showMessage('success', ' Informations mis à jour avec success !');
    } else {
      echo $util->showMessage('danger', 'Erreur!');
    }
}


  // Handle Delete User Ajax Request
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    if ($db->delete($id)) {
      echo $util->showMessage('info', 'Client a été supprimé avec success !');
    } else {
      echo $util->showMessage('danger', 'Erreur !');
    }
  }

?>