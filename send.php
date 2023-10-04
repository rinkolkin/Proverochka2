<?php 
if (isset($_POST['name']) && isset($_POST['tel'])) {
$name = $_POST['name'];
$tel = $_POST['tel'];

    if (mail('rinkolkin@gmail.com',
    'Новый заказ'
    'Вы успешно формили заказ' ."/n".
    'Ваше имя: '.$name."/n".
    'Ваш телефон: '.$tel
    )))) {
      echo('Успешно отправлено')
    } else {
        echo('Ошибка')
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="tel" placeholder="WhatsApp">
<input type="submit" value="отправить">

</body>
</html>