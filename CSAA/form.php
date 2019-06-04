<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ivan_pndelnik09');
mysqli_query($connect, "UPDATE tweet SET text = '" . $_POST['text'] . "' WHERE id='". $_POST['id'] ."'");
header('Location: http://CSAA/index.php');
?>