<?php

//KOMMENTAR: BEGINN: Verknüpfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Missao`";
                 $result = mysqli_query($link5, $query);

                 while ($row = mysqli_fetch_array($result)) {
                       
                         $Laufvariable_Endereco = $row['Endereco'];


                         $result_Endereco .= $Laufvariable_Endereco.'|';

                 }

                echo $result_Endereco;
?>