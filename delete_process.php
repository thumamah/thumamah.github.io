
 <!-- <form action="" method="POST"  class="form">
        <input type="text" name="id" placeholder="Registration Number"/>
        <br>
        <input type="submit" name="search" id="searchF" value="Search" class="btn btn-primary" />
    </form> -->

<?php
// connection
require('/home/s3022041/sqlC/dbConnect.php');

if(isset($_POST['search']))
{
    $search = mysqli_real_escape_string($connection, $_POST['record']);
    $id = $_POST['id'];

    // delete query 
    $query = "DELETE FROM `cars` WHERE Registration_Number='$id' ";
    $query_run = mysqli_query($connection, $query) or die ("not done");

    // if query successfull
    if($query_run)
    {
        echo "<h1> deleted successfully</h1>";
         echo "<a href='index.php'>home</a>";
         
    }
    elseif(!$query_run)
    {
        echo "<h1> not deleted </h1>";
        echo "<a href='index.php'>home</a>";
        echo 'Error! ' . mysqli_error($connection);
    }
    else{
            echo "no record found";
    }
}

?>