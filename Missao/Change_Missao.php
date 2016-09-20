<?php

include("connection.php");

if($_POST['Missao_Change_Nome'] != "")
{

                 $query = "SELECT * FROM `Missao` WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Nome'])."'";
                 $result1 = mysqli_query($link5, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if(!$results1) {

                         echo "Diese Person existiert nicht.";
                                 }

                         else {


if($_POST['Missao_Change_Cliente'] != "")
{
$query="UPDATE Missao SET Cliente='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Cliente'])."' WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Nome'])."'LIMIT 1";
mysqli_query($link5, $query);
echo "The Cliente has been changed";
}
if($_POST['Missao_Change_Endereco'] != "")
{
$query="UPDATE Missao SET Endereco='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Endereco'])."' WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Nome'])."'LIMIT 1";
mysqli_query($link5, $query);
echo "The Endereco has been changed";
}
if($_POST['Missao_Change_Parceiro'] != "")
{
$query="UPDATE Missao SET Parceiro='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Parceiro'])."' WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Nome'])."'LIMIT 1";
mysqli_query($link5, $query);
echo "The Parceiro has been changed";
}
if($_POST['Missao_Change_Servico'] != "")
{
$query="UPDATE Missao SET Servico='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Servico'])."' WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Nome'])."'LIMIT 1";
mysqli_query($link5, $query);
echo "The Servico has been changed";
}
if($_POST['Missao_Change_Visito'] != "")
{
$query="UPDATE Missao SET Visito='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Visito'])."' WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Nome'])."'LIMIT 1";
mysqli_query($link5, $query);
echo "The Visito has been changed";
}
if($_POST['Missao_Change_Pronto'] != "")
{
$query="UPDATE Missao SET Pronto='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Pronto'])."' WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Nome'])."'LIMIT 1";
mysqli_query($link5, $query);
echo "The Pronto has been changed";
}
                                 }
}

?>