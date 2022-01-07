<?php

$recepient = "venom0us2015@yandex.ru";
$siteName = "Just-Sites.ru";

$company = trim($_POST["comp_name"]);
$typesite = trim($_POST["type_site"]);
$sitename = trim($_POST["site_name"]);
$timesite = trim($_POST["time_site"]);
$hostname = trim($_POST["host_name"]);
$sitespec = trim($_POST["site_spec"]);
$name = trim($_POST["user_name"]);
$phone = trim($_POST["user_phone"]);
$mail = trim($_POST["user_mail"]);

$message = "Имя: $name \nПочта: $mail \nТелефон: $phone \nНазвание компании: $company \nВид сайта: $typesite \nИмя домена: $sitename \nСроки: $timesite \nРазмещение: $hostname \nПримечания: $sitespec";

$pagetitle = "Бриф с сайта \"$siteName\" для уточнения и согласования";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>