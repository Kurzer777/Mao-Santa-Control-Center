<?php
include("connection.php");


if($_POST['Missao_Input_Nome'] != "")
{
                 $query = "SELECT * FROM `Missao` WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Input_Nome'])."'";
                 $result1 = mysqli_query($link5, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if($results1) {



                         echo "That Missao is already registered.";}

                         else {

                      //Fügen die Person hier zu Datenbank hinzu: für Passwort benutzen wir hashing

$query="INSERT INTO `Missao` (`Nome`,`Cliente`,`Endereco`,`Parceiro`, `Servico`,`Visito`,`Pronto`)VALUES('".mysqli_real_escape_string($link5, $_POST['Missao_Input_Nome'])."',
'".mysqli_real_escape_string($link5, $_POST['Missao_Input_Cliente'])."',
'".mysqli_real_escape_string($link5, $_POST['Missao_Input_Endereco'])."',
'".mysqli_real_escape_string($link5, $_POST['Missao_Input_Parceiro'])."',
'".mysqli_real_escape_string($link5, $_POST['Missao_Input_Servico'])."',
'".mysqli_real_escape_string($link5, $_POST['Missao_Input_Visito'])."',
'".mysqli_real_escape_string($link5, $_POST['Missao_Input_Pronto'])."'
)";


mysqli_query($link5, $query);

                                 echo "The Missao has been signed up";
                                }
}


?>