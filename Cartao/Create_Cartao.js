  function  Create_Cartao(){
       <!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Cartao/Create_Cartao.php";
    var Input_Nome = document.getElementById("Cartao_Input_Nome").value;
    var Input_Email = document.getElementById("Cartao_Input_Email").value;
    var Input_Telefone = document.getElementById("Cartao_Input_Telefone").value;
    var Input_Comentario = document.getElementById("Cartao_Input_Comentario").value;


    var vars = "Cartao_Input_Nome=" + Input_Nome + "&Cartao_Input_Email=" + Input_Email + "&Cartao_Input_Telefone=" + Input_Telefone + "&Cartao_Input_Comentario=" + Input_Comentario;
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                        document.getElementById("Ausgabe_Create_Cartao").innerHTML = return_data;

            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->



}