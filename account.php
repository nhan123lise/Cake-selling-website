<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/style2.css" />
    
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

    
    <!--Login form-->
    <div class="bodyl">
    <div class="container1">
          <h2 style="padding-left: 50px; padding-top: 50px;">Login</h2>
          <?php if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error'];?></p>
          <?php } ?>
      <form id="form" class="form" action="action_page.php" method ="post" >
          <div class="form-control">
              <label for="username">Username</label>
              <input type="text" placeholder="florinpop17" name="username" id="username" />
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error message</small>
          </div>
          <div class="form-control">
              <label for="username">Password</label>
              <input type="password" placeholder="Password" name ="password" id="password"/>
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error message</small>
          </div>
          <button class="btn btn-success">Submit</button>
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
    <script src="./js/login.js"></script>
    </body>



</html>