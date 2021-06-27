<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    </head>
    <body>

         <!-- Navigation -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Sweetie Pies</h3>
            </div>

            <ul class="list-unstyled components">
               
                <li>
                    <a href="cake_table.php">Cake Table</a>
                </li>
               
                <li>
                    <a href="order.php">Bill Management</a>
                </li>
                <li>
                    <a href="index.html">Back to HOME</a>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </nav>
            






    <!-- All Products -->




   
            <div class="container">
                <div class="container-fluid">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <br />
                            <br />
                            <table id="table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Cake</th>
                                        <th>Flavour</th>
                                        <th>Order value</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                                                                $server_name = "fdb32.awardspace.net";
                                                                $username = "3870579_web";
                                                                $password = "Cherry2206";
                                                                $database = "3870579_web";
                                                                $conn = new mysqli($server_name, $username, $password, $database);
                                                                $sql = " select * from cake inner join bill on bill.cake_id = cake.cake_id inner join flavor on bill.flavor_id = flavor.flavor_id ";
                                                                $query = $conn->query($sql);
                                                                while($fetch = $query->fetch_array()){
                                                                // $sql2 = "select flavor from flavor inner join bill on bill.flavor_id = flavor.flavor_id ";
                                                                // $result = $conn->query($sql2);
                                                        ?>	
                                                                <tr>
                                                                        <td><?php echo $fetch['bill_id']?></td>
                                                                        <td><?php echo $fetch['date']?></td>
                                                                        <td><?php echo $fetch["cake_name"]?></td>
                                                                        <td><?php echo $fetch["flavor"] ?></td>
                                                                        <td><?php echo $fetch["total"]?></td>
                                                                        <td><?php echo $fetch["name"]?></td>
                                                                        <td><?php echo $fetch["email"]?></td>
                                                                        <td><?php echo $fetch["address"]?></td>
                                                                        <td><?php echo $fetch["phone"]?></td>
                                                                        



                                                                </tr>
                                                        <?php
                                                                }
                                                        ?>	

                                </tbody>
                            </table>
                        </div>
</div>
</div>
</div>
</div>
</div>
                        
                       

                        
 <!-- Footer -->
  <footer id="footer" class="section footer">
            <div class="container">
        <div class="footer-center">
          <h3>THANK YOU FOR CHOOSING US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            42 Dream House, Dreammy street, Danang, Vietnam
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            company@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            456-456-4512
          </div>
          <div>
            <span>
              <i class="far fa-paper-plane"></i>
            </span>
            Danang City, Vietnam
          </div>
        </div>
        </div>
  </footer>
  <!-- End Footer -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  
  <script src="./js/index.js"></script>
  
   <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
  
    </body>
</html>
