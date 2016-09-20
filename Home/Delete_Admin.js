function Create_Delete_Admin_Button()
{


var question   = document.getElementById("Ausgabe_Delete_Admin1");
var button_sim = document.getElementById("ButtonArea1");
var button_noa = document.getElementById("ButtonArea2");

question.innerHTML = "<h5>Are you sure?</h5>";
button_sim.innerHTML = "<button type='button' class='btn btn-primary' onClick = 'Delete_Admin_Sim()'>Sim</button>";
button_noa.innerHTML = "<button type='button' class='btn btn-primary' onClick = 'Delete_Admin_Nao()'>Nao</button>";
}



function Delete_Admin_Sim()
{
  <!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Home/Delete_Admin.php";
    var Input_Nome = document.getElementById("Admin_Nome_delete").value;

    var vars = "Admin_Nome_delete=" + Input_Nome;                <!-- Diese Variable "Admin_Nome_delete" wird an die PHP-Datei gesendet  -->
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                        document.getElementById("Ausgabe_Delete_Admin2").innerHTML = return_data;

            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->

}





function Delete_Admin_Nao()
{
var question   = document.getElementById("Ausgabe_Delete_Admin1");
var button_sim = document.getElementById("ButtonArea1");
var button_noa = document.getElementById("ButtonArea2");

question.innerHTML   ="";
button_sim.innerHTML ="";
button_noa.innerHTML ="";
}