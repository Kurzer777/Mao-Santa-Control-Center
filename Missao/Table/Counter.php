<?php

//KOMMENTAR: BEGINN: Verknüpfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Missao`";
                 $result = mysqli_query($link5, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Nome = $row['Nome'];


                         $result_Nome .= $Laufvariable_Nome.'|';

                 }

                echo $Counter;
?>