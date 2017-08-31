<?php
$recepient = "dc_creat@bk.ru";
$sitename = "СВОЙ-ДОМ-ИНФО";
$subject   = "СРОЧНАЯ Заявка на ВЫБОР УЧАСТКА с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$uchastok = trim($_POST["uchastok"]);
// $radio_name = trim($_POST["radio_name"]);

$message = "
СРОЧНАЯ Заявка на ВЫБОР УЧАСТКА с сайта  $sitename <br><br>
Имя: $name <br>
Телефон: $phone <br>
E-mail: $email <br>
Участок N: $uchastok <br>
";

//mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
mail($recepient, $subject, $message, "From: info@svoi-dom.info" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");

$subject2 = "Ваша заявка на ВЫБОР УЧАСТКА на сайте Svoi-Dom.INFO принята к исполнению";
$message2 = "Здравствуйте, $name! <br><br>Вы оставляли заявку на сайте <strong>https://SVOI-DOM.INFO</strong><br><br>
Ваш выбор: <strong>Участок N $uchastok </strong><br><br>
Наш менеджер перезвонит Вам в ближайшее время.<br><br>

---------------------------------------------------------------------------------------------------------<br><br>

<br>Если вы получили запрос по ошибке, просто проигнорируйте это письмо.<br>---<br>
Администрация сайта 'СВОЙ ДОМ'<br>
+7(917)2000797; +7(916)8011992
";

mail($email, $subject2, $message2, "From: info@svoi-dom.info" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
