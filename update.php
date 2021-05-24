
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

    <style>
        .form{
    padding: 2rem;
    background-color: rgb(197, 197, 175);
    width: 45%;
    margin: auto;
    }

    .form-label{
        font-weight: bold;
    }

    .form-control{
        border-width: .3rem;
        border-color: black;
    }

    @media screen and (max-width: 650px) {
        .form {
            width: 100%;
        }
    }
    </style>

</head>

<body class="update">

    <?php

        // connection
        require('/home/s3022041/sqlC/dbConnect.php');
        // editing records
        if(isset($_POST['search']))
        {
            $search = mysqli_real_escape_string($connection, $_POST['id']);
            $id = $_POST['id'];

            $stp1 = preg_replace("/[^a-zA-Z0-9]/", "", $id); //grab only the alphanumerics
             $stp2 = strtoupper($stp1); //Make all alphabets uppercase
                $stp3 = preg_replace('/\d+/', '',$stp2); //extract the alphabets part
                    $newsearchid = str_replace($stp3,"-".$stp3."-",$stp2); //put hyphens before and after the alphabet part

             // getting the records query 
            $query = "SELECT * FROM cars WHERE Registration_Number = '$newsearchid' ";
            $query_run = mysqli_query($connection, $query);

            // getting the existing records in a form
            while($row = mysqli_fetch_array($query_run))
            {
                ?>

                <form action="update_process.php" method="POST" class="form">
                        <h2>Car Registration Form</h2>
                        <div class="mb-3">


                            <input type="radio" name="Car" id="Toyota" value=" <?php echo $row['make']; ?>" />

                            <label for="Toyota" class="form-label">Toyota</label>
                            <select name="Models[Toyota]" class="form-control" value=" <?php echo $row['model']; ?>">
                                <option value="">None</option>
                                <option value="Camri">Camri</option>
                                <option value="Corolla">Corolla</option>
                                <option value="Estima">Estima</option>
                            </select><br>

                            <input type="radio" name="Car" id="Nissan" value="Nissan" value=" <?php echo $row['make']; ?>"/>

                            <label for="Nissan" class="form-label">Nissan</label>
                            <select name="Models[Nissan]" class="form-control" value=" <?php echo $row['model']; ?>">
                                <option value="">None</option>
                                <option value="Micra">Micra</option>
                                <option value="roller">roller</option>
                                <option value="fushe">fushe</option>
                            </select><br>

                            <input type="radio" name="Car" id="Mercedez" value="Mercedez" value=" <?php echo $row['make']; ?>"/>

                            <label for="Mercedez" class="form-label">Mercedez</label>
                            <select name="Models[Mercedez]" class="form-control" value=" <?php echo $row['model']; ?>">
                                <option value="">None</option>
                                <option value="5series">5series</option>
                                <option value="x7">x7</option>
                                <option value="x5">x5</option>
                            </select><br>



                            <label for="vehicleidentificationnumber" class="form-label">vehicle identification
                                number(VIN)</label>
                            <input type="text" disabled="disabled" name="vehicleidentificationnumber" class="form-control" maxlength=20 value=" <?php echo $row['VIN']; ?>" required >
                            <br>

                            <label for="ManufacturingYear" class="form-label">Manufacturing Year</label>
                            <input type="text" name="Manufacture_Year" class="form-control" maxlength=20 value=" <?php echo $row['Manufacture_Year']; ?>" required >

                            <label for="Enginesize" class="form-label">Engine size</label>
                            <input type="text" name="Engine_Size" class="form-control" maxlength=20 value=" <?php echo $row['Engine_Size']; ?>" required>

                            <label for="TransmissionType" class="form-label">TransmissionType</label><br>
                            <input type="radio" name="Transmission_Type" id="TransmissionType" value=" <?php echo $row['Transmission_Type']; ?>" />
                            <label for="Automatic" class="form-label">Automatic</label><br>

                            <input type="radio" name="Transmission_Type" id="TransmissionType" value=" <?php echo $row['Transmission_Type']; ?>" />
                            <label for="Manual" class="form-label">Manual</label><br>

                            <input type="radio" name="Transmission_Type" id="TransmissionType" value=" <?php echo $row['Transmission_Type']; ?>" />
                            <label for="SemiAutomatic" class="form-label">Semi-Automatic</label><br>

                            <label for="NoofSeats" class="form-label">No. of Seats</label>
                            <input type="number" name="NoOfSeats" class="form-control" value="<?php echo $row['NoOfSeats']; ?>" maxlength=20 required>

                            <label for="Noofdoors" class="form-label">No. of doors</label>
                            <input type="number" name="NoOfDoors" class="form-control" maxlength=20 value="<?php echo $row['NoOfDoors']; ?>" required>

                            <label for="Fueltype" class="form-label">Fuel type</label>
                            <input type="text" name="Fuel_Type" class="form-control" maxlength=20 value=" <?php echo $row['Fuel_Type']; ?>" required>

                            <label for="Colour" class="form-label">Colour</label>
                            <input type="text" name="Colour" class="form-control" maxlength=20 value=" <?php echo $row['Colour']; ?>" required>

                            <label for="RegistrationNumber" class="form-label">Registration Number (use Dublin
                                registration) </label>
                            <input type="text" disabled="disabled" name="Registration_Number" class="form-control" maxlength=20 value=" <?php echo $row['Registration_Number']; ?>" required>

                            <label for="Dateoffirstregistration" class="form-label">Date of first registration</label>
                            <input type="date" name="DateOfRegestration" class="form-control" maxlength=20 value=" <?php echo $row['DateOfRegestration']; ?>" required>

                        </div>

                        
                        <button type="submit" name="update" class="btn btn-primary">Update</button>

            </form>

                <?php
            }
        }

    ?>

                </div>
                <div class="modal-footer">

                    </form>
                    
</body>
</html>