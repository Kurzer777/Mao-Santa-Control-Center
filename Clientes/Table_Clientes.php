<?php

//KOMMENTAR: BEGINN: Verknüpfung mit den Datenbanken

         include("connection.php");



  $query= "SELECT * FROM `Clientes`";
                 $result = mysqli_query($link3, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Clientes_Nome = $row['Nome'];
                         $Laufvariable_Clientes_Email = $row['Email'];
                         $Laufvariable_Clientes_Telefone = $row['Telefone'];
                         $Laufvariable_Clientes_Endereco = $row['Endereco'];
                         $Laufvariable_Clientes_Comentario = $row['Comentario'];


                         $result_Clientes_Nome .= $Laufvariable_Clientes_Nome.'|';
                         $result_Clientes_Email .= $Laufvariable_Clientes_Email.'|';
                         $result_Clientes_Telefone .= $Laufvariable_Clientes_Telefone.'|';
                         $result_Clientes_Endereco .= $Laufvariable_Clientes_Endereco.'|';
                         $result_Clientes_Comentario .= $Laufvariable_Clientes_Comentario.'|';

                 }


?>