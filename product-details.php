<?php
  
  $cake_id = $_REQUEST['cake_id'];
  
  require 'config.php';
  if (session_id() === '')
    session_start();
   
  $sql = "SELECT * FROM cake WHERE cake_id = '$cake_id'";
  $_SESSION['cake_id'] = $_REQUEST['cake_id'];
  $query = $conn->query($sql);
  $row = $query->fetch_array();
  $_SESSION['cake_name'] = $row['cake_name'];
  $_SESSION['price'] = $row['price'];
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

  <!-- Glidejs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Product detail</title>
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

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container-md">
      <div class="left">
        <div class="main">
          <img src="<?php echo $row['image']?>" alt="">
        </div>
      
      </div>
      <div class="right">
        <span>Cake</span>
        <h1><?php echo $row['cake_name']?></h1>
        <div class="price">$<?php echo $row['price']?></div>
        

        <form class="form" action = "session_product_detail.php" method ="post">
        <div>
            <select name = "flavor">
              <option value="Select Flavor" selected disabled>Select Flavor</option>
              <?php
                 $sql2 = "SELECT * FROM flavor WHERE cake_id = '$row[cake_id]'";
                 $query = $conn->query($sql2);
                 while($row2 = $query->fetch_array()){
              ?>
              <option><?php echo $row2['flavor']?></option>
              <?php
              }
              ?>
              
            </select>
            <span><i class='bx bx-chevron-down'></i></span>
          </div>
          <input type="number" name ="quantity" style="width: 4em">

          <input class="addCart" type ="submit" value="Buy">
        </form>
        <h7><?php echo $_GET['error'];?></h7>
        <h3>Product Detail</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero minima delectus nulla voluptates nesciunt
          quidem laudantium, quisquam voluptas facilis dicta in explicabo, laboriosam ipsam suscipit!</p>
      </div>
    </div>
  </section>

  <!-- Related -->
  <section class="section featured">
    <div class="top container">
      <h1>Related Products</h1>
      <a href="product.php" class="view-more">View more</a>
    </div>

    <div class="product-center container">
      <div class="product">
        <div class="product-header">
          <img src="https://sweetjane.qodeinteractive.com/wp-content/uploads/2018/11/shop-img-5-600x600.jpg" alt="">
         
        </div>
        <div class="product-footer">
          <a href="#"><h3>Mimosa</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$24</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="https://sweetjane.qodeinteractive.com/wp-content/uploads/2018/11/shop-img-13-600x600.jpg" alt="">

        </div>
        <div class="product-footer">
          <a href="#"><h3>Macaroons</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$17</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="https://sweetjane.qodeinteractive.com/wp-content/uploads/2018/11/shop-img-14-600x600.jpg" alt="">

        </div>
        <div class="product-footer">
          <a href="#"><h3>Cookie</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$12</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="https://sweetjane.qodeinteractive.com/wp-content/uploads/2018/11/shop-img-15-600x600.jpg" alt="">

        </div>
        <div class="product-footer">
          <a href="#"><h3>Cherry Pie</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$27</h4>
        </div>
      </div>
    </div>
  </section>

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