<?php
    include("config/dbconnect.php");
    error_reporting(0);

    $id = $_GET['id'];
    $query = "DELETE FROM register WHERE id='$id'";
    $data = mysqli_query($con,$query);

    if(isset($data))
    {
         echo"<script> alert('Record Deleted..!') </script>";
?>
<meta http-equiv="Refresh" content="1; URL=http://localhost/admin_panel/details.php">
<?php
    }
    else
    {
        echo"<font color='blue'>Record is Saved..";
    }
?>