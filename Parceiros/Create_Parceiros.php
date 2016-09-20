<?php
include("connection.php");

if($_POST['Parceiros_Input_Nome'] != "")
{                $query = "SELECT * FROM `Parceiros` WHERE Nome='".mysqli_real_escape_string($link2, $_POST['Parceiros_Input_Nome'])."'";
                 $result1 = mysqli_query($link2, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if($results1) {

                         echo "That Person is already registered.";}

                         else {

                      //Fügen die Person hier zu Datenbank hinzu

$query="INSERT INTO `Parceiros` (`Nome`,`Email`,`Telefone`,`Endereco`,`Servico`,`Status`)VALUES('".mysqli_real_escape_string($link2, $_POST['Parceiros_Input_Nome'])."',
'".mysqli_real_escape_string($link2, $_POST['Parceiros_Input_Email'])."',
'".mysqli_real_escape_string($link2, $_POST['Parceiros_Input_Telefone'])."',
'".mysqli_real_escape_string($link2, $_POST['Parceiros_Input_Endereco'])."',
'".mysqli_real_escape_string($link2, $_POST['Parceiros_Input_Servico'])."',
'".mysqli_real_escape_string($link2, $_POST['Parceiros_Input_Status'])."'
)";
 mysqli_query($link2, $query);

 echo "The Person has been signed up";
                                }
}


?>