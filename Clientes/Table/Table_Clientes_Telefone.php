<?php

//KOMMENTAR: BEGINN: Verkn�pfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Clientes`";
                 $result = mysqli_query($link3, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Telefone = $row['Telefone'];


                         $result_Telefone .= $Laufvariable_Telefone.'|';

                 }

                echo $result_Telefone;
?>