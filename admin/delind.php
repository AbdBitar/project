<?php
include ('./config/database.php');

$id=$_GET['id'];

$delete="DELETE FROM users_customer WHERE id='$id'";
if (mysqli_query($connect,$delete)){
    echo "<p>Deleted Succufully.</p>";
  header ("Location:individual.php");
}
else {
  echo "Something went Wrong";
}


?>