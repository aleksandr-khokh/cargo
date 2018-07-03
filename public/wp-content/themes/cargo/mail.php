<?php

if(isset($_POST['modal_hidden_form'])){$modal_form = htmlspecialchars($_POST['modal_hidden_form']);}
if(isset($_POST['order_hidden_form'])){$order_form = htmlspecialchars($_POST['order_hidden_form']);}

if(isset($_POST['company'])){$company = htmlspecialchars($_POST['company']);}
if(isset($_POST['name'])){$name = htmlspecialchars($_POST['name']);}
if(isset($_POST['phone'])){$phone = htmlspecialchars($_POST['phone']);}

if(isset($_POST['email'])){$email = htmlspecialchars($_POST['email']);}
if(isset($_POST['radioTransport'])){$radioTransport = htmlspecialchars($_POST['radioTransport']);}
if(isset($_POST['radioTam'])){$radioTam = htmlspecialchars($_POST['radioTam']);}
if(isset($_POST['radioContract'])){$radioContract = htmlspecialchars($_POST['radioContract']);}

if(isset($_POST['item_spec'])){$item_spec = htmlspecialchars($_POST['item_spec']);}
if(isset($_POST['item_name'])){$item_name = htmlspecialchars($_POST['item_name']);}
if(isset($_POST['item_tm'])){$item_tm = htmlspecialchars($_POST['item_tm']);}
if(isset($_POST['item_vendor'])){$item_vendor = htmlspecialchars($_POST['item_vendor']);}
if(isset($_POST['item_tnved'])){$item_tnved = htmlspecialchars($_POST['item_tnved']);}
if(isset($_POST['item_weight'])){$item_weight = htmlspecialchars($_POST['item_weight']);}
if(isset($_POST['item_place'])){$item_place = htmlspecialchars($_POST['item_place']);}
if(isset($_POST['item_volume'])){$item_volume = htmlspecialchars($_POST['item_volume']);}
if(isset($_POST['item_cost'])){$item_cost = htmlspecialchars($_POST['item_cost']);}

if(isset($_POST['item_start'])){$item_start = htmlspecialchars($_POST['item_start']);}
if(isset($_POST['item_end'])){$item_end = htmlspecialchars($_POST['item_end']);}

if ( $phone && $modal_form == 'z8C6e') {

  $to = 'office@spaceweb.studio';
  $from='call-back@carg-trading.ru';

  $message = 'Телефон: ' . $phone;

  mail($to, $name, $message, 'From:'.$from);
  
  unset($modal_form);
  unset($_POST['modal_hidden_form']);

  echo "Спасибо за заявку!";
}

if ( $phone && $order_form == 'kDsG766' ) {

  $to = 'office@spaceweb.studio';
  $from='call-back@carg-trading.ru';

  $message = ;

  mail($to, $name, $message, 'From:'.$from);

  unset($order_form);
  unset($_POST['order_hidden_form']);

  echo "Спасибо за заявку!";
}