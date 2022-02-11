<?php
include('./config/navbar.php');
include('./config/database.php');


$selectorder = "SELECT * FROM order_yalla";
$result = mysqli_query($connect, $selectorder);


?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="css/style.css" />

  <title>Dashboard</title>
  <style>
    .table-responsive {
      margin-top: 10px;
      margin-left: 210px;
    }

    #orderlabel {
      margin-top: 40px;
      margin-left: 290px;
    }

    #search {
      margin-left: 1200px;
      height: 35px;
      width: 200px;
    }

    p {
      margin-left: 800px;
    }
    h6 {
      margin-left: 300px;
    }
   
  </style>
</head>

<body>


  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">

    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
              CORE
            </div>
          </li>
          <li>
            <a href="index.php" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>

          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Users
            </div>
          </li>
          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Tables">
              <span class="me-2"><i class="bi bi-layout-split"></i></span>
              <span>Tables</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="Tables">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="individual.php" class="nav-link px-3">
                    <span class="me-2"><i class="fas fa-user"></i></span>
                    <span>Individual</span>
                  </a>
                </li>
                <li>
                  <a href="company.php" class="nav-link px-3">
                    <span class="me-2"><i class="fas fa-users"></i></span>
                    <span>Company</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>

          <li>
            <a href="order.php" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Orders</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 mb-3">
      <div class="card">
        <div class="card-header">
          <span><i class="bi bi-table me-2"></i></span>
          <h3 id="orderlabel">Order Table</h3>
        </div>
        <div class="card-body">

          <form method="get">
          <input name="search" id="search" type="search" placeholder="Search.." value="<?php if (isset($_GET['search'])){ echo $_GET['search']; }?>">
          <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i></button>
          
          </form>

          <div class="table-responsive">

            <table border="2" id="example" class="table table-striped data-table" style="width: 100%">
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
                  <th>Action</th>
                </tr>
                <tbody>
                      <?php
                      if (isset($_GET['search'])){

                        $filter=$_GET['search'];
                        $filterselect="SELECT * FROM order_yalla WHERE CONCAT (id,email,phonenumber,streetadd,postcode,company,daterecived,liters,payment) LIKE '%$filter%'  ";
                        $resu=mysqli_query($connect,$filterselect);
                        
                        if (mysqli_num_rows($resu)>0){
                      
                          foreach($resu as $items){ ?>
                          <td><?php echo $items['id']; ?> </td>
                          <td><?php echo $items['email']; ?> </td>
                          <td><?php echo $items['phonenumber']; ?></td>
                          <td><?php echo $items['streetadd']; ?></td>
                          <td><?php echo $items['postcode']; ?></td>
                          <td><?php echo $items['company']; ?></td>
                          <td> <?php echo $items['daterecived']; ?></td>
                          <td> <?php echo $items['liters']; ?></td>
                          <td> <?php echo $items['payment']; ?></td>
                      <?php 
                      
                          }
                      
                        
                        }
                        else{
                          echo "<p>Data Not Found !</p>";
                      
                        }
                      
                      } 
                      ?>

                      </tbody>
                <?php
                while ($rows = mysqli_fetch_assoc($result)) { ?>
                  
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $rows['id']; ?> </td>
                  <td><?php echo $rows['email']; ?> </td>
                  <td><?php echo $rows['phonenumber']; ?> </td>
                  <td><?php echo $rows['streetadd']; ?> </td>
                  <td><?php echo $rows['postcode']; ?> </td>
                  <td><?php echo $rows['company']; ?> </td>
                  <td><?php echo $rows['daterecived']; ?> </td>
                  <td><?php echo $rows['liters']; ?> </td>
                  <td><?php echo $rows['payment']; ?> </td>
                  <?php if($rows['confirm']): ?>
                   <td><a href="confirmed.php?id=<?=$rows['id'];?>" class="btn btn-success btn-sm "><i class="fas fa-check-circle  "></i>Confirmed</a></td>
                   <?php else: ?>
                   <td><a href="confirm.php?id=<?=$rows['id'];?>" class="btn btn-success btn-sm "><i class="far fa-check-circle"></i> Confirm</a></td>
                  <?php endif; ?>
                  <td><a class="btn btn-danger btn-sm " href="delor.php?id=<?= $rows['id']; ?>"><i class="fas fa-trash"></i> Remove</td> 

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
