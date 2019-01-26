<?php
/**
 * https://api.telegram.org/bot452721539:AAGMGt6v_cRhlvAHDHte_7b_TQYPIEuQR9I/getUpdates
 */

$_POST = json_decode(file_get_contents('php://input'), true);


$item1 = $_POST['items1'];
$item2 = $_POST['items2'];
$item3 = $_POST['items3'];
$item4 = $_POST['items4'];
$item5 = $_POST['items5'];
$item6 = $_POST['items6'];
$item7 = $_POST['items7'];
$item8 = $_POST['phone'];

$token = "452721539:AAGMGt6v_cRhlvAHDHte_7b_TQYPIEuQR9I";
$chat_id = "-260149605";
$arr = array(
    'Параметры планировки кухни: ' => $item1,
    'Выберите материал фасадов: ' => $item2,
    'Выберите столешницу: ' => $item3,
    'Выберите тип фурнитуры: ' => $item4,
    'В какой бюджет Вы планируете уложиться? ' => $item5,
    'Планируете ли Вы кухню в рассрочку? ' => $item6,
    'Выберите Ваш подарок к кухне: ' => $item7,
    'Ваш телефон: ' => $item8,
);

foreach ($arr as $key => $value){
    $txt .= "<b>".$key."</b>".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
/*
if ($sendToTelegram){
    echo '<h1 class="success">Спасибо за отправку вашего сообщения!</h1>';
    return true;
}else{
    header('Location: thank-you.html');
    echo "Error";
}
*/

