<?php
include("connection.php");


if($_POST['Cartao_Nome_delete'] != "")
{
 $query = "SELECT * FROM `Cartao` WHERE Nome='".mysqli_real_escape_string($link4, $_POST['Cartao_Nome_delete'])."'";
                 $result1 = mysqli_query($link4, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if(!$results1) {

                         echo "Diese Cartao existiert nicht.";
                                 }

                         else {

                      //Löschen der Person aus der Datenbank

                                 $query="DELETE FROM `Cartao` WHERE Nome='".mysqli_real_escape_string($link4, $_POST['Cartao_Nome_delete'])."'";
                                  mysqli_query($link4, $query);
                                 echo "Die Cartao wurde entfernt";
                                }

}
?>