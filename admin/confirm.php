<?php
include ('./config/database.php');
session_start();
if (isset($_GET['id'])){

    $id=$_GET['id'];

    $sql="UPDATE order_yalla SET confirm=1 WHERE id='$id'";
    mysqli_query($connect,$sql);

}
header ('Location:order.php');

?>