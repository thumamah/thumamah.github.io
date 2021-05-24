<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel='stylesheet' href='style.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">



    <title>Document</title>

</head>

<body>
    <!-- displaying th crud options -->
<?php include "crudOption.html"; ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>

</body>

</html>



<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {   // checking method
    $errors = array(); // creating an errors array to record errors if there are any.


    if (empty($_POST['vehicleidentificationnumber'])) {
        $errors[] = 'vehicle identification number is required.';
    } else {
        // trim function removes whitespace and other predefined characters from both sides of a string.
        $vehicleidentificationnumber = trim($_POST['vehicleidentificationnumber']);
        // checking for the valid pattern from user
        if (!preg_match('/^[a-zA-Z1-9]{17}$/', $vehicleidentificationnumber)) {
            $errors[] = 'Invalid vehicle identification number! use only letters and numbers';
        }
    }

    // check if the ManufacturingYear is provided and is valid
    if (empty($_POST['ManufacturingYear'])) {
        $errors[] = 'Manufacturing Year is required.';
    } else {
        $ManufacturingYear = trim($_POST['ManufacturingYear']);
        if (!preg_match('/^[0-9]{4}$/', $ManufacturingYear)) {
            $errors[] = 'Invalid Manufacturing Year! use only year format yyyy';
        }
    }

    // check if the Enginesize is provided and is valid
    if (empty($_POST['Enginesize'])) {
        $errors[] = 'Enginesize is required.';
    } else {
        $Enginesize = trim($_POST['Enginesize']);
        if (!preg_match('/^[1-9.L]*$/', $Enginesize)) {
            $errors[] = 'Invalid Enginesize! use only letters/numbers.';
        }
    }

    // check if the Transmissiontype is provided and is valid
    
    if (empty($_POST['TransmissionType'])) {
        $errors[] = 'Transmission type is required.';
    } else {
        $TransmissionType = trim($_POST['TransmissionType']);
        if (!preg_match('/^[a-zA-Z]*$/', $TransmissionType)) {
            $errors[] = 'Invalid Transmission type! use only letters.';
        }
    }

    // check if the NoofSeats is provided and is valid
    if (empty($_POST['NoofSeats'])) {
        $errors[] = 'NoofSeats is required.';
    } else {
        $NoofSeats = trim($_POST['NoofSeats']);
        if (!preg_match('/^[1-9]*$/', $NoofSeats)) {
            $errors[] = 'Invalid NoofSeats! use only numbers';
        }
    }

    // check if the Noofdoors is provided and is valid
    if (empty($_POST['Noofdoors'])) {
        $errors[] = 'Noofdoors is required.';
    } else {
        $Noofdoors = trim($_POST['Noofdoors']);
        if (!preg_match('/^[1-9]*$/', $Noofdoors)) {
            $errors[] = 'Invalid Noofdoors! use only numbers.';
        }
    }

    // check if the Fueltype is provided and is valid
    if (empty($_POST['Fueltype'])) {
        $errors[] = 'Fueltype is required.';
    } else {
        $Fueltype = trim($_POST['Fueltype']);
        if (!preg_match('/^[a-zA-Z]*$/', $Fueltype)) {
            $errors[] = 'Invalid Fueltype! use only letters.';
        }
    }

    // check if the Colour is provided and is valid
    if (empty($_POST['Colour'])) {
        $errors[] = 'Colour is required.';
    } else {
        $Colour = trim($_POST['Colour']);
        if (!preg_match('/^[a-zA-Z]*$/', $Colour)) {
            $errors[] = 'Invalid Colour! use only letters.';
        }
    }

    // check if the RegistrationNumber is provided and is valid
    if (empty($_POST['RegistrationNumber'])) {
        $errors[] = 'RegistrationNumber is required.';
    } else {
        $RegistrationNumber = trim($_POST['RegistrationNumber']);
        if (!preg_match('/^[0-9]{3}-[D]{1}-[0-9]{5}$/', $RegistrationNumber)) {
            $errors[] = 'Invalid RegistrationNumber! use only following format 131-D-12345';
        }
    }

    // check if the Dateoffirstregistration is provided and is valid
    if (empty($_POST['Dateoffirstregistration'])) {
        $errors[] = 'Dateoffirstregistration is required.';
    } else {
        $Dateoffirstregistration = trim($_POST['Dateoffirstregistration']);
        if (!preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $Dateoffirstregistration)) {
            $errors[] = 'Invalid Dateoffirstregistration! use only date format dd/mm/yyyy';
        }
    }

    // if empty erros insert data
    if (empty($errors)) {
        require('/home/s3022041/sqlC/dbConnect.php');
        $checked = $_POST['TransmissionType'] == $Automatic ? "checked" : null;
        $Car = $_POST['Car'];
        $Models = $_POST['Models'][$Car];
        $vehicleidentificationnumber = $_POST['vehicleidentificationnumber'];
        $ManufacturingYear = $_POST['ManufacturingYear'];
        $Enginesize = $_POST['Enginesize'];
        $TransmissionType = $_POST['TransmissionType'];
        $NoofSeats = $_POST['NoofSeats'];
        $Noofdoors = $_POST['Noofdoors'];
        $Fueltype = $_POST['Fueltype'];
        $Colour = $_POST['Colour'];
        $RegistrationNumber = $_POST['RegistrationNumber'];
        $Dateoffirstregistration = $_POST['Dateoffirstregistration'];

        // connection
        require('/home/s3022041/sqlC/dbConnect.php');
        // insert query
        $query = "INSERT INTO cars (make, model, VIN, Manufacture_Year, Engine_Size, Transmission_Type, NoOfSeats, NoOfDoors, Fuel_Type, Colour, Registration_Number, DateOfRegestration) 
                    VALUES ('$Car','$Models', '$vehicleidentificationnumber','$ManufacturingYear','$Enginesize','$TransmissionType','$NoofSeats','$Noofdoors','$Fueltype','$Colour','$RegistrationNumber','$Dateoffirstregistration');";
        $query_run = mysqli_query($connection, $query);
        if ($query_run) {
            echo "<h2>Added successfully</h2>";
            echo "<a href='index.php'>home</a>";
        } else {
            echo 'Error! ' . mysqli_error($connection); // else print errors
        }
        mysqli_close($db_connection); // close the database connection

    } else {
        echo "<h3 class='errorH'>Error! <br>The following error(s) occurred:</h3>";
        foreach ($errors as $msg) {
            echo "<div class='error'>$msg </div>";
        }
        // sticky form
       echo "
       <div class='butn'>
        <!-- Button trigger modal -->
        <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
            Add
        </button>

        <input class='btn btn-primary' type='button' value='Search'>
        <input class='btn btn-primary' type='submit' value='Update'>
        <input class='btn btn-primary' type='reset' value='Export'>
    </div>

   <!-- Modal -->
   <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
  <div class='modal-dialog'>
   
    <div class='modal-content'>
      <div class='modal-header'>
      <form action='Add.php' method='POST' class='form'>
                       <h2>Car Registration Form</h2>
                       <div class='mb-3'>


                           <input type='radio' name='Car' id='Toyota' value='$Models[Toyota]' $checked/>

                           <label for='Toyota' class='form-label'>Toyota</label>
                           <select name='Models[Toyota]' class='form-control'>
                               <option value='>None</option>
                               <option value='Camri'>Camri</option>
                               <option value='Corolla'>Corolla</option>
                               <option value='Estima'>Estima</option>
                           </select><br>

                           <input type='radio' name='Car' id='Nissan' value='$Models[Nissan]' $checked/>

                           <label for='Nissan' class='form-label'>Nissan</label>
                           <select name='Models[Nissan]' class='form-control'>
                               <option value='>None</option>
                               <option value='Micra'>Micra</option>
                               <option value='roller'>roller</option>
                               <option value='fushe'>fushe</option>
                           </select><br>

                           <input type='radio' name='Car' id='Mercedez' value='$Models[Mercedez]' $checked/>

                           <label for='Mercedez' value='$Models[Mercedez]' class='form-label'>Mercedez</label>
                           <select name='Models[Mercedez]' class='form-control'>
                               <option value='>None</option>
                               <option value='5series'>5series</option>
                               <option value='x7'>x7</option>
                               <option value='x5'>x5</option>
                           </select><br>



                           <label for='vehicleidentificationnumber' class='form-label'>vehicle identification number (VIN)</label>
                           <input type='text' name='vehicleidentificationnumber' value='$vehicleidentificationnumber' class='form-control' maxlength=20 required>

                           <label for='ManufacturingYear' class='form-label'>Manufacturing Year</label>
                           <input type='text' name='ManufacturingYear' value='$ManufacturingYear' class='form-control' maxlength=20 required>

                           <label for='Enginesize' class='form-label'>Engine size</label>
                           <input type='text' name='Enginesize' value='$Enginesize' class='form-control' maxlength=20 required>

                           <label for='TransmissionType' class='form-label'>TransmissionType</label><br>
                           <input type='radio' name='TransmissionType' id='TransmissionType' value='$Automatic' $checked />
                           <label for='Automatic' name='Automatic' class='form-label'>Automatic</label><br>

                           <input type='radio' name='TransmissionType' id='TransmissionType' value='$Manual' $checked/>
                           <label for='Manual' class='form-label'>Manual</label><br>

                           <input type='radio' name='TransmissionType' id='TransmissionType' value='$SemiAutomatic' $checked />
                           <label for='SemiAutomatic' class='form-label'>Semi-Automatic</label><br>

                           <label for='NoofSeats' class='form-label'>No. of Seats</label>
                           <input type='number' name='NoofSeats' value='$NoofSeats' class='form-control' maxlength=20 required>

                           <label for='Noofdoors' class='form-label'>No. of doors</label>
                           <input type='number' name='Noofdoors' value='$Noofdoors' class='form-control' maxlength=20 required>

                           <label for='Fueltype' class='form-label'>Fuel type</label>
                           <input type='text' name='Fueltype' value='$Fueltype' class='form-control' maxlength=20 required>

                           <label for='Colour' class='form-label'>Colour</label>
                           <input type='text' name='Colour' value='$Colour' class='form-control' maxlength=20 required>

                           <label for='RegistrationNumber' class='form-label'>Registration Number (use Dublin registration) </label>
                           <input type='text' name='RegistrationNumber' value='$RegistrationNumber' class='form-control' maxlength=20 required>

                           <label for='Dateoffirstregistration' class='form-label'>Date of first registration</label>
                           <input type='date' name='Dateoffirstregistration' value='$Dateoffirstregistration' class='form-control' maxlength=20 required>

                       </div>

                       <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                       <button type='submit' name='insertdata' class='btn btn-primary'>Add Car</button>

                    </form>

                </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div> ";
    }
}

?>