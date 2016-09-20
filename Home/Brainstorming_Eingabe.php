<?php
session_start();
include("connection.php");

$query="UPDATE Admin SET Brainstorm='".mysqli_real_escape_string($link1, $_POST['Input_Text'])."' WHERE id='".$_SESSION['login_id']."'LIMIT 1";
mysqli_query($link1, $query);

?>