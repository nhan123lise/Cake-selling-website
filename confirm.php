<?php
  session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Confirm</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="navigation container">
            <div class="logo">
                <h1>Sweetie Pies</h1>
            </div>

            <div class="menu">
                <div class="top-nav">
                    <div class="logo">
                        <h1>Sweetie Pies</h1>
                    </div>
                    <div class="close">
                        <i class="bx bx-x"></i>
                    </div>
                </div>

                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="product.php" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="account.php" class="nav-link">Account</a>
                    </li>
                    
                </ul>
            </div>

           

            <div class="hamburger">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>


<!-- Check out form -->
<div class="container">
    <div class="col-md-8 order-md-1">
        <div class ="bill" style="background-color: #FFB4B4;">
        <h1 class="mb-3" style="text-align: center;">Order Recieved</h1>
        <img src="https://image.flaticon.com/icons/png/512/992/992717.png" alt="" style="width:10%;display: block; margin-left: auto; margin-right: auto;" > 
        <br>
        <h2 style="text-align: center;">Thank you for your order. :)</h2>
        <br>
    </div>
        <form>
        <?php
          require 'config.php';
          $bill_id = $_GET['bill_id'];
          
          $sql = " select * from cake inner join bill on bill.cake_id = cake.cake_id inner join flavor on bill.flavor_id = flavor.flavor_id WHERE bill_id = '$bill_id'";
          $query = $conn->query($sql);
          while($fetch = $query->fetch_array()){
        
        ?>
            <h2 style="background-color: #FF9292;">Billing address<br></h2>
            <div class="mb-3">
                <label for="id">ID:</label>
                <h4><?php echo $fetch['bill_id'];?></h4>
                
            </div>
            <div class="mb-3">
                <label for="name">Name:</label>
                <h4><?php echo $fetch['name'];?></h4>
            </div>
            <div class="mb-3">
                <label for="date">Date:</label>
                <h4><?php echo $fetch['date'];?></h4>
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <h4><?php echo $fetch['email'];?></h4>
                
            </div>
            <div class="mb-3">
                <label for="phone">Phone:</label>
                
                <h4><?php echo $fetch['phone'];?></h4>
            </div>
            <div class="mb-3">
                <label for="address">Address:</label>
                <h4><?php echo $fetch['address'];?></h4>
            </div>
                           
            <hr class="mb-4">
                <h2 style="background-color: #FF9292;">Order detail<br></h2>
            <div class="mb-3">
                <label for="product">Product:</label>
                <h4><?php echo $fetch['cake_name'];?></h4>
            </div>
            
            <div class="mb-3">
                <label for="total">SubTotal:</label>
                <h4>$<?php echo $fetch['total'];?></h4>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary" type="submit">Continue shopping</button>
            <?php 
            }
            ?>
        </form>
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

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
    
</body>

</html>