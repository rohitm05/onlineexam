<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load composer's autoloader
require 'vendor1/autoload.php';

$query="select users1.name,users1.email,users1.mobile,users1.result,users1.total,post.post from users1 inner join post on users1.post=post.id where users1.id='".$_SESSION['id']."'";
          
          $result=mysqli_query($con,$query);
          $arr=mysqli_fetch_array($result,MYSQLI_BOTH);
    $message='<html>
    <head>
    <style>
    table {
        border-collapse: collapse;
        padding:10px;
    }
    table, th , td {
        border: 1px solid black;
        padding:5px;
    }
    </style>
    </head>
    <body>
    <table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Post</th>
    <th>Score</th>
    <th>Total Score</th>
    </tr>
    <tr>
    <td>'.$arr['name'].'</td>
    <td>'.$arr['email'].'</td>
    <td>'.$arr['mobile'].'</td>
    <td>'.$arr['post'].'</td>
    <td>'.$j.'</td>
    <td>'.$_POST['total'].'</td>
    </tr>
    </table>
    </body>
    </html>';
    $mail = new PHPMailer(true);
    $mail1 = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '';
        $mail->Password = '';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;


        //Recipients
        $mail->setFrom('');
        $mail->addAddress('');
        // $mail->addAddress('ellen@example.com');
        $mail->addReplyTo('norply@gmail.com');
        // $mail->addCC('yashsampat99.ys@gmail.com');
        // $mail->addBCC('yashsampat99.ys@gmail.com',$message);

        //Attachments
        //$mail->addAttachment('pdf/Whitepaper On Voice Enabled Applications & It’s Impact.pdf');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Applicant Details';
        $mail->Body    = $message;
        $mail->send();


        $message1='<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Simple Transactional Email</title>
    <style>
    /* -------------------------------------
        INLINED WITH htmlemail.io/inline
    ------------------------------------- */
    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
            table[class=body] .article {
        padding: 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }

    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */
    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      .btn-primary table td:hover {
        background-color: #34495e !important;
      }
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
    </style>
  </head>
  <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
    <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
      <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
          <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is your score.We will contact you soon.</span>
            <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                  <tr>
                  <td><img src="" width="250" height="83"></td>
                  </tr>
                    <tr>
                      <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Hi there,</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Thanks for being part of SOA Recruitment Program.</p>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                          <tbody>
                            <tr>
                              <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                  <tbody>
                                    <tr>
                                      <td style=" text-align: center;">Your score is <b>'.$j.'/'.$_POST['total'].'</b></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                
                <tr>
                  <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                    2018 All rights reserved SOA.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';
        $mail1->SMTPDebug = 0;
        $mail1->isSMTP();
        $mail1->Host = 'smtp.gmail.com';
        $mail1->SMTPAuth = true;
        $mail1->Username = '';
        $mail1->Password = '';
        $mail1->SMTPSecure = 'tls';
        $mail1->Port = 587;
         //Recipients
        $mail1->setFrom('');
        $mail1->addAddress($_SESSION['email']);
        // $mail->addAddress('ellen@example.com');
        $mail1->addReplyTo('norply@gmail.com');
        // $mail->addCC('yashsampat99.ys@gmail.com');
        // $mail->addBCC('yashsampat99.ys@gmail.com',$message);

        //Attachments
        //$mail->addAttachment('pdf/Whitepaper On Voice Enabled Applications & It’s Impact.pdf');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail1->isHTML(true);
        $mail1->Subject = 'Your Score';
        $mail1->Body    = $message1;
    
        $mail1->send();
        
        //echo "<script>document.location.href='index.php'</script>";
    } catch (Exception $e) {
        // echo "<script>alert('Mail was not sent. Please try again later');</script>";
        echo 'Message could not be sent. Mailer Error: ', $mail1->ErrorInfo;
    }
    // finally{
    //     header('Location: index.php?msg=Success');
    //
    // }

?>
