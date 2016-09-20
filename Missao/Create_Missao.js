  function  Create_Missao(){

  <!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Missao/Create_Missao.php";
    var Input_Nome = document.getElementById("Missao_Input_Nome").value;
    var Input_Cliente = document.getElementById("Missao_Input_Cliente").value;
    var Input_Endereco = document.getElementById("Missao_Input_Endereco").value;
    var Input_Parceiro = document.getElementById("Missao_Input_Parceiro").value;
    var Input_Servico = document.getElementById("Missao_Input_Servico").value;
    var Input_Visito = document.getElementById("Missao_Input_Visito").value;
    var Input_Pronto = document.getElementById("Missao_Input_Pronto").value;

    var vars = "Missao_Input_Nome=" + Input_Nome + "&Missao_Input_Cliente=" + Input_Cliente + "&Missao_Input_Endereco=" + Input_Endereco + "&Missao_Input_Parceiro=" + Input_Parceiro + "&Missao_Input_Servico=" + Input_Servico + "&Missao_Input_Visito=" + Input_Visito + "&Missao_Input_Pronto=" + Input_Pronto;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                        document.getElementById("Ausgabe_Create_Missao").innerHTML = return_data;

            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->


}