<?php
include ('./config/navbar.php');
include ('./config/database.php');

$selectorder= "SELECT * FROM order_yalla";
$result= mysqli_query($connect,$selectorder);
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

    <title>Order tabel</title>
    <style>
      .table-responsive{
        margin-top: 30px;
      }
      #orderlabel{
        margin-top: 40px;
        margin-left: 20px;
      }
     #search{
       margin-left: 1200px;
       height: 35px;
       width: 200px;
     }

    </style>
</head>
<body>
<div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> <h3 id="orderlabel">Order Table</h3> 
              </div>
              <div class="card-body">
              <input id="search" type="search" placeholder="Search..">
              <button type="button" class="btn btn-primary"> <i class="fas fa-search"></i>
               </button>
                
                <div class="table-responsive">
                
                  <table border="2" id="example" class="table table-striped data-table"  style="width: 100%"   >
                    <thead>
                      <tr>
                      <th>Id</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Post Code</th>
                        <th>Company</th>
                        <th>Date Recived</th>
                        <th>Liters Qty</th>
                        <th>Payment Method</th>
                        <th id="tbody">Action</th>
                      </tr>
                     <?php
                     while ($rows=mysqli_fetch_assoc($result)){?>

                    </thead>
                    <tbody>
                      <tr>
                      <td><?php echo $rows['id'];?> </td>
                        <td><?php echo $rows['email'];?> </td>
                        <td><?php echo $rows['phonenumber'];?> </td>
                        <td><?php echo $rows['streetadd'];?> </td>
                        <td><?php echo $rows['postcode'];?> </td>
                        <td><?php echo $rows['company'];?> </td>
                        <td><?php echo $rows['daterecived'];?> </td>
                        <td><?php echo $rows['liters'];?> </td>
                        <td><?php echo $rows['payment'];?> </td>
                        <td><a class="btn btn-success btn-sm " id="con" href="">  Confirme</a></td>
                        <td><a class="btn btn-danger btn-sm " href="del.php?id=<?=$rows['id'];?>">Delete</a></td>

                      </tr>
                      </tbody>
                    <?php
                     }
                     ?>

                   
                     
                    <tfoot>
                      <tr>
                      <th>Id</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>PostCode</th>
                        <th>Company</th>
                        <th>Date Recived</th>
                        <th>Liters Qty</th>
                        <th>Payment Method</th>
                        <th>Action</th>

                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
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