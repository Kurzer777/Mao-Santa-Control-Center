<?php
include("connection.php");


if(!$_POST['Admin_Email']) {echo "Please enter your email ";}
         else{
                 if (!filter_var($_POST['Admin_Email'], FILTER_VALIDATE_EMAIL)) {echo "Enter a valid email address ";}
                 else {$Error_Counter_Admin_Email = "1";}
                 }


if(!$_POST['Admin_Password']) {echo "Please enter your password ";}
         else{
                 if (strlen($_POST['Admin_Password'])<8) {echo " Enter a password with at least 8 characters ";}
                 if (!preg_match('`[A-Z]`', $_POST['Admin_Password'])) {echo "Include at least one capital letter in your password ";}
                 else {$Error_Counter_Admin_Password = "1";}
         }
if($_POST['Admin_Email'] != ""){
if($Error_Counter_Admin_Email==1 && $Error_Counter_Admin_Password==1)
{                $query = "SELECT * FROM `Admin` WHERE Email='".mysqli_real_escape_string($link1, $_POST['Admin_Email'])."'";
                 $result1 = mysqli_query($link1, $query);            //hier wird geprüft, ob die Mailadresse schon in der
                 $results1 = mysqli_num_rows($result1);               //Datenbank existiert
                 if($results1) {

                         echo "That email address is already registered.";}

                         else {

                      //Fügen die Person hier zu Datenbank hinzu: für Passwort benutzen wir hashing

                                 $query="INSERT INTO `Admin` (`Nome`,`Email`,`Password`)VALUES('".mysqli_real_escape_string($link1, $_POST['Admin_Nome'])."','".mysqli_real_escape_string($link1, $_POST['Admin_Email'])."', '".md5(md5($_POST['Admin_Email']).$_POST['Admin_Password'])."')";
                                 mysqli_query($link1, $query);

                                 echo "The Person has been signed up";
                                }
}
}


?>