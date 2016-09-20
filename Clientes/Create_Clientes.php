<?php
include("connection.php");


if($_POST['Clientes_Input_Nome'] != "")
{
                 $query = "SELECT * FROM `Clientes` WHERE Nome='".mysqli_real_escape_string($link3, $_POST['Clientes_Input_Nome'])."'";
                 $result1 = mysqli_query($link3, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if($results1) {



                         echo "That Client is already registered.";}

                         else {

                      //Fügen die Person hier zu Datenbank hinzu: für Passwort benutzen wir hashing

$query="INSERT INTO `Clientes` (`Nome`,`Email`,`Telefone`,`Endereco`,`Comentario`)VALUES('".mysqli_real_escape_string($link3, $_POST['Clientes_Input_Nome'])."',
'".mysqli_real_escape_string($link3, $_POST['Clientes_Input_Email'])."',
'".mysqli_real_escape_string($link3, $_POST['Clientes_Input_Telefone'])."',
'".mysqli_real_escape_string($link3, $_POST['Clientes_Input_Endereco'])."',
'".mysqli_real_escape_string($link3, $_POST['Clientes_Input_Comentario'])."'
)";


mysqli_query($link3, $query);

                                 echo "The Cliente has been signed up";
                                }
}


?>