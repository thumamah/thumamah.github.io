<!doctype html>
<html lang="en">

<head>
    <link rel='stylesheet' href='style.css'>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <title>Cars</title>

</head>

<body class="home">


      <h1 class="st"> Welcome</h1>

      <div class="cruH">
      <div class="butn">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Add
              </button>

              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Search
              </button> 
              
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                  Update
              </button> 

              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                  Export
              </button>  
          </div>
          </div>

          <!-- Add Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Add car information Form</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <!--form action, method and class-->
                          <form action="Add.php" method="POST" class="form">
                              <h2>Car Registration Form</h2>
                              <div class="mb-3">


                                  <input type="radio" name="Car" id="Toyota" value="Toyota" />

                                  <label for="Toyota" class="form-label">Toyota</label>
                                  <select name="Models[Toyota]" class="form-control">
                                      <option value="">None</option>
                                      <option value="Camri">Camri</option>
                                      <option value="Corolla">Corolla</option>
                                      <option value="Estima">Estima</option>
                                  </select><br>

                                  <input type="radio" name="Car" id="Nissan" value="Nissan" />

                                  <label for="Nissan" class="form-label">Nissan</label>
                                  <select name="Models[Nissan]" class="form-control">
                                      <option value="">None</option>
                                      <option value="Micra">Micra</option>
                                      <option value="roller">roller</option>
                                      <option value="fushe">fushe</option>
                                  </select><br>

                                  <input type="radio" name="Car" id="Mercedez" value="Mercedez" />

                                  <label for="Mercedez" class="form-label">Mercedez</label>
                                  <select name="Models[Mercedez]" class="form-control">
                                      <option value="">None</option>
                                      <option value="5series">5series</option>
                                      <option value="x7">x7</option>
                                      <option value="x5">x5</option>
                                  </select><br>



                                  <label for="vehicleidentificationnumber" class="form-label">vehicle identification
                                      number(VIN)</label>
                                  <input type="text" name="vehicleidentificationnumber" class="form-control" maxlength=20
                                      required>

                                  <label for="ManufacturingYear" class="form-label">Manufacturing Year</label>
                                  <input type="text" name="ManufacturingYear" class="form-control" maxlength=20 required>

                                  <label for="Enginesize" class="form-label">Engine size</label>
                                  <input type="text" name="Enginesize" class="form-control" maxlength=20 required>

                                  <label for="TransmissionType" class="form-label">TransmissionType</label><br>
                                  <input type="radio" name="TransmissionType" id="TransmissionType" value="Automatic" />
                                  <label for="Automatic" class="form-label">Automatic</label><br>

                                  <input type="radio" name="TransmissionType" id="TransmissionType" value="Manual" />
                                  <label for="Manual" class="form-label">Manual</label><br>

                                  <input type="radio" name="TransmissionType" id="TransmissionType" value="SemiAutomatic" />
                                  <label for="SemiAutomatic" class="form-label">Semi-Automatic</label><br>

                                  <label for="NoofSeats" class="form-label">No. of Seats</label>
                                  <input type="number" name="NoofSeats" class="form-control" maxlength=20 required>

                                  <label for="Noofdoors" class="form-label">No. of doors</label>
                                  <input type="number" name="Noofdoors" class="form-control" maxlength=20 required>

                                  <label for="Fueltype" class="form-label">Fuel type</label>
                                  <input type="text" name="Fueltype" class="form-control" maxlength=20 required>

                                  <label for="Colour" class="form-label">Colour</label>
                                  <input type="text" name="Colour" class="form-control" maxlength=20 required>

                                  <label for="RegistrationNumber" class="form-label">Registration Number (use Dublin
                                      registration) </label>
                                  <input type="text" name="RegistrationNumber" class="form-control" maxlength=20 required>

                                  <label for="Dateoffirstregistration" class="form-label">Date of first registration</label>
                                  <input type="date" name="Dateoffirstregistration" class="form-control" maxlength=20
                                      required>

                              </div>

                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" name="insertdata" class="btn btn-primary">Add Car</button>

                          </form>


                      </div>
                      <div class="modal-footer">

                          </form>
                      </div>
                  </div>
              </div>
          </div>


          <div class="butn">
        <!-- Button trigger modal -->

          </div>
      <!-- Search Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">provide car registration number to search</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
            <form action="search.php" method="GET"  class="form">
                  <input type="text" name="get_id" placeholder="Registration Number"/>
              <br>
              <button type="button" id="searchF" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" type="submit" name="searchById" id="searchF" value="Search" class="btn btn-primary" />
              </form>
            </div>
            </div>
            <div class="modal-footer">
            
            </div>
          </div>
        </div>
      </div>


      <!-- update model Modal -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Provide Car Registration Number For A Car Whose Information Needs To Be Updated</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
            <form action="update.php" method="POST"  class="form">
              <input type="text" name="id" placeholder="Registration Number"/>
              <br>
              <input type="submit" name="search" id="searchF" value="Search" class="btn btn-primary" />
          </form>
            </div>
            </div>
            <div class="modal-footer">
            
            </div>
          </div>
        </div>
      </div>


      <!--  Delete Modal -->
      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Provide Car Registration Number For A Car Whose Information Needs To Be Deleted</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
            <form action="delete_process.php" method="POST"  class="form">
              <input type="text" name="id" placeholder="Registration Number"/>
              <br>
              <input type="submit" name="search" id="searchF" value="Delete" class="btn btn-primary" />
          </form>
            </div>
            </div>
            <div class="modal-footer">
            
            </div>
          </div>
        </div>
      </div>



          <?php
          require('/home/s3022041/sqlC/dbConnect.php'); // sql connection
            // displaying all the records that exist in the database
          $query = "select * from cars";    // select all query
          $query = mysqli_query($connection, $query); // exequting query
          ?>
          <div class="tabl">
              <table class="table table-success table-striped" class="table-responsive">
                  <thead>
                      <tr>

                          <th scope="col">Make</th>
                          <th scope="col">Model</th>
                          <th scope="col">vehicle identification number (VIN)</th>
                          <th scope="col">Manufacturing Year</th>
                          <th scope="col">Engine size</th>
                          <th scope="col">Transmission Type</th>
                          <th scope="col">No. of Seats</th>
                          <th scope="col">No. of Doors</th>
                          <th scope="col">Fuel type</th>
                          <th scope="col">Colour</th>
                          <th scope="col">Registration Number</th>
                          <th scope="col">Date of first registration</th>
                          
                        
                      </tr>
                  </thead>

                  <?php
                  if ($query) {
                      foreach ($query as $row) {  // for each looping through the records
                  ?>

                  <tbody>
                      <tr>
                          <td> <?php echo $row['make']; ?> </td>
                          <td> <?php echo $row['model']; ?> </td>
                          <td> <?php echo $row['VIN']; ?> </td>
                          <td> <?php echo $row['Manufacture_Year']; ?> </td>
                          <td> <?php echo $row['Engine_Size']; ?> </td>
                          <td> <?php echo $row['Transmission_Type']; ?> </td>
                          <td> <?php echo $row['NoOfSeats']; ?> </td>
                          <td> <?php echo $row['NoOfDoors']; ?> </td>
                          <td> <?php echo $row['Fuel_Type']; ?> </td>
                          <td> <?php echo $row['Colour']; ?> </td>
                          <td> <?php echo $row['Registration_Number']; ?> </td>
                          <td> <?php echo $row['DateOfRegestration']; ?> </td>
                          
                          
                          

                      </tr>

                  </tbody>

                  <?php
                      }
                  } else {
                      echo "no record found"; // if no record found
                  }
                  ?>

              </table>
          </div>

  
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>
