<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5683799434:AAEx-VK5IQ8rylrk7Jjzu6Jle-oDzxG1vjE";

//Сюда вставляем chat_id
$chat_id = "-1001730419309";

//Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'order') {
    $name = ($_POST['name']);
    $surname = ($_POST['surname']);
    $email = ($_POST['email']);
    $message = ($_POST['message']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $name,
        'Фамилия:' => $surname,
        'Email' => $email,
        'Проект' => $message,
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
    if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. Попробуйте отправить форму ещё раз.');
    }
}

?>