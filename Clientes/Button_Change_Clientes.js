function Create_Change_Cliente_Button()
{

<!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Clientes/Button_Change_Clientes.php";
    var Input_Nome = document.getElementById("Cliente_Change_Nome").value;

    var vars = "Cliente_Change_Nome=" + Input_Nome;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                    if(return_data=="1")
                    {
                     document.getElementById("Ausgabe_Change_Cliente1").innerHTML = "Diese Cliente existiert nicht.";

                    }
                    if(return_data=="2"){

         $('#table_area_clientes').css('margin-top', '450px');

         var getheight = $('.modal-body').height();

         var new_height = getheight + 150;

         new_height_string = new_height + "px";

         $('.modal-body').css('height', new_height_string);

         $('.modal-dialog').css('height', new_height_string);

var div_Email  = document.getElementById("Input_Change_Cliente_Email");
var div_Telefone = document.getElementById("Input_Change_Cliente_Telefone");
var div_Endereco = document.getElementById("Input_Change_Cliente_Endereco");
var div_Comentario  = document.getElementById("Input_Change_Cliente_Comentario");
var button_change = document.getElementById("ButtonChangeCliente");

div_Email.innerHTML    = "<input type='email' class='form-control' placeholder='Email' id ='Cliente_Change_Email'/>";
div_Telefone.innerHTML   = "<input type='text' class='form-control' placeholder='Telefone' id='Cliente_Change_Telefone'/>";
div_Endereco.innerHTML   = "<input type='text' class='form-control' placeholder='Endereco' id='Cliente_Change_Endereco'/>";
div_Comentario.innerHTML    = "<input type='email' class='form-control' placeholder='Comentario' id ='Cliente_Change_Comentario'/>";

button_change.innerHTML  = "<button type='button' class='btn btn-primary' onClick='Change_Cliente_Eingabe();'>Change Cliente</button>";

                         }
            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->


}