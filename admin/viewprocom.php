<?php
include './config/database.php';
session_start();

                          
$email = $_SESSION["email_dash"];




$admin= "SELECT * FROM company_admin WHERE email ='$email' " ;

$resad= mysqli_query($connect,$admin);

$admin = mysqli_fetch_row($resad);



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
    <title>Company Profile</title>
 <style>
    #dsh{
     padding-left: 15px;
    }
    
    .table-responsive {
      margin-top: 10px;
    }

    #orderlabel {
      margin-top: 40px;
      font-weight: bold;
    }


    p {
      margin-left: 680px;
      color: green;
      font-weight: bold;
    }
    h6 {
      margin-left: 300px;
    }
    #exampleModalLabel{
      color: white;
      margin-top: 10px;
    }
.modal-content{
    background-color:black
}
h3 {
    margin-top: 80px;
    font-weight: bold;
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
    <div class="card ">
  
<div class="card-header">
          <h3 id="add" class='text-center text-black'>Company Profile</h3>
        </div>
        <div class="cad-body">
        

<?php if(count($_POST)>0){
  mysqli_query($connect,"UPDATE company_admin set username='".$_POST['username']."',email='".$_POST['email']."',password='".$_POST['password']."' WHERE id='".$_POST['id']."'  ");

  echo "<p>UPDATED Succufully!</p>";
  
  
}

?>
<div style="width:600px; margin:70px auto">

<form  method="post">

<div class="form-group">
    <?php if($admin): ?>

      <label >Id</label>
      <input type="text" name="id"  class="form-control" value="<?= $admin[0]; ?>">
    </div>
    <div class="form-group">
    

      <label >Username</label>
      <input type="text" name="username"  class="form-control" value="<?= $admin[1]; ?>">
    </div>

    <div class="form-group">
      <label >Email</label>
      <input type="text" name="email"  class="form-control" value="<?= $admin[2]; ?>">
    </div><div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" value="<?= $admin[3]; ?>">
    </div> <br>
    

    <div class="form-group">
      <button type="submit" name="update" class="btn btn-success">Update</button>
      <a href="indexcom.php"><button type="button"  class="btn btn-secondary">Back</button></a>
    </div>


</form>
<?php endif; ?>

</div>
</div>
</div>

  





<script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>