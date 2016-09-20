function Change_Cliente_Eingabe(){

                        <!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Clientes/Change_Clientes.php";
    var Input_Email = document.getElementById("Cliente_Change_Email").value;
    var Input_Telefone = document.getElementById("Cliente_Change_Telefone").value;
    var Input_Endereco = document.getElementById("Cliente_Change_Endereco").value;
    var Input_Comentario = document.getElementById("Cliente_Change_Comentario").value;

    var Input_Nome = document.getElementById("Cliente_Change_Nome").value + "&Cliente_Change_Email=" + Input_Email + "&Cliente_Change_Telefone=" + Input_Telefone + "&Cliente_Change_Endereco=" + Input_Endereco + "&Cliente_Change_Comentario=" + Input_Comentario;

    var vars = "Cliente_Change_Nome=" + Input_Nome;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                    document.getElementById("Ausgabe_Change_Cliente2").innerHTML = return_data;

            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->


}