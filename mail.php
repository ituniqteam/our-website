<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = 'alibek.fras@gmail.com'; //Адреса, куда будут приходить письма. две почты указываем через запятую
$sitename = $_SERVER['SERVER_NAME'];

if (isset($_POST['email']) && !empty($_POST['email']))
{
    $name  = strip_tags($_POST['name']);
    $surname  = strip_tags($_POST['surname']);
    $email  = strip_tags($_POST['email']);
    $message  = strip_tags($_POST['message']);

// Формирование заголовка письма
    $subject  = "[Zajavka s sajta ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка:</h2>\r\n";
    if(isset($_POST['name']) && !empty($_POST['name'])){
      $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    }
    if(isset($_POST['surname']) && !empty($_POST['surname'])){
      $msg .= "<p><strong>Фамилия:</strong> ".$surname."</p>\r\n";
    }
    if(isset($_POST['email']) && !empty($_POST['email'])){
      $msg .= "<p><strong>E-mail:</strong> ".$email."</p>\r\n";
    }
    if(isset($_POST['message']) && !empty($_POST['message'])){
      $msg .= "<p><strong>Сообщение:</strong> ".$message."</p>\r\n";
    }
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
else
{
    echo "Заявка не отправлена :(";
}
?>