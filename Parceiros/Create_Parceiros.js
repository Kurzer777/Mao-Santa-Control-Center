$(document).ready(function(){

         $('.Parceiros_Create_Servicos_value').click(function(){

                 var valtext = $(this).text();

                 $('#Parceiros_Create_Servicos_btn').text(valtext);

                 $('#Parceiros_Create_Servicos_btn').val(valtext);

         });

         $('.Parceiros_Create_Status_value').click(function(){

                 var valtext = $(this).text();

                 $('#Parceiros_Create_Status_btn').text(valtext);

                 $('#Parceiros_Create_Status_btn').val(valtext);

         });

});




function  Create_Parceiros(){

<!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Parceiros/Create_Parceiros.php";
    var Input_Nome = document.getElementById("Parceiros_Input_Nome").value;
    var Input_Email = document.getElementById("Parceiros_Input_Email").value;
    var Input_Telefone = document.getElementById("Parceiros_Input_Telefone").value;
    var Input_Endereco = document.getElementById("Parceiros_Input_Endereco").value;
    var Input_Servico = document.getElementById("Parceiros_Create_Servicos_btn").value;
    var Input_Status = document.getElementById("Parceiros_Create_Status_btn").value;

    var vars = "Parceiros_Input_Nome=" + Input_Nome + "&Parceiros_Input_Email=" + Input_Email + "&Parceiros_Input_Telefone=" + Input_Telefone + "&Parceiros_Input_Endereco=" + Input_Endereco + "&Parceiros_Input_Servico=" + Input_Servico + "&Parceiros_Input_Status=" + Input_Status;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;

                    $('#Ausgabe_Create_Parceiros').html('<h3>' + return_data + '</h3>').slideDown().delay(1500).slideUp();


            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->

}