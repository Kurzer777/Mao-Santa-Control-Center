  function  Create_Clientes(){

  <!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Clientes/Create_Clientes.php";
    var Input_Nome = document.getElementById("Clientes_Input_Nome").value;
    var Input_Email = document.getElementById("Clientes_Input_Email").value;
    var Input_Telefone = document.getElementById("Clientes_Input_Telefone").value;
    var Input_Endereco = document.getElementById("Clientes_Input_Endereco").value;
    var Input_Comentario = document.getElementById("Clientes_Input_Comentario").value;


    var vars = "Clientes_Input_Nome=" + Input_Nome + "&Clientes_Input_Email=" + Input_Email + "&Clientes_Input_Telefone=" + Input_Telefone + "&Clientes_Input_Endereco=" + Input_Endereco + "&Clientes_Input_Comentario=" + Input_Comentario;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                        document.getElementById("Ausgabe_Create_Clientes").innerHTML = return_data;

            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->


}