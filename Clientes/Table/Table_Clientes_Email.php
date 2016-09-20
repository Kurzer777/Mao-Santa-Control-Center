<?php

//KOMMENTAR: BEGINN: Verknüpfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Clientes`";
                 $result = mysqli_query($link3, $query);

                 while ($row = mysqli_fetch_array($result)) {

                         $Laufvariable_Email = $row['Email'];


                         $result_Email .= $Laufvariable_Email.'|';

                 }

                echo $result_Email;
?>