<?php

include("connection.php");

      if($_POST['Cliente_Change_Nome'] != "")
{

                 $query = "SELECT * FROM `Clientes` WHERE Nome='".mysqli_real_escape_string($link3, $_POST['Cliente_Change_Nome'])."'";
                 $result1 = mysqli_query($link3, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if(!$results1) {

                         echo "1";
                                 }else{
                                          echo "2";
                                         }
}

?>