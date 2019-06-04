<?php
header('Location: http://CSAA/index.php');
$connect = mysqli_connect('127.0.0.1', 'root', '', 'ivan_pndelnik09');
$query = mysqli_query($connect, "INSERT INTO tweet (logo, title, text, img) VALUES ('avatar.jpg', 'VanyJane', '" . $_POST['text'] . "', 'habr.jpg')");
header('Location: http://CSAA/index.php');
?>