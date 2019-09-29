<?php 
if (!empty($_POST['name']) AND !empty($_POST['email'])){
  
  $headers = 'From: Me\r\n'.
             'Reply-To: Nagibator.12339@gmail.com\r\n'.
              'X-Mailer: PHP/'. phpversion();
             
  $theme = 'Новое сообщение';

  $letter = 'Данные сообщения:\r\n';
  $letter .='Имя: '.$_POST['name'].'\r\n';
  $letter .='Email: '.$_POST['email'].'\r\n';
  
  if (mail('Nagibator.12339@gmail.com', $theme, $letter, $headers)){
    echo "Сообщение отправлено!";
  } else {
    echo "Ошибка при отправке!";
  }
} else {
  echo "Ошибка: Заполните все поля!";
}