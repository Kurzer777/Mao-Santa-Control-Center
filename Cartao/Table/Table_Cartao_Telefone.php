<?php

//KOMMENTAR: BEGINN: Verknüpfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Cartao`";
                 $result = mysqli_query($link4, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Telefone = $row['Telefone'];


                         $result_Telefone .= $Laufvariable_Telefone.'|';

                 }

                echo $result_Telefone;
?>