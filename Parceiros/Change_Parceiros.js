function Change_Parceiros_Eingabe(){

                        <!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Parceiros/Change_Parceiros.php";

    var Input_Nome = document.getElementById("Parceiros_Change_Nome").value;
    var Input_Email = document.getElementById("Parceiros_Change_Email").value;
    var Input_Telefone = document.getElementById("Parceiros_Change_Telefone").value;
    var Input_Endereco = document.getElementById("Parceiros_Change_Endereco").value;
    var Input_Servico = document.getElementById("Parceiros_Change_Servicos_btn").value;
    var Input_Status = document.getElementById("Parceiros_Change_Status_btn").value;

    var vars = "Parceiros_Change_Nome=" + Input_Nome+ "&Parceiros_Change_Email=" + Input_Email + "&Parceiros_Change_Telefone=" + Input_Telefone + "&Parceiros_Change_Endereco=" + Input_Endereco + "&Parceiros_Change_Servico=" + Input_Servico + "&Parceiros_Change_Status=" + Input_Status;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;

                      $('#Ausgabe_Change_Parceiros2').html('<h3>' + return_data + '</h3>').slideDown().delay(1500).slideUp();
                    

            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->


    document.getElementById("Parceiros_Change_Email").value= "";
    document.getElementById("Parceiros_Change_Telefone").value= "";
    document.getElementById("Parceiros_Change_Endereco").value= "";
    document.getElementById("Parceiros_Change_Servicos_btn").value= "Servicos";
    document.getElementById("Parceiros_Change_Status_btn").value = "Status";


}