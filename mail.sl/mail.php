<?php
	//Принимаем постовые данные
	$form=$_POST['form'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	//Тут указываем на какой ящик посылать письмо
	$to = "as-pic@yandex.ru";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Заявка с сайта";
	// Сообщение письма
	$message = "
	Форма: ".htmlspecialchars($form)."<br />
	Имя пользователя: ".htmlspecialchars($name)."<br />
	Email: ".htmlspecialchars($email)." <br />
	Message: ".htmlspecialchars($message);
	// Отправляем письмо при помощи функции mail();
	$headers = "From: webanas.ru <message@webanas.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	header('Location: thanks.html');
	exit();
?>