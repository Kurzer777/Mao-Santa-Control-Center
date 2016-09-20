<?php

//KOMMENTAR: BEGINN: Verknüpfung mit den Datenbanken

         include("connection.php");


if($_POST['choise'] == "Tudo"){
  $query= "SELECT * FROM `Parceiros`";
                 $result = mysqli_query($link2, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Status = $row['Status'];


                         $result_Status .= $Laufvariable_Status.'|';

                 }

                echo $result_Status;
}


if($_POST['choise'] == "Electricistas"){
  $query= "SELECT * FROM `Parceiros` WHERE `Servico` = 'Electricista'";
                 $result = mysqli_query($link2, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Status = $row['Status'];


                         $result_Status .= $Laufvariable_Status.'|';

                 }

                echo $result_Status;
}

if($_POST['choise'] == "Encanadoras"){
  $query= "SELECT * FROM `Parceiros` WHERE `Servico` = 'Encanador'";
                 $result = mysqli_query($link2, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Status = $row['Status'];


                         $result_Status .= $Laufvariable_Status.'|';

                 }

                echo $result_Status;
}

if($_POST['choise'] == "Marcenieras"){
  $query= "SELECT * FROM `Parceiros` WHERE `Servico` = 'Marceniero'";
                 $result = mysqli_query($link2, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Status = $row['Status'];


                         $result_Status .= $Laufvariable_Status.'|';

                 }

                echo $result_Status;
}

if($_POST['choise'] == "Pedreiras"){
  $query= "SELECT * FROM `Parceiros` WHERE `Servico` = 'Pedreiro'";
                 $result = mysqli_query($link2, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Status = $row['Status'];


                         $result_Status .= $Laufvariable_Status.'|';

                 }

                echo $result_Status;
}

if($_POST['choise'] == "Pequenos reparos"){
  $query= "SELECT * FROM `Parceiros` WHERE `Servico` = 'Pequenos reparos'";
                 $result = mysqli_query($link2, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Status = $row['Status'];


                         $result_Status .= $Laufvariable_Status.'|';

                 }

                echo $result_Status;
}

if($_POST['choise'] == "Pintoras"){
  $query= "SELECT * FROM `Parceiros` WHERE `Servico` = 'Pintor'";
                 $result = mysqli_query($link2, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Status = $row['Status'];


                         $result_Status .= $Laufvariable_Status.'|';

                 }

                echo $result_Status;
}

if($_POST['choise'] == "Reformas"){
  $query= "SELECT * FROM `Parceiros` WHERE `Servico` = 'Reforma'";
                 $result = mysqli_query($link2, $query);
                 $Counter = 0;
                 while ($row = mysqli_fetch_array($result)) {
                         $Counter = $Counter +1;
                         $Laufvariable_Status = $row['Status'];


                         $result_Status .= $Laufvariable_Status.'|';

                 }

                echo $result_Status;
}
?>