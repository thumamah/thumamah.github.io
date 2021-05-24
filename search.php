<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <title>Cars
    </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document
    </title>

    <style>
    
    </style>
  </head>
  <body class="search">

  <?php include "crudOption.html"; ?>
    <?php
      // using get method to search
      $id = $_GET['get_id'];

      //  ignoring “-”, Caps and spaces (132D123 and 132 d 123 should return true)

      $stp1 = preg_replace("/[^a-zA-Z0-9]/", "", $id); //grab only the alphanumerics
        $stp2 = strtoupper($stp1); //Make all alphabets uppercase
          $stp3 = preg_replace('/\d+/', '',$stp2); //extract the alphabets part
            $newsearchid = str_replace($stp3,"-".$stp3."-",$stp2); //put hyphens before and after the alphabet part

        require('/home/s3022041/sqlC/dbConnect.php');  // connection
        if(isset($_GET['searchById']))
        {
            $search = mysqli_real_escape_string($connection, $_GET['get_id']);
        $id = $_POST['get_id'];
        $query = "SELECT * FROM cars WHERE Registration_Number = '$newsearchid' ";  // query for search
     $query_run = mysqli_query($connection, $query);
     // displaying records after successfull search
    ?>
    
    <div class="tabl">
        <table class="table table-success table-striped">
        <thead>
            <tr>
            <th scope="col">Make
            </th>
            <th scope="col">Model
            </th>
            <th scope="col">vehicle identification number (VIN)
            </th>
            <th scope="col">Manufacturing Year
            </th>
            <th scope="col">Engine size
            </th>
            <th scope="col">Transmission Type
            </th>
            <th scope="col">No. of Seats
            </th>
            <th scope="col">No. of Doors
            </th>
            <th scope="col">Fuel type
            </th>
            <th scope="col">Colour
            </th>
            <th scope="col">Registration Number
            </th>
            <th scope="col">Date of first registration
            </th>
            </tr>
      </thead>
      <?php
}
?>
      <tbody>
        <?php
        // show records if exist
            if(mysqli_num_rows($query_run) > 0)
            {
            while($row = mysqli_fetch_array($query_run))
        {
        ?>
        <tr>
          <td> 
            <?php echo $row['make']; ?> 
          </td>
          <td> 
            <?php echo $row['model']; ?> 
          </td>
          <td> 
            <?php echo $row['VIN']; ?> 
          </td>
          <td> 
            <?php echo $row['Manufacture_Year']; ?> 
          </td>
          <td> 
            <?php echo $row['Engine_Size']; ?> 
          </td>
          <td> 
            <?php echo $row['Transmission_Type']; ?> 
          </td>
          <td> 
            <?php echo $row['NoOfSeats']; ?> 
          </td>
          <td> 
            <?php echo $row['NoOfDoors']; ?> 
          </td>
          <td> 
            <?php echo $row['Fuel_Type']; ?> 
          </td>
          <td> 
            <?php echo $row['Colour']; ?> 
          </td>
          <td> 
            <?php echo $row['Registration_Number']; ?> 
          </td>
          <td> 
            <?php echo $row['DateOfRegestration']; ?> 
          </td>
        </tr>
        <?php
}
}
  // else no records found
else
{
?>
        <tr class="Nrecords">
          <td colspan = "12"> No records found  
          </td>
        </tr>
        <?php
}
?>
      </tbody>
    </table>
    </div>
  </body>
</html>
