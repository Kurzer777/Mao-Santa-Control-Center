  function  Create_Admin(){
    <!-- Create our XMLHttpRequest object-->
    var hr = new XMLHttpRequest();
    <!-- Create some variables we need to send to our PHP file -->
    var url = "Home/Create_Admin.php";
    var Input_Nome = document.getElementById("Admin_Nome").value;
    var Input_Email = document.getElementById("Admin_Email").value;
    var Input_Password = document.getElementById("Admin_Password").value;

    var vars = "Admin_Nome=" + Input_Nome + "&Admin_Email=" + Input_Email + "&Admin_Password=" + Input_Password;  <!-- Diese Variable "Admin_Email" wird an die PHP-Datei gesendet  -->
    hr.open("POST", url, true);
    <!-- Set content type header information for sending url encoded variables in the request  -->
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    <!-- Access the onreadystatechange event for the XMLHttpRequest object -->
    hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                        document.getElementById("Ausgabe_Admin").innerHTML = return_data;

            }
    }
    <!-- Send the data to PHP now... and wait for response to update the status div  -->
    hr.send(vars); <!-- Actually execute the request -->

}