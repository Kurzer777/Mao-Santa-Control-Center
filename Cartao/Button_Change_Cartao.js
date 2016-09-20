function Create_Change_Cartao_Button()
{

<!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Cartao/Button_Change_Cartao.php";
    var Input_Nome = document.getElementById("Cartao_Change_Nome").value;

    var vars = "Cartao_Change_Nome=" + Input_Nome;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                    if(return_data=="1")
                    {
                     document.getElementById("Ausgabe_Change_Cartao1").innerHTML = "Diese Cartao existiert nicht.";
                    }
                    if(return_data=="2"){

         $('#table_area_cartao').css('margin-top', '450px');

         var getheight = $('.modal-body').height();

         var new_height = getheight + 150;

         new_height_string = new_height + "px";

         $('.modal-body').css('height', new_height_string);

         $('.modal-dialog').css('height', new_height_string);

var div_Email    = document.getElementById("Input_Change_Cartao_Email");
var div_Telefone = document.getElementById("Input_Change_Cartao_Telefone");
var div_Comentario = document.getElementById("Input_Change_Cartao_Comentario");
var button_change = document.getElementById("ButtonChangeCartao");


div_Email.innerHTML      = "<input type='email' class='form-control' placeholder='E-Mail' id ='Cartao_Change_Email'/>";
div_Telefone.innerHTML   = "<input type='text' class='form-control' placeholder='Telefone' id='Cartao_Change_Telefone'/>";
div_Comentario.innerHTML   = "<input type='text' class='form-control' placeholder='Comentario' id='Cartao_Change_Comentario'/>";
button_change.innerHTML = "<button type='button' class='btn btn-primary' onClick='Change_Cartao_Eingabe();'>Change Cartao</button>";

                         }
            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->



}