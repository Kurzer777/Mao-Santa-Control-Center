<?php

//KOMMENTAR: BEGINN: Verknüpfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Missao`";
                 $result = mysqli_query($link5, $query);

                 while ($row = mysqli_fetch_array($result)) {
                     
                         $Laufvariable_Visito = $row['Visito'];


                         $result_Visito .= $Laufvariable_Visito.'|';

                 }

                echo $result_Visito;
?>