<!DOCTYPE html>
<html>
    <head>
               
        <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

        <!-- jquery UI css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />

      <!-- data tables -->
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

      <link rel="stylesheet" href="./css/styles.css" />

      <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Glidejs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />
  
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


    <!-- table -->
    <div class="container">

        <h2>Cake</h2>

                <div class = "container-fluid">
                                <div class = "panel panel-default">
                                        <div class = "panel-body">
                                                <br />
                                                <br />
                                                <table id = "table" class = "table table-bordered">
                                                        <thead>
                                                                <tr>
                                                                        <th>Cake ID</th>
                                                                        <th>Price</th>
                                                                        <th>Name</th>
                                                                        <th>Type</th>
                                                                        <th>Photo</th>
                                                                        <th>Purchased(times)</th>
                                                                        <th>Action</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                                require 'config.php';
                                                                $sql = "SELECT * FROM `cake`";
                                                                $query = $conn->query($sql);
                                                                while($fetch = $query->fetch_array()){
                                                                $sql2 = "SELECT * FROM `bill` WHERE `cake_id` = '$fetch[cake_id]'";
                                                                $result = $conn->query($sql2);
                                                                $count = mysqli_num_rows($result);
                                                        ?>	
                                                                <tr>
                                                                        <td><?php echo $fetch['cake_id']?></td>
                                                                        <td><?php echo $fetch['price']?></td>
                                                                        <td><?php echo $fetch["cake_name"]?></td>
                                                                        <td><?php echo $fetch["Type"]?></td>
                                                                        <td><center> <img src="<?php echo $fetch['image'] ?>"height = "50" width = "50" alt=""></center></td>
                                                                        <td><?php echo $count?></td>
                                                                        <td><center><a class = "btn btn-warning" href = "form_edit.php?cake_id=<?php echo $fetch['cake_id']?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a> <a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_cake.php?cake_id=<?php echo $fetch['cake_id']?>"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
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
       
      
        
        <!-- Form -->

        <div class="container">
          <br>
          <h1>Add cake</h1>
          <br>    
          <form action="add.php" method="post">
          <div class="form-group">
              <label for="inputCakeID">Cake ID</label>
              <input type="number" class="form-control" name="cake_id" id="cake_id" placeholder="123" required="">
            </div>
            <div class="form-group">
              <label for="inputCake4">Cake name</label>
              <input type="text" class="form-control" name="cake_name" id="cake_name" placeholder="halo" required="">
            </div>
          
          <div class="form-group">
            <label for="inputFlavor">Type</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Choco, Vanila, Chery" required="">
          </div>
          
      
          <div class="form-group">
              <label for="inputImg">Image url</label>
              <input type="url" class="form-control" name="image_url" id="image_url" placeholder="url" required="">
            </div>
      
            <div class="form-group">
            <label for="inputPrice">Price</label>
            <input type="number" class="form-control" name="price" id="price" placeholder="$12" required="">
          </div>
          
      
          <button type="submit" class="btn btn-primary">Add Cake</button>
          <br>
        </form>
      </div>

      <!-- Footer -->
  <footer id="footer" class="section footer">
            <div class="container">
        <div class="footer-center">
          <h2>THANK YOU FOR CHOOSING US</h2>
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

