
<!DOCTYPE html>
<html lang="en">
<?php
    require 'config.php';
    $sql = "SELECT * FROM cake";
    $result = mysqli_query($conn,$sql);
?>
<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Products</title>
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

    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">
            <h1>All Products</h1>
        </div>

        <div class="product-center container">
            <?php
                while($row = mysqli_fetch_array($result)){
            ?>
            
            <div class="product">
                
                <div class="product-header">
                                   
                    <img src="<?php echo $row['image'] ?>" alt="">
           
                   
                </div>
                <div class="product-footer">
                    <a href="product-details.php?cake_id=<?php echo $row['cake_id']?>">
                        <h3><?php echo $row["cake_name"] ?></h3>
                    </a>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">$<?php echo $row['price'] ?></h4>
                    
                </div>
                 
                
            </div>
            
            
            <?php
                }
            ?>
          
        </div>
    </section>

    <!--
    <section class="pagination">
        <div class=" container">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span><i class='bx bx-right-arrow-alt'></i></span>
        </div>
    </section>
    -->



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