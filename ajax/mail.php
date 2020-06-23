<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $dsn = 'mysql:host=localhost;dbname=database';
  $db = new PDO($dsn, 'root', 'root');

  $stmt = $db->prepare("INSERT INTO applications (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
  $stmt->bindValue(':name', $name);
  $stmt->bindValue(':email', $email);
  $stmt->bindValue(':subject', $subject);
  $stmt->bindValue(':message', $message);
  $stmt->execute();

  // $info = $_POST['name'] . "\r\n" . $_POST['subject'] . "\r\n" . $_POST['message'];
  // $subject_1 = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
  // $headers = "From:email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";


  // $success = mail("nero05@list.ru", $subject_1, $info, $headers);
  // echo $success;
?>