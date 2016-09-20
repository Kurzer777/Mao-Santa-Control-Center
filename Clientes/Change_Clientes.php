<?php
include("connection.php");

if($_POST['Cliente_Change_Nome'] != "")
{

                 $query = "SELECT * FROM `Clientes` WHERE Nome='".mysqli_real_escape_string($link3, $_POST['Cliente_Change_Nome'])."'";
                 $result1 = mysqli_query($link3, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if(!$results1) {

                         echo "Diese Person existiert nicht.";
                                 }

                         else {


if($_POST['Cliente_Change_Email'] != "")
{
$query="UPDATE Clientes SET Email='".mysqli_real_escape_string($link3, $_POST['Cliente_Change_Email'])."' WHERE Nome='".mysqli_real_escape_string($link3, $_POST['Cliente_Change_Nome'])."'LIMIT 1";
mysqli_query($link3, $query);
echo "The E-Mail has been changed";
}
if($_POST['Cliente_Change_Telefone'] != "")
{
$query="UPDATE Clientes SET Telefone='".mysqli_real_escape_string($link3, $_POST['Cliente_Change_Telefone'])."' WHERE Nome='".mysqli_real_escape_string($link3, $_POST['Cliente_Change_Nome'])."'LIMIT 1";
mysqli_query($link3, $query);
echo "The Telefone has been changed";
}
if($_POST['Cliente_Change_Endereco'] != "")
{
$query="UPDATE Clientes SET Endereco='".mysqli_real_escape_string($link3, $_POST['Cliente_Change_Endereco'])."' WHERE Nome='".mysqli_real_escape_string($link3, $_POST['Cliente_Change_Nome'])."'LIMIT 1";
mysqli_query($link3, $query);
echo "The Endereco has been changed";
}
if($_POST['Cliente_Change_Comentario'] != "")
{
$query="UPDATE Clientes SET Comentario='".mysqli_real_escape_string($link3, $_POST['Cliente_Change_Comentario'])."' WHERE Nome='".mysqli_real_escape_string($link3, $_POST['Cliente_Change_Nome'])."'LIMIT 1";
mysqli_query($link3, $query);
echo "The Comentario has been changed";
}

                                 }
}




?>