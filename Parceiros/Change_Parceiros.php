<?php

include("connection.php");

if($_POST['Parceiros_Change_Nome'] != "")
{

                 $query = "SELECT * FROM `Parceiros` WHERE Nome='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Nome'])."'";
                 $result1 = mysqli_query($link2, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if(!$results1) {

                         echo "Diese Person existiert nicht.";
                                 }

                         else {


if($_POST['Parceiros_Change_Email'] != "")
{
$query="UPDATE Parceiros SET Email='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Email'])."' WHERE Nome='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Nome'])."'LIMIT 1";
mysqli_query($link2, $query);
echo "The E-Mail has been changed";
}
if($_POST['Parceiros_Change_Telefone'] != "")
{
$query="UPDATE Parceiros SET Telefone='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Telefone'])."' WHERE Nome='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Nome'])."'LIMIT 1";
mysqli_query($link2, $query);
echo "The Telefone has been changed";
}
if($_POST['Parceiros_Change_Endereco'] != "")
{
$query="UPDATE Parceiros SET Endereco='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Endereco'])."' WHERE Nome='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Nome'])."'LIMIT 1";
mysqli_query($link2, $query);
echo "The Endereco has been changed";
}
if($_POST['Parceiros_Change_Servico'] != "Servicos")
{
$query="UPDATE Parceiros SET Servico='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Servico'])."' WHERE Nome='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Nome'])."'LIMIT 1";
mysqli_query($link2, $query);
echo "The Servico has been changed";
}
if($_POST['Parceiros_Change_Status'] != "Status")
{
$query="UPDATE Parceiros SET Status='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Status'])."' WHERE Nome='".mysqli_real_escape_string($link2, $_POST['Parceiros_Change_Nome'])."'LIMIT 1";
mysqli_query($link2, $query);
echo "The Status has been changed";
}



                                 }
}

?>