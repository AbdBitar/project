<?php
include ('./config/database.php');
session_start();
$selectadmin= "SELECT * FROM company_admin";

$resultadd= mysqli_query($connect,$selectadmin);

$admins=mysqli_fetch_assoc($resultadd);

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Make Order</title>
    <style>
    
    #exampleModalLabel{
      color: white;
    }
    

    #orderlabel {
      margin-top: 40px;
      font-weight: bold;
    }

    p {
      margin-left: 160px;
      color: green;
    }
    h6 {
      margin-left: 300px;
      
    }
   
   #add{
       margin-top: 90px;
       font-weight: bold;
       
   }
   form{
       margin-left: 400px;
   }
   .modal-content{
    background-color:black
}

    </style>
</head>
<body>
    <!-- top navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" 
          href="#" ><h4>Yalla Diesel</h4></a>

          <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" id="dsh"
          href="indexcom.php" ><i class="bi bi-table"></i> Orders </a>
         
          <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" id="ord"
          href="addorder.php" ><i class="fas fa-shipping-fast"></i> Make order</a>
         

       
       
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a  class="nav-link dropdown-toggle ms-2"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                <i class="bi bi-person-fill"></i> <?=$_SESSION['username1']; ?> </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="viewprocom.php"><i class="fas fa-user-edit"></i> View Profile</a></li>
                <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"> </i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title text-black" id="exampleModalLabel">Are You sure logout ?</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- <div class="modal-body text-center text-black">
            <h4>If you logout ,You will dissmiss everything .</h4>
            </div> -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"><h4>Cancel</h4></button>
                <a href="logout.php"><button type="button" class="btn btn-danger btn-sm"><h4>Logout</h4></button></a>
            </div>
            </div>
        </div>
        </div>

    <!-- End top navigation bar -->
 <div class="card-header">
          <h3 id="add" class='text-center text-black'>Make Order</h3>
        </div>

 <div class="container">
<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>



<!-- Text input-->
<div id="div" style="width:1400px; margin:70px auto">
<?php
if (isset($_POST["addorder"])){
    $u1=@$_POST["email"];
    $u2=@$_POST["phone"];
    $u3=@$_POST["address"];
    $u4=@$_POST["zip"];
    $u5=@$_POST["company"];
    $u6=@$_POST["date"];
    $u7=@$_POST["liters"];
    $u8=@$_POST["payment"];

    $add="INSERT INTO order_yalla (email,phonenumber, streetadd,postcode,company,daterecived,liters,payment) VALUES ('$u1','$u2','$u3','$u4','$u5','$u6','$u7','$u8') " ;
    $user=mysqli_query($connect,$add);
    if ($user){
        echo "<p>Order successfully!</p>";
    
}
else{
    echo "<p>The Admin Not Added!</p>";

}

}

?>



<div class="form-group">
<label class="col-md-4 control-label">Email</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input  name="email" placeholder="email" class="form-control"  type="email" required>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Phone Number</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input name="phone" placeholder="phone number" class="form-control"  type="text" required>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Address</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input name="address" placeholder="address" class="form-control"  type="text" required>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >PostCode/ZIP</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input name="zip" placeholder="PostCode" class="form-control"  type="text" required>
</div>
</div>
</div>

<div class="form-group"> 
<label class="col-md-4 control-label">Company Delivery</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
<select name="company" class="form-control selectpicker">
  <option value="">Select Company Delivery....</option>
  <option>Jo Petrol</option>
  <option>Manaseer</option>
  <option >Total Energies</option>
</select>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">DateRecived</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input  name="date"  class="form-control"  type="date">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Liters</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<input name="liters" placeholder="QTY" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group"> 
<label class="col-md-4 control-label">Payment Method</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
<select name="payment" class="form-control selectpicker">
  <option value="">Select Payment Via....</option>
  <option>eFAWATEER-COM</option>
  <option>Cash On Delivery</option>
</select>
</div>
</div>
</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
<button type="submit" name="addorder" class="btn btn-success">Submit</button>
    <a href="indexcom.php"><button type="button"  class="btn btn-secondary">Back</button></a> 
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->
    
</div>





<script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>