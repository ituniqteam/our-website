<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $gmail = $_POST['gmail'];
    $text = $_POST['text'];

	$to = "alibek.fras@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $gmail;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Почта: $gmail /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
