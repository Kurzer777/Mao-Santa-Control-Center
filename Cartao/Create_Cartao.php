<?php
include("connection.php");

if($_POST['Cartao_Input_Nome'] != "")
{
                 $query = "SELECT * FROM `Cartao` WHERE Nome='".mysqli_real_escape_string($link4, $_POST['Cartao_Input_Nome'])."'";
                 $result1 = mysqli_query($link4, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if($results1) {



                         echo "That Cartao is already registered.";}

                         else {

                      //Fügen die Person hier zu Datenbank hinzu: für Passwort benutzen wir hashing

$query="INSERT INTO `Cartao` (`Nome`,`Email`,`Telefone`,`Comentario`)VALUES('".mysqli_real_escape_string($link4, $_POST['Cartao_Input_Nome'])."',
'".mysqli_real_escape_string($link4, $_POST['Cartao_Input_Email'])."',
'".mysqli_real_escape_string($link4, $_POST['Cartao_Input_Telefone'])."',
'".mysqli_real_escape_string($link4, $_POST['Cartao_Input_Comentario'])."'
)";


mysqli_query($link4, $query);

                                 echo "The Cartao has been signed up";
                                }
}


?>