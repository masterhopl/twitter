<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'ivan_pndelnik09');
$query = mysqli_query($con, "DELETE FROM tweet WHERE id='" . $_GET['id'] . "'" );
header('Location: http://CSAA/index.php');
 ?>