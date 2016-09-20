<?php
   session_start();
//KOMMENTAR: BEGINN: Verknüpfung mit den Datenbanken

   include("php/connection.php");

   if (mysqli_connect_error()) {
         die("Could not connect to database");
         }
//KOMMENTAR: ENDE: Verknüpfung Datenbanken



//KOMMENTAR:BEGINN: LogIn

if($_POST['submit']=="Log In"){
         $query="SELECT * FROM `Admin` WHERE Email='".mysqli_real_escape_string($link1, $_POST['logemail'])."'";
         $result = mysqli_query($link1, $query);            //hier wird geprüft, ob die Mailadresse schon in der
         $results = mysqli_num_rows($result);               //Datenbank existiert
         $Erfolg = 0;
         if($results){
         $Erfolg = 1;
         }
         else $Fehler="User existiert nicht";
}

if($_POST['submit']=="Log In"){
         $Erfolg==1 AND $query="SELECT * FROM `Admin` WHERE Password='".md5(md5($_POST['logemail']).$_POST['logpassword'])."' LIMIT 1";
         $result = mysqli_query($link1, $query);            //hier wird geprüft, ob die Mailadresse schon in der
         $results = mysqli_num_rows($result);               //Datenbank existiert

         if($results){
                 header("Location:MaoSantaControlCenter.php");
                 $row = mysqli_fetch_array($result);
                 $send_id = $row['id'];                       //Variable, welche die "Id" des sich einloggenden Users enthält
                 $_SESSION['login_id'] = $send_id;
         }
         else $Fehler="Wrong Password";
}
//KOMMENTAR: ENDE: LogIn


?>