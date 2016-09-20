function Change_Missao_Eingabe(){

                        <!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Missao/Change_Missao.php";

    var Input_Nome = document.getElementById("Missao_Change_Nome").value;
    var Input_Cliente = document.getElementById("Missao_Change_Cliente").value;
    var Input_Endereco = document.getElementById("Missao_Change_Endereco").value;
    var Input_Parceiro = document.getElementById("Missao_Change_Parceiro").value;
    var Input_Servico = document.getElementById("Missao_Change_Servico").value;
    var Input_Visito = document.getElementById("Missao_Change_Visito").value;
    var Input_Pronto = document.getElementById("Missao_Change_Pronto").value;

    var vars = "Missao_Change_Nome=" + Input_Nome + "&Missao_Change_Cliente=" + Input_Cliente + "&Missao_Change_Endereco=" + Input_Endereco + "&Missao_Change_Parceiro=" + Input_Parceiro + "&Missao_Change_Servico=" + Input_Servico + "&Missao_Change_Visito=" + Input_Visito + "&Missao_Change_Pronto=" + Input_Pronto;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                    document.getElementById("Ausgabe_Change_Missao2").innerHTML = return_data;

            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->


}