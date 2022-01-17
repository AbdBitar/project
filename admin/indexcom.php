
<?php
session_start();
$connect = mysqli_connect("localhost","root","", "yalla_diesel");


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
  
  <title>Document</title>
  <style>
    #dsh{
     padding-left: 15px;
    }
    #ord{
     padding-left: 15px;
    }
    #tab{
     padding-left: 15px;
    }
    /* #exampleModalLabel{
        margin-left: 160px;
    } */
    
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
          href="order.php" ><i class="bi bi-table"></i> Orders </a>
         
          <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" id="ord"
          href="addadmin.php" ><i class="fas fa-user-plus mr-2"></i> Add order</a>
         

       
       
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a  class="nav-link dropdown-toggle ms-2"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                <i class="bi bi-person-fill"></i> <?=$_SESSION['username1']; ?> </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="adminpro.php?id=<?=$admins['id'];?>"><i class="fas fa-user-edit"></i> View Profile</a></li>
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
    <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>