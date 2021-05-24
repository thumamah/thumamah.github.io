<?php

// connection
require('/home/s3022041/sqlC/dbConnect.php');

// updating records
if(isset($_POST['update']))
{
        $RegistrationNumber = $_POST['RegistrationNumber'];
        $Car = $_POST['Car'];
        $Models = $_POST['Models'][$Car];
        //$vehicleidentificationnumber = $_POST['vehicleidentificationnumber'];
        $Manufacture_Year = $_POST['Manufacture_Year'];
        $Engine_Size = $_POST['Engine_Size'];
        $Transmission_Type = $_POST['Transmission_Type'];
        $NoOfSeats = $_POST['NoOfSeats'];
        $NoOfDoors = $_POST['NoOfDoors'];
        $Fuel_Type = $_POST['Fuel_Type'];
        $Colour = $_POST['Colour'];
        //$RegistrationNumber = $_POST['RegistrationNumber'];
        $DateOfRegestration = $_POST['DateOfRegestration'];

        // update query
        $query = "UPDATE cars SET make='$Car', model='$Models',Manufacture_Year='$Manufacture_Year',Engine_Size='$Engine_Size',Engine_Size='$Transmission_Type',NoOfSeats='$NoOfSeats',NoOfDoors='$NoOfDoors',Fuel_Type='$Fuel_Type',Colour='$Colour',DateOfRegestration='$DateOfRegestration' WHERE Registration_Number='$Registration_Number'";
        
        $query_run = mysqli_query($connection, $query) or die ("not done");

        // if query successfull 
        if($query_run)
        {
            echo "<h1> updated successfylly</h1>";
            echo "<a href='index.php'>home</a>";
        }
        else
        {
            echo "<h1> not updated </h1>";
            echo 'Error! ' . mysqli_error($connection);
            echo "<a href='index.php'>home</a>";
        }
}

?>