<?php

//KOMMENTAR: BEGINN: Verkn�pfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Cartao`";
                 $result = mysqli_query($link4, $query);

                 while ($row = mysqli_fetch_array($result)) {

                         $Laufvariable_Email = $row['Email'];


                         $result_Email .= $Laufvariable_Email.'|';

                 }

                echo $result_Email;
?>