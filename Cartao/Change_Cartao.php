<?php

include("connection.php");

if($_POST['Cartao_Change_Nome'] != "")
{

                 $query = "SELECT * FROM `Cartao` WHERE Nome='".mysqli_real_escape_string($link4, $_POST['Cartao_Change_Nome'])."'";
                 $result1 = mysqli_query($link4, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if(!$results1) {

                         echo "Diese Person existiert nicht.";
                                 }

                         else {


if($_POST['Cartao_Change_Email'] != "")
{
$query="UPDATE Cartao SET Email='".mysqli_real_escape_string($link4, $_POST['Cartao_Change_Email'])."' WHERE Nome='".mysqli_real_escape_string($link4, $_POST['Cartao_Change_Nome'])."'LIMIT 1";
mysqli_query($link4, $query);
echo "The E-Mail has been changed";
}
if($_POST['Cartao_Change_Telefone'] != "")
{
$query="UPDATE Cartao SET Telefone='".mysqli_real_escape_string($link4, $_POST['Cartao_Change_Telefone'])."' WHERE Nome='".mysqli_real_escape_string($link4, $_POST['Cartao_Change_Nome'])."'LIMIT 1";
mysqli_query($link4, $query);
echo "The Telefone has been changed";
}
if($_POST['Cartao_Change_Comentario'] != "")
{
$query="UPDATE Cartao SET Comentario='".mysqli_real_escape_string($link4, $_POST['Cartao_Change_Comentario'])."' WHERE Nome='".mysqli_real_escape_string($link4, $_POST['Cartao_Change_Nome'])."'LIMIT 1";
mysqli_query($link4, $query);
echo "The Comentario has been changed";
}

                                 }
}

?>