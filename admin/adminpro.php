<?php
include ('./config/navbar.php');
include ('./config/database.php');



session_start();

                          
$email = $_SESSION["email_dash"];




$admin= "SELECT * FROM admin WHERE email ='$email' " ;

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

    <title>Individual Profile</title>
    <style>
        #add{
            margin-top: 20px;
            font-weight: bold;
        
        }
        p{
            text-align: center;
            color: green;
            font-weight: bold;
        }
        
    </style>

</head>
<body>
  
<div class="card ">
  
<div class="card-header">
          <h3 id="add" class='text-center text-black'>Admin Profile</h3>
        </div>
        <div class="cad-body">

<?php
if(count($_POST)>0){
  mysqli_query($connect,"UPDATE admin set username='".$_POST['username']."',email='".$_POST['email']."',password='".$_POST['password']."' WHERE id='".$_POST['id']."'  ");

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
      <input type="email" name="email"  class="form-control" value="<?= $admin[2]; ?>">
    </div><div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" value="<?= $admin[3]; ?>">
    </div> <br>
    

    <div class="form-group">
      <button type="submit" name="update" class="btn btn-success">Update</button>
      <a href="index.php"><button type="button"  class="btn btn-secondary">Back</button></a>
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