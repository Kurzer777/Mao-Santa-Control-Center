<?php

//KOMMENTAR: BEGINN: Verkn�pfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Missao`";
                 $result = mysqli_query($link5, $query);

                 while ($row = mysqli_fetch_array($result)) {
                  
                         $Laufvariable_Nome = $row['Nome'];


                         $result_Nome .= $Laufvariable_Nome.'|';

                 }

                echo $result_Nome;
?>