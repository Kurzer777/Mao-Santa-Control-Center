function Change_Cartao_Eingabe(){

                        <!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Cartao/Change_Cartao.php";

    var Input_Nome = document.getElementById("Cartao_Change_Nome").value;
    var Input_Email = document.getElementById("Cartao_Change_Email").value;
    var Input_Telefone = document.getElementById("Cartao_Change_Telefone").value;
    var Input_Comentario = document.getElementById("Cartao_Change_Comentario").value;

    var vars = "Cartao_Change_Nome=" + Input_Nome + "&Cartao_Change_Email=" + Input_Email + "&Cartao_Change_Telefone=" + Input_Telefone + "&Cartao_Change_Comentario=" + Input_Comentario;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                    document.getElementById("Ausgabe_Change_Cartao2").innerHTML = return_data;

            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->


    document.getElementById("Cartao_Change_Email").value= "";
    document.getElementById("Cartao_Change_Telefone").value= "";
    document.getElementById("Cartao_Change_Comentario").value= "";

}