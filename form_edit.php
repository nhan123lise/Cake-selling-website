<?php
  $cake_id = $_REQUEST['cake_id'];
  require 'config.php';
  $sql = "SELECT * FROM cake WHERE cake_id = '$cake_id'";
  
  $query = $conn->query($sql);
  $row = $query->fetch_array();
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
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
     
        <!-- Form -->

        <div class="container">
          <br>
          <h1>Edit</h1>
          <br>    
          <form action ="edit.php" method = "post">
            <div class="form-group">
              <input type="hidden" class="form-control" name="Id1" id="inputID" required="" value="<?php echo $row['cake_id']?>">
            </div>
            <div class="form-group">
              <label for="inputCake4">Cake name</label>
              <input type="text" class="form-control" name="cake_name1" id="inputName4" required="" value ="<?php echo $row['cake_name']?>">
            </div>
          
          <div class="form-group">
            <label for="inputFlavor">Type</label>
            <input type="text" class="form-control" name="type1" id="inputFlavor" required="" value ="<?php echo $row['Type']?>">
          </div>
      
          <div class="form-group">
              <label for="inputImg">Image url</label>
              <input type="url" class="form-control" name="image1" id="inputImg" required="" value ="<?php echo $row['image']?>">
            </div>
      
            <div class="form-group">
            <label for="inputFlavor">Price</label>
            <input type="number" class="form-control" name="price1" id="inputPrice" required="" value ="<?php echo $row['price']?>">
          </div>
      
          <button type="submit" class="btn btn-primary">Save</button>
          <br>
        </form>
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

