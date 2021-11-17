<?php

$to = "mail@test.test";
$subject = "お問合せがありました";

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$content = $_POST["content"];

$message = "お名前: $name\n" .
           "メルアドレス: $email" .
           "電話番号 : $number";
           "内容 : $content";

echo $name;

// $mb_send_mail(
//   $to,
//   $subject,
// )

?>

<h1> thanks </h1>
