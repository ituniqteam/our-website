<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$gmail = $_POST['gmail'];
$project = $_POST['post'];

$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$gmail = htmlspecialchars($gmail);
$project = htmlspecialchars($project);
$name = urldecode($name);
$surname = urldecode($surname);
$gmail = urldecode($gmail);
$project = urldecode($project);
$name = trim($name);
$surname = trim($surname);
$gmail = trim($gmail);
$project = trim($project)
//echo $name;
//echo "<br>";
//echo $gmail;
if (mail("alibek.fras@gmail.com", "Заявка с сайта", "ФИО:".$name." ".$surname.". E-mail: ".$gmail ,"Project info: \r\n".$project))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>