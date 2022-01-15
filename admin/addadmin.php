
<?php
include ('./config/database.php');
include ('./config/navbar.php')
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
        #add{
            margin-top: 90px;
        
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
          <h3 id="add" class='text-center text-black'>Add New Admin</h3>
        </div>
        <div class="cad-body">
        <?php
if (isset($_POST["addUser"])){
    $u1=@$_POST["username"];
    $u2=@$_POST["email"];
    $u3=@$_POST["password"];
  

    $y1=md5($u3);
    // $y2=md5(md5($x13));   
    $add="INSERT INTO admin (username,email, password) VALUES ('$u1','$u2','$u3') " ;
    $user=mysqli_query($connect,$add);
    if ($user){
        echo "<p>The Admin Added successfully!</p>";
    
}
else{
    echo "<p>The Admin Not Added!</p>";

}

}

?>


            <div style="width:600px; margin:70px auto">

            <form class="" action="" method="post">
               
                <div class="form-group">
                  <label for="username"> username</label>
                  <input type="text" name="username"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control">
                </div> <br> <br>
                
                <div class="form-group">
                  <button type="submit" name="addUser" class="btn btn-success">Register</button>
                </div>


            </form>
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