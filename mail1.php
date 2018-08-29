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
        $mail->Username = 'yashs.letsnurture@gmail.com';
        $mail->Password = 'letsnurture@123';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;


        //Recipients
        $mail->setFrom('yashs.letsnurture@gmail.com');
        $mail->addAddress('rohitm0505@gmail.com');
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


        
        $mail1->SMTPDebug = 0;
        $mail1->isSMTP();
        $mail1->Host = 'smtp.gmail.com';
        $mail1->SMTPAuth = true;
        $mail1->Username = 'yashs.letsnurture@gmail.com';
        $mail1->Password = 'letsnurture@123';
        $mail1->SMTPSecure = 'tls';
        $mail1->Port = 587;
         //Recipients
        $mail1->setFrom('yashs.letsnurture@gmail.com');
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
        $mail1->Subject = 'Applicant Details';
        $mail1->Body    = 'Your Score is '.$j.'/'.$_POST['total'];
    
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
