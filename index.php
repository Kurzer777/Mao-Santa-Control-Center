<?php
  session_start();
  include("php/connection.php");
  include("LogIn/login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mao Santa Servicos Control Center</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></
script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/
respond.min.js"></script>
<![endif]-->




<style>

#topContainer {
background-image:url("background.jpg");
height:400px;
width:100%;
background-size:cover;
}
#topRow {
margin-top:100px;
text-align:center;
}
#topRow h1 {
font-size:300%;
}

.marginTop {
margin-top:30px;
}




</style>
</head>

<body background="Background_LogIn.jpg">
<!--<body>-->

<!--BEGINN: Log In Page-->
<div class="container contentContainer" id="topContainer">
         <div class="row">
                 <div class="col-md-6 col-md-offset-3" id="topRow">
                         <h1 class="marginTop">Mao Santa</h1>

<!--BEGINN: Admin Log In-->

<?php
if($Fehler){
         echo '<div class="alert alert-danger">'.addslashes($Fehler).'</div>';
}
?>

                         <form class="marginTop" method="post">
                                 <div class="form-group">
                                         <label for="email">Email Adresse</label>
                                         <input type="email" name="logemail" class="form-control" placeholder="Your Email Adress" value="<?php echo addslashes($_POST['logemail']); ?>"/>
                                 </div>
                                 <div class="form-group">
                                         <label for="password">Password</label>
                                         <input type="password" name="logpassword" class="form-control" placeholder="Your Password"value="<?php echo addslashes($_POST['logpassword']); ?>"/>
                                 </div>
                                 <input type="submit" name="submit" value="Log In" class="btn btn-success btn-lg marginTop" />
                         </form>
                 </div>
         </div>
</div>
<!--Ende: Admin Log In-->

<!--Ende: Log In Page-->

</body>
</html>