<?php
include("connection.php");


if($_POST['Missao_Nome_delete'] != "")
{
 $query = "SELECT * FROM `Missao` WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Nome_delete'])."'";
                 $result1 = mysqli_query($link5, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if(!$results1) {

                         echo "Diese Person existiert nicht.";
                                 }

                         else {

                      //Löschen der Person aus der Datenbank

                                 $query="DELETE FROM `Missao` WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Nome_delete'])."'";
                                  mysqli_query($link5, $query);
                                 echo "Die Person wurde entfernt";
                                }

}
?>