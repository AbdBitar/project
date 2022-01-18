<?php
include ('./config/navbar.php');
include ('./config/database.php');
// session_start();



                          
$id = $_GET['id'];



$company1= "SELECT * FROM users_company WHERE id ='$id' " ;

$res2= mysqli_query($connect,$company1);

$company1 = mysqli_fetch_row($res2);

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
        #add{
            margin-top: 30px;
            font-weight: bold;
        
        }
        p{
            text-align: center;
            color: green;
            font-weight: bold;
        }
        .card-header{
          margin-top: 70px;
        }
        
    </style>

</head>
<body>
  
<div class="card ">
  
<div class="card-header">
          <h3 id="add" class='text-center text-black'> Company Profile</h3>
        </div>
        <div class="cad-body">
<?php if(count($_POST)>0){
  mysqli_query($connect,"UPDATE users_company set commercialregistrationnumber='".$_POST['crm']."',name='".$_POST['name']."',city='".$_POST['city']."',phonenumber='".$_POST['phone']."',email='".$_POST['email']."',password='".$_POST['password']."' WHERE id='".$_POST['id']."'  ");

  echo "<p>UPDATED Succufully!</p>";
  
  
}


?>

<div style="width:600px; margin:70px auto">


<form class=""  method="post">

<div class="form-group">
    <?php if($company1): ?>

      <label >Id</label>
      <input type="text" name="id"   class="form-control" value="<?= $company1[0]; ?>">
    </div>
    <div class="form-group">
    

      <label >Commercial Registration Number</label>
      <input type="text" name="crm"   class="form-control" value="<?= $company1[1]; ?>">
    </div>

    <div class="form-group">
      <label > Name</label>
      <input type="text" name="name"  class="form-control" value="<?= $company1[2]; ?>">
    </div><div class="form-group">
      <label>City</label>
      <input type="text" name="city" class="form-control" value="<?= $company1[3]; ?>">
    </div>
    <div class="form-group">
      <label >Phone Number</label>
      <input type="text" name="phone"  class="form-control" value="<?= $company1[4]; ?>">
    </div>
    <div class="form-group">
      <label >Email</label>
      <input type="text" name="email"   class="form-control" value="<?= $company1[5]; ?>">
    </div>
    
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" value="<?= $company1[6]; ?>">
    </div> <br> 

    <div class="form-group">
      <button type="submit" name="update" class="btn btn-success">Update</button>
      <a href="company.php"><button type="button"  class="btn btn-secondary">Back</button></a>
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