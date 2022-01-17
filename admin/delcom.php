<?php
include ('./config/database.php');

$id=$_GET['id'];

$delete="DELETE FROM users_company WHERE id='$id'";
if (mysqli_query($connect,$delete)){
    echo "<p>Deleted Succufully.</p>";
  header ("Location:company.php");
}
else {
  echo "Something went Wrong";
}


?>