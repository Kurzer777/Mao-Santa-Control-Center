<?php

//KOMMENTAR: BEGINN: Verkn�pfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Cartao`";
                 $result = mysqli_query($link4, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Comentario = $row['Comentario'];


                         $result_Comentario .= $Laufvariable_Comentario.'|';

                 }

                echo $result_Comentario;
?>