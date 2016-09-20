function Create_Change_Parceiros_Button()
{

<!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Parceiros/Button_Change_Parceiros.php";
    var Input_Nome = document.getElementById("Parceiros_Change_Nome").value;

    var vars = "Parceiros_Change_Nome=" + Input_Nome;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                    if(return_data=="1")
                    {
                     document.getElementById("Ausgabe_Change_Parceiros1").innerHTML = "Diese Person existiert nicht.";
                    }
                    if(return_data=="2"){

         $('#table_area_parceiros').css('margin-top', '450px');

         var getheight = $('.modal-body').height();

         var new_height = getheight + 250;

         new_height_string = new_height + "px";

         $('.modal-body').css('height', new_height_string);

         $('.modal-dialog').css('height', new_height_string);


var div_Email    = document.getElementById("Input_Change_Parceiros_Email");
var div_Telefone = document.getElementById("Input_Change_Parceiros_Telefone");
var div_Endereco = document.getElementById("Input_Change_Parceiros_Endereco");
var div_Servico  = document.getElementById("Input_Change_Parceiros_Servico");
var div_Status   = document.getElementById("Input_Change_Parceiros_Status");
var button_change = document.getElementById("ButtonChangeParceiros");


div_Email.innerHTML      = "<input type='email' class='form-control' placeholder='E-Mail' id ='Parceiros_Change_Email'/>";
div_Telefone.innerHTML   = "<input type='text' class='form-control' placeholder='Telefone' id='Parceiros_Change_Telefone'/>";
div_Endereco.innerHTML   = "<input type='text' class='form-control' placeholder='Endereco' id='Parceiros_Change_Endereco'/>";
div_Servico.innerHTML    = ' <div class="dropdown"><button id="Parceiros_Change_Servicos_btn" class="every_input_and_button_dropdown btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Servicos<span class="caret"></span></button><ul class="dropdown-menu"><li  class = "Parceiros_Change_Servicos_value"><a href="#">Electricista</a></li><li  class = "Parceiros_Change_Servicos_value"><a href="#">Encanador</a></li><li  class = "Parceiros_Change_Servicos_value"><a href="#">Marceniero</a></li><li  class = "Parceiros_Change_Servicos_value"><a href="#">Pedreiro</a></li><li  class = "Parceiros_Change_Servicos_value"><a href="#">Pequenos reparos</a></li><li  class = "Parceiros_Change_Servicos_value"><a href="#">Pintor</a></li><li  class = "Parceiros_Change_Servicos_value"><a href="#">Reforma</a></li></ul></div>';
div_Status.innerHTML     = '<div class="dropdown"><button id="Parceiros_Change_Status_btn" class="every_input_and_button_dropdown btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Status<span class="caret"></span></button><ul class="dropdown-menu"><li class = "Parceiros_Change_Status_value"><a href="#">ocupado</a></li><li  class = "Parceiros_Change_Status_value"><a href="#">livre</a></li></ul></div>';
button_change.innerHTML = "<button type='button' class='btn btn-primary' onClick='Change_Parceiros_Eingabe();'>Change Parceiro</button>";

           $('#Parceiros_Change_Servicos_btn').val('Servicos');

           $('#Parceiros_Change_Status_btn').val('Status');


           $('.Parceiros_Change_Servicos_value').click(function(){

                 var valtext = $(this).text();

                 $('#Parceiros_Change_Servicos_btn').text(valtext);

                 $('#Parceiros_Change_Servicos_btn').val(valtext);

         });

         $('.Parceiros_Change_Status_value').click(function(){

                 var valtext = $(this).text();

                 $('#Parceiros_Change_Status_btn').text(valtext);

                 $('#Parceiros_Change_Status_btn').val(valtext);

         });


                         }
            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->



}