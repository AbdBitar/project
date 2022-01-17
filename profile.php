<?php
session_start();
$connect = mysqli_connect("localhost","root","", "yalla_diesel");

                          
$email = $_SESSION['email'];


$user ="SELECT * FROM  users_customer WHERE email = '$email' " ;

$res1 = mysqli_query($connect,$user);

$user = mysqli_fetch_row($res1);




$company1= "SELECT * FROM users_company WHERE email ='$email' " ;

$res2= mysqli_query($connect,$company1);

$company1 = mysqli_fetch_row($res2);



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>profile</title>
    <style>
    .dropdown_menu{
     position:absolute;
     left: 10;
     top: 25%;
     margin-left: -40px;
     background:rgba(0, 0, 0, 0.349) ;
     height: 190px;
     width: 220px;
     margin-top: 55px;
     font-size: 6px;

   }
   .dropdown_menu ul{
     display: block;
     margin: -2px;
     margin-top: 1px;
     margin-right: -50px;  

     
   }
   .dropdown_menu ul li{
     width: 250px;
     padding: 0px;
     
   }
   .dropdown_menu{
     display: none;
   }
   #header ul li:hover .dropdown_menu {
     display: block;
   }

   #header .dropdown_menu ul li:hover a {
	color: white;
  
}
.container-fluid{
    margin-top: 5%;
   height: 1000px;
} 
.brand a{
    text-decoration: none;
}

#h2{
  margin-top: 90px;
}

#exampleModalLabel{
        margin-left: 160px;
    }
    .modal-content{
    background-color:black
}

</style>
</head>
<body>
        <!-- Header -->
<section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php">
            <h1><span>Ya</span>LLa <span>Die</span>sel</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="nav">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="index.php" data-after="Home"> <i class="fas fa-home"></i> Home</a></li>
            <li><a href="#offers" data-after="offrs"> <i class="fa fa-tag fa-lg"></i> Offers</a></li>
            <li><a href="#services" data-after="Service"> <i class="fas fa-cogs"></i> Services</a></li>
            <li><a href="#prices" data-after="About"> <i class="fas fa-hand-holding-usd"></i> prices</a></li>
            <li><a href="#contact" data-after="Contact"> <i class="fas fa-id-card-alt"></i> Contact Us</a></li>
            <li ><a href="#"> <i class="fas fa-user-circle" ></i><?= $_SESSION['name']; ?> <i class="fas fa-caret-down"></i></a>
          
            <div class="dropdown_menu">
              <ul>
              <li><a href="order.php"> <i class="fas fa-shopping-cart"></i> Order</a></li>
              <li><a href="profile.php"> <i class="fas fa-user-edit"></i> View profile</a></li>
              <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
              </ul>
            </div> 
          </li>

          </ul>
        </div>
      </div>
    </div>
  </section>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-white" id="exampleModalLabel">Are You sure logout</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center text-white " >
            <h4>If you logout ,You will dissmiss everything .</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><h4>Cancel</h4></button>
                <a href="logout.php"><button type="button" class="btn btn-danger"><h4>Logout</h4></button></a>
            </div>
            </div>
        </div>
        </div>

<div class="form-box">
            

            <?php if($user): ?>

              
              
              
             
            <!-- <table class="table">

            <tr class="text-white">
              <th>First name</th>
              <th>Last name</th>
              <th>city</th>
              <th>Phone number</th>
              <th>Email</th>
             
            </tr>
             <tr class="text-white">
               <td><?= $user[1] ?></td>
               <td><?= $user[2] ?></td>
               <td><?= $user[3] ?></td>
               <td><?= $user[4] ?></td>
               <td><?= $user[5] ?></td>
             
             </tr>
           </table> -->
           <h1 id="h2" class="text-white text-center">First Name : <?= $user[1] ?>  </h1> <br> <br>
           <h1 id="h2" class="text-white text-center">Last Name : <?= $user[2] ?>  </h1>  <br> <br>
           <h1 id="h2" class="text-white text-center">City : <?= $user[3] ?>  </h1> <br> <br>
           <h1 id="h2" class="text-white text-center">Phone Number : <?= $user[4] ?>  </h1> <br> <br>
           <h1 id="h2" class="text-white text-center">Email : <?= $user[5] ?>  </h1> <br> <br>
           


           <?php else: ?>
         
           <!-- <table>
             <tr>
               <th>commercial registration number</th>
               <th>Name </th>
               <th>City</th>
               <th>Phone Number</th>
               <th>Email</th>
              
             </tr>
             <tr>
               <td><?= $company1[1] ?></td>
               <td><?= $company1[2] ?></td>
               <td><?= $company1[3] ?></td>
               <td><?= $company1[4] ?></td>
               <td><?= $company1[5] ?></td>
             
             </tr>
           </table> -->
           <h1 id="h2" class="text-white text-center">Commercial Registration Number : <?= $company1[1] ?>  </h1> <br> <br>
           <h1 id="h2" class="text-white text-center"> Name : <?= $company1[2] ?>  </h1>  <br> <br>
           <h1 id="h2" class="text-white text-center">City : <?= $company1[3] ?>  </h1> <br> <br>
           <h1 id="h2" class="text-white text-center">Phone Number : <?= $company1[4] ?>  </h1> <br> <br>
           <h1 id="h2" class="text-white text-center">Email : <?= $company1[5] ?>  </h1> <br> <br>

           <?php endif; ?>

            
        </div>

</body>
</html>



<?php 
include ('./config/footer.php');
?>