<?php

include("connection.php");

if($_POST['Missao_Change_Nome'] != "")
{

                 $query = "SELECT * FROM `Missao` WHERE Nome='".mysqli_real_escape_string($link5, $_POST['Missao_Change_Nome'])."'";
                 $result1 = mysqli_query($link5, $query);            //hier wird gepr�ft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if(!$results1) {

                         echo "1";
                                 }else{
                                          echo "2";
                                         }
}