<?php

//KOMMENTAR: BEGINN: Verknüpfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Clientes`";
                 $result = mysqli_query($link3, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Nome = $row['Nome'];


                         $result_Nome .= $Laufvariable_Nome.'|';

                 }

                echo $result_Nome;
?>