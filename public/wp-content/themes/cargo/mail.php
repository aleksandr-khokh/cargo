<?php

if(isset($_POST['name'])){$username = htmlspecialchars($_POST['name']);}
if(isset($_POST['phone'])){$phone = htmlspecialchars($_POST['phone']);}


if ( $phone ) {

  $to = 'office@spaceweb.studio';
  $from='call-back@carg-trading.ru';

  mail($to, $username, $message, 'From:'.$from);

  echo "Спасибо за заявку!";

}