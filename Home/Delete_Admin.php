<?php
include("connection.php");

if($_POST['Admin_Nome_delete'] != "")
{

                 $query = "SELECT * FROM `Admin` WHERE Nome='".mysqli_real_escape_string($link1, $_POST['Admin_Nome_delete'])."'";
                 $result1 = mysqli_query($link1, $query);            //hier wird gepr�ft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if(!$results1) {

                         echo "Diese Person existiert nicht.";
                                 }

                         else {

                      //L�schen der Person aus der Datenbank

                                 $query="DELETE FROM `Admin` WHERE Nome='".mysqli_real_escape_string($link1, $_POST['Admin_Nome_delete'])."'";
                                  mysqli_query($link1, $query);
                                 echo "Die Person wurde entfernt";
                                }
}


?>