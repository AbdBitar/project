<?php
include ('./config/database.php');

$id=$_GET['id'];

$delete="DELETE FROM order_yalla WHERE id='$id'";
if (mysqli_query($connect,$delete)){
    echo "<p>Deleted Succufully.</p>";
  header ("Location:order.php");
}
else {
  echo "Something went Wrong";
}


?>