function Create_Change_Missao_Button()
{

<!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Missao/Button_Change_Missao.php";
    var Input_Nome = document.getElementById("Missao_Change_Nome").value;

    var vars = "Missao_Change_Nome=" + Input_Nome;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                    if(return_data=="1")
                    {
                     document.getElementById("Ausgabe_Change_Missao1").innerHTML = "Diese Missao existiert nicht.";
                    }
                    if(return_data=="2"){
var div_Cliente  = document.getElementById("Input_Change_Missao_Cliente");
var div_Endereco = document.getElementById("Input_Change_Missao_Endereco");
var div_Parceiro = document.getElementById("Input_Change_Missao_Parceiro");
var div_Servico  = document.getElementById("Input_Change_Missao_Servico");
var div_Visito   = document.getElementById("Input_Change_Missao_Visito");
var div_Pronto   = document.getElementById("Input_Change_Missao_Pronto");
var button_change = document.getElementById("ButtonChangeMissao");


div_Cliente.innerHTML    = "<input type='email' class='form-control' placeholder='Cliente' id ='Missao_Change_Cliente'/>";
div_Endereco.innerHTML   = "<input type='text' class='form-control' placeholder='Endereco' id='Missao_Change_Endereco'/>";
div_Parceiro.innerHTML   = "<input type='text' class='form-control' placeholder='Parceiro' id='Missao_Change_Parceiro'/>";
div_Servico.innerHTML    = "<input type='email' class='form-control' placeholder='Servico' id ='Missao_Change_Servico'/>";
div_Visito.innerHTML     = "<input type='text' class='form-control' placeholder='Visito' id='Missao_Change_Visito'/>";
div_Pronto.innerHTML     = "<input type='text' class='form-control' placeholder='Pronto' id='Missao_Change_Pronto'/>";
button_change.innerHTML  = "<button type='button' class='btn btn-primary' onClick='Change_Missao_Eingabe();'>Change Missao</button>";

                         }
            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->



}