<?php

//KOMMENTAR: BEGINN: Verkn�pfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Missao`";
                 $result = mysqli_query($link5, $query);

                 while ($row = mysqli_fetch_array($result)) {
                    
                         $Laufvariable_Servico = $row['Servico'];


                         $result_Servico .= $Laufvariable_Servico.'|';

                 }

                echo $result_Servico;
?>