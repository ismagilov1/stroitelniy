<?php
  if (isset($_POST['phone'])) {
    $pattern = '/\d{3}\s\d{3}\s\d{2}\s\d{2}$/';
    preg_match($pattern, $_POST['phone'], $matches, PREG_UNMATCHED_AS_NULL);

     if(!empty($matches[0])) {

      $to = " ruulllo3@gmail.com"; // емайл получателя данных из формы
      $tema = "Заявка c сайта Стэпвелл"; // тема полученного емайла
      $message .= "Номер телефона: <b>+7 ".$_POST['phone']."</b><br>"; //полученное из формы name=phone
      $message .= "Имя: ".$_POST['client']."</b><br>"; //полученное из формы name=client
      $message .= "К кому: <b>".$_POST['to']."</b>"; //полученное из формы name=phone
      $headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
      $headers .= "From: Zhelezo <info@zhelezosport.ru>\r\n"; // От кого
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
      
      mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных

      setcookie('phone', $_POST['phone'], strtotime( '+1 days' ));
    }; 
  }
  header("Location: http://zhelezosport.ru/");
?>