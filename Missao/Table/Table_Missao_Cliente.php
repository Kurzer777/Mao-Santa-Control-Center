<?php

//KOMMENTAR: BEGINN: Verknüpfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Missao`";
                 $result = mysqli_query($link5, $query);

                 while ($row = mysqli_fetch_array($result)) {

                         $Laufvariable_Cliente = $row['Cliente'];


                         $result_Cliente .= $Laufvariable_Cliente.'|';

                 }

                echo $result_Cliente;
?>