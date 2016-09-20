<?php
session_start();
include("connection.php");

$query="SELECT * FROM Admin WHERE id='".$_SESSION['login_id']."'LIMIT 1";
$result = mysqli_query($link1, $query);
$row = mysqli_fetch_array($result);
$Brainstorm = $row['Brainstorm'];
echo $Brainstorm;
?>