<?php
  session_start();
  include("php/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mao Santa Servicos Control Center</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">



<link rel="stylesheet"href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script src="Test/Test.js" ></script>


 <link rel="stylesheet" type="text/css" href="styles_mainpage.css " />
   <script src="logout.js" ></script>
   <script src="style.js" ></script>

  <link rel="stylesheet" type="text/css" href="Home/styles_Home.css" />
  <script src="Home/Create_Admin.js" ></script>
  <script src="Home/Delete_Admin.js" ></script>
  <script src="Home/Brainstorming_Eingabe.js" ></script>
  <script src="Home/Brainstorming_Ausgabe.js" ></script>

  <link rel="stylesheet" type="text/css" href="Parceiros/styles_Parceiros.css" />
  <script src="Parceiros/Create_Parceiros.js" ></script>
  <script src="Parceiros/Delete_Parceiros.js" ></script>
  <script src="Parceiros/Button_Change_Parceiros.js" ></script>
  <script src="Parceiros/Change_Parceiros.js" ></script>
  <script src="Parceiros/Table/Table_Parceiros.js" ></script>

  <link rel="stylesheet" type="text/css" href="Clientes/styles_Clientes.css" />
  <script src="Clientes/Create_Clientes.js" ></script>
  <script src="Clientes/Delete_Clientes.js" ></script>
  <script src="Clientes/Button_Change_Clientes.js" ></script>
  <script src="Clientes/Change_Clientes.js" ></script>
  <script src="Clientes/Table/Table_Clientes.js" ></script>

  <link rel="stylesheet" type="text/css" href="Cartao/styles_Cartao.css" />
  <script src="Cartao/Create_Cartao.js" ></script>
  <script src="Cartao/Delete_Cartao.js" ></script>
  <script src="Cartao/Button_Change_Cartao.js" ></script>
  <script src="Cartao/Change_Cartao.js" ></script>
  <script src="Cartao/Table/Table_Cartao.js" ></script>



  <link rel="stylesheet" type="text/css" href="Missao/styles_Missao.css" />
  <script src="Missao/Create_Missao.js" ></script>
  <script src="Missao/Delete_Missao.js" ></script>
  <script src="Missao/Button_Change_Missao.js" ></script>
  <script src="Missao/Change_Missao.js" ></script>
  <script src="Missao/Table/Table_Missao.js" ></script>





</head>

<!--BEGINN: Home -->                                                             <!--BEGINN: Home -->


                                 <!--BEGINN: Navbar -->
<div id="MyNavbar">

         <button type="button" class="btn btn-info btn-lg navbarbtn" data-toggle="modal" data-target="#Admin_modal">Admin</button>
         <button type="button" class="btn btn-info btn-lg navbarbtn" data-toggle="modal" data-target="#Parceiros_modal">Parceiros</button>
         <button type="button" class="btn btn-info btn-lg navbarbtn" data-toggle="modal" data-target="#Clientes_modal">Clientes</button>
         <button type="button" class="btn btn-info btn-lg navbarbtn" data-toggle="modal" data-target="#Cartao_modal">Cartao</button>


          <button type="button" class="btn btn-info btn-lg navbarbtn" data-toggle="modal" data-target="#Missao_modal">Missao</button>

          <button id="logout" type="button" class="btn btn-info btn-lg navbarbtn">Log Out</button>

</div>

                                 <!--ENDE: Navbar -->


                                 <!--BEGINN: Notizenfeld -->

<h1 id="title_brainstorm"class="text-center title">Brainstorming-Area</h1>
         <div class="col-md-6 col-md-offset-3">
         <textarea id="Notizenfeld"></textarea>
         </div>


                                 <!--ENDE: Notizenfeld -->

<!--ENDE: Home -->                                                               <!--ENDE: Home -->


<!--BEGINN: Admin -->                                                            <!--BEGINN: Admin -->
<div class="container">
<!-- Modal -->
  <div class="modal fade" id="Admin_modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close_btn close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Admin</h2>
        </div>
        <div class="modal-body">

                                 <!--BEGINN: Neuen Admin anlegen und löschen -->

<h2 class="modal-title">Create Admin</h2>
         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Admin_Nome"/>
         <input type="email" class="every_input_and_button form-control" placeholder="E-Mail" id ="Admin_Email"/>
         <input type="password" class="every_input_and_button form-control" placeholder="Password" id="Admin_Password"/>
         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Admin();">Create Admin</button>
         <div id="Ausgabe_Admin"></div>

<h3 class="modal-title">Delete Admin</h3>
         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Admin_Nome_delete"/>

         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Delete_Admin_Button();">Delete</button>
         <div id="every_input_and_button Ausgabe_Delete_Admin1"></div>
         <div id= "every_input_and_button ButtonArea1"></div>
         <div id= "every_input_and_button ButtonArea2"></div>
         <div id="every_input_and_button Ausgabe_Delete_Admin2"></div>

                                 <!--ENDE: Neuen Admin anlegen und löschen   -->


        </div>
        <div class="modal-footer">
          <button type="button" class="close_btn btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--ENDE: Admin -->                                                              <!--ENDE: Admin -->


<!--BEGINN: Parceiros -->                                                        <!--BEGINN: Parceiros -->


<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="Parceiros_modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close_btn close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Parceiros</h2>
        </div>
        <div class="modal-body">

                                 <!--BEGINN: Eingabe, Änderung und Löschen eines Parceiros -->

<div id="Ausgabe_Create_Parceiros"></div>
<div id="Ausgabe_Change_Parceiros2"></div>

<h3 class="modal-title">Create Parceiros</h3>

<div class="create_area">

         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Parceiros_Input_Nome"/>
         <input type="email" class="every_input_and_button form-control" placeholder="E-Mail" id ="Parceiros_Input_Email"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Telefone" id="Parceiros_Input_Telefone"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Endereco" id="Parceiros_Input_Endereco"/>

         <div class="dropdown">
                 <button id="Parceiros_Create_Servicos_btn" class="every_input_and_button_dropdown btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Servicos
                 <span class="caret"></span></button>
                 <ul class="dropdown-menu">
                         <li  class = "Parceiros_Create_Servicos_value"><a href="#">Electricista</a></li>
                         <li  class = "Parceiros_Create_Servicos_value"><a href="#">Encanador</a></li>
                         <li  class = "Parceiros_Create_Servicos_value"><a href="#">Marceniero</a></li>
                         <li  class = "Parceiros_Create_Servicos_value"><a href="#">Pedreiro</a></li>
                         <li  class = "Parceiros_Create_Servicos_value"><a href="#">Pequenos reparos</a></li>
                         <li  class = "Parceiros_Create_Servicos_value"><a href="#">Pintor</a></li>
                         <li  class = "Parceiros_Create_Servicos_value"><a href="#">Reforma</a></li>
                 </ul>
         </div>

         <div class="dropdown">
                 <button id="Parceiros_Create_Status_btn" class="every_input_and_button_dropdown btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Status
                 <span class="caret"></span></button>
                 <ul class="dropdown-menu">
                         <li  class = "Parceiros_Create_Status_value"><a href="#">ocupado</a></li>
                         <li  class = "Parceiros_Create_Status_value"><a href="#">livre</a></li>
                 </ul>
         </div>


         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Parceiros();">Create Parceiro</button>

</div>

<div class="change_delete_area">

<h3 class="modal-title">Change Parceiros</h3>
         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Parceiros_Change_Nome"/>
         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Change_Parceiros_Button();">Which Parceiro do you want to change?</button>


         <div id="Input_Change_Parceiros_Email"></div>
         <div id="Input_Change_Parceiros_Telefone"></div>
         <div id="Input_Change_Parceiros_Endereco"></div>
         <div id="Input_Change_Parceiros_Servico"></div>
         <div id="Input_Change_Parceiros_Status"></div>
         <div id= "ButtonChangeParceiros"></div>
         <div id="Ausgabe_Change_Parceiros1"></div>




<h3 class="modal-title">Delete Parceiros</h3>
         <input type="text" class="form-control" placeholder="Nome" id="Parceiro_Nome_delete"/>

         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Delete_Parceiros_Button();">Delete Parceiro</button>
         <div id="Ausgabe_Delete_Parceiros1"></div>
         <div id= "ButtonDeleteParceiros1"></div>
         <div id= "ButtonDeleteParceiros2"></div>
         <div id="Ausgabe_Delete_Parceiros2"></div>

                                 <!--ENDE: Eingabe, Änderung und Löschen eines Parceiros -->
</div>

<div id="table_area_parceiros">
                                 <!--BEGINN: Tabelle der Parceiros -->
<h3 class="modal-title">Table Parceiros</h3>

         <div class="dropdown">
                 <button id="Parceiros_Table_btn" class="every_input_and_button btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Table
                 <span class="caret"></span></button>
                 <ul class="dropdown-menu">

                         <li  class = "Parceiros_Table_Servicos_value"><a href="#">Tudo</a></li>
                         <li  class = "Parceiros_Table_Servicos_value"><a href="#">Electricistas</a></li>
                         <li  class = "Parceiros_Table_Servicos_value"><a href="#">Encanadoras</a></li>
                         <li  class = "Parceiros_Table_Servicos_value"><a href="#">Marcenieras</a></li>
                         <li  class = "Parceiros_Table_Servicos_value"><a href="#">Pedreiras</a></li>
                         <li  class = "Parceiros_Table_Servicos_value"><a href="#">Pequenos reparos</a></li>
                         <li  class = "Parceiros_Table_Servicos_value"><a href="#">Pintoras</a></li>
                         <li  class = "Parceiros_Table_Servicos_value"><a href="#">Reformas</a></li>
                 </ul>
         </div>

         <div class="dropdown">


         <div id="Table_Parceiros">
                 <div id="Table_Parceiros_Nome"></div>
                 <div id="Table_Parceiros_Email"></div>
                 <div id="Table_Parceiros_Telefone"></div>
                 <div id="Table_Parceiros_Endereco"></div>
                 <div id="Table_Parceiros_Servico"></div>
                 <div id="Table_Parceiros_Status"></div>
         </div>
</div>
                         <!--ENDE: Tabelle der Parceiros -->
   </div>
        <div class="modal-footer">
          <button type="button" class="close_btn btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>


<!--ENDE: Parceiros -->                                                          <!--ENDE: Parceiros -->


<!--BEGINN: Clientes -->                                                         <!--BEGINN: Clientes -->

<div class="container">

   <!-- Modal -->
  <div class="modal fade" id="Clientes_modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close_btn close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Clientes</h2>
        </div>
        <div class="modal-body">


                                         <!--BEGINN: Eingabe, Änderung und Löschen eines Cliente -->


<h3 class="modal-title">Create Cliente</h3>

<div class="create_area">

         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Clientes_Input_Nome"/>
         <input type="email" class="every_input_and_button form-control" placeholder="E-Mail" id ="Clientes_Input_Email"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Telefone" id="Clientes_Input_Telefone"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Endereco" id="Clientes_Input_Endereco"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Comentario" id="Clientes_Input_Comentario"/>


         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Clientes();">Create Cliente</button>
         <div id="Ausgabe_Create_Clientes"></div>

</div>

<div class="change_delete_area">

<h3 class="modal-title">Change Cliente</h3>
         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Cliente_Change_Nome"/>
         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Change_Cliente_Button();">Which Cliente do you want to change?</button>


         <div id="Input_Change_Cliente_Email"></div>
         <div id="Input_Change_Cliente_Telefone"></div>
         <div id="Input_Change_Cliente_Endereco"></div>
         <div id="Input_Change_Cliente_Comentario"></div>
         <div id= "ButtonChangeCliente"></div>
         <div id="Ausgabe_Change_Cliente1"></div>
         <div id="Ausgabe_Change_Cliente2"></div>




<h3 class="modal-title">Delete Cliente</h3>
         <input type="text" class="form-control" placeholder="Nome" id="Clientes_Nome_delete"/>

         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Delete_Clientes_Button();">Delete Cliente</button>
         <div id="Ausgabe_Delete_Clientes1"></div>
         <div id= "ButtonDeleteClientes1"></div>
         <div id= "ButtonDeleteClientes2"></div>
         <div id="Ausgabe_Delete_Clientes2"></div>

                                 <!--ENDE: Eingabe, Änderung und Löschen eines Cliente -->

</div>

<div id="table_area_clientes">
                                 <!--BEGINN: Tabelle der Clientes -->
<h3 class="modal-title">Table Clientes</h3>
         <button id="Table_Clientes_btn" type="button" class="every_input_and_button btn btn-primary">Table</button>

         <div id="Table_Clientes">
                 <div id="Table_Clientes_Nome"></div>
                 <div id="Table_Clientes_Email"></div>
                 <div id="Table_Clientes_Telefone"></div>
                 <div id="Table_Clientes_Endereco"></div>
                 <div id="Table_Clientes_Comentario"></div>
         </div>

</div>                                  <!--ENDE: Tabelle der Clientes -->

        </div>
        <div class="modal-footer">
          <button type="button" class="close_btn btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>






<!--ENDE: Clientes -->                                                            <!--ENDE: Clientes -->


<!--BEGINN: Cartao -->                                                           <!--BEGINN: Cartao -->


<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="Cartao_modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close_btn close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Cartao</h2>
        </div>
        <div class="modal-body">

                                 <!--BEGINN: Eingabe, Änderung und Löschen einer Cartao -->

<h3 class="modal-title">Create Cartao</h3>

<div class="create_area">

         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Cartao_Input_Nome"/>
         <input type="email" class="every_input_and_button form-control" placeholder="E-Mail" id ="Cartao_Input_Email"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Telefone" id="Cartao_Input_Telefone"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Comentario" id="Cartao_Input_Comentario"/>


         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Cartao();">Create Cartao</button>
         <div id="Ausgabe_Create_Cartao"></div>

</div>

<div class="change_delete_area">

<h3 class="modal-title">Change Cartao</h3>
         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Cartao_Change_Nome"/>
         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Change_Cartao_Button();">Which Cartao do you want to change?</button>


         <div id="Input_Change_Cartao_Email"></div>
         <div id="Input_Change_Cartao_Telefone"></div>
         <div id="Input_Change_Cartao_Comentario"></div>
         <div id= "ButtonChangeCartao"></div>
         <div id="Ausgabe_Change_Cartao1"></div>
         <div id="Ausgabe_Change_Cartao2"></div>

<h3 class="modal-title">Delete Cartao</h3>
         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Cartao_Nome_delete"/>

         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Delete_Cartao_Button();">Delete Cartao</button>
         <div id="Ausgabe_Delete_Cartao1"></div>
         <div id= "ButtonDeleteCartao1"></div>
         <div id= "ButtonDeleteCartao2"></div>
         <div id="Ausgabe_Delete_Cartao2"></div>

                                 <!--ENDE: Eingabe, Änderung und Löschen einer Cartao -->

</div>

                                 <!--BEGINN: Tabelle der Cartao -->
<div id="table_area_cartao">

<h3 class="modal-title">Table Cartao</h3>
         <button id="Table_Cartao_btn" type="button" class="every_input_and_button btn btn-primary">Table</button>

         <div id="Table_Cartao">
                 <div id="Table_Cartao_Nome"></div>
                 <div id="Table_Cartao_Email"></div>
                 <div id="Table_Cartao_Telefone"></div>
                 <div id="Table_Cartao_Comentario"></div>

         </div>

</div>
                                 <!--ENDE: Tabelle der Cartao -->

        </div>
        <div class="modal-footer">
          <button type="button" class="close_btn btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>




<!--ENDE: Cartao -->                                                            <!--ENDE: Cartao -->


<!--BEGINN: Missao -->                                                           <!--BEGINN: Missao -->

<div class="container">

    <!-- Modal -->
  <div class="modal fade" id="Missao_modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close_btn close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Missao</h2>
        </div>
        <div class="modal-body">


                                 <!--BEGINN: Eingabe, Änderung und Löschen einer Missao -->

<h3 class="modal-title">Create Missao</h3>

<div class="create_area">

         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Missao_Input_Nome"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Cliente" id="Missao_Input_Cliente"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Endereco" id="Missao_Input_Endereco"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Parceiro" id="Missao_Input_Parceiro"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Servico" id="Missao_Input_Servico"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Visito?" id="Missao_Input_Visito"/>
         <input type="text" class="every_input_and_button form-control" placeholder="Pronto?" id="Missao_Input_Pronto"/>


         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Missao();">Create Missao</button>
         <div id="Ausgabe_Create_Missao"></div>

</div>

<div class="change_delete_area">

<h3 class="modal-title">Change Missao</h3>
         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Missao_Change_Nome"/>
         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Change_Missao_Button();">Which Missao do you want to change?</button>


         <div id="Input_Change_Missao_Cliente"></div>
         <div id="Input_Change_Missao_Endereco"></div>
         <div id="Input_Change_Missao_Parceiro"></div>
         <div id="Input_Change_Missao_Servico"></div>
         <div id="Input_Change_Missao_Visito"></div>
         <div id="Input_Change_Missao_Pronto"></div>

         <div id= "ButtonChangeMissao"></div>
         <div id="Ausgabe_Change_Missao1"></div>
         <div id="Ausgabe_Change_Missao2"></div>


<h3 class="modal-title">Delete Missao</h3>
         <input type="text" class="every_input_and_button form-control" placeholder="Nome" id="Missao_Nome_delete"/>

         <button type="button" class="every_input_and_button btn btn-primary" onClick="Create_Delete_Missao_Button();">Delete Missao</button>
         <div id="Ausgabe_Delete_Missao1"></div>
         <div id= "ButtonDeleteMissao1"></div>
         <div id= "ButtonDeleteMissao2"></div>
         <div id="Ausgabe_Delete_Missao2"></div>

                                 <!--ENDE: Eingabe, Änderung und Löschen einer Missao -->

</div>

                                 <!--BEGINN: Tabelle der Missao -->
<div id="table_area_clientes">

<h3 class="modal-title">Table Missao</h3>
         <button id="Table_Missao_btn" type="button" class="every_input_and_button btn btn-primary">Table</button>

         <div id="Table_Missao">
                 <div id="Table_Missao_Nome"></div>
                 <div id="Table_Missao_Cliente"></div>
                 <div id="Table_Missao_Endereco"></div>
                 <div id="Table_Missao_Parceiro"></div>
                 <div id="Table_Missao_Servico"></div>
                 <div id="Table_Missao_Visito"></div>
                 <div id="Table_Missao_Pronto"></div>

         </div>
</div>
                                 <!--ENDE: Tabelle der Missao -->


        </div>
        <div class="modal-footer">
          <button type="button" class="close_btn btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--ENDE: Missao -->                                                             <!--ENDE: Missao -->


</body>