mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email , . " Сообщение: ".$words. , From: vasilievmaxim313@gmail.com\r\n");
if (mail("example@mail.ru", "Заказ с сайта", "ФИО:".$fio.". E-mail: ".$email , " Сообщение:" .$words. , From: vasilievmaxim313@gmail.com \r\n"))
 {
    echo "Сообщение успешно отправлено";
} else {
    echo "При отправке сообщения возникли ошибки";
}
