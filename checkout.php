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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- jquery UI js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Check out</title>
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
                    <li class="nav-item">
                        <a href="cart.html" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
                    </li>
                </ul>
            </div>

            <a href="cart.html" class="cart-icon">
                <i class="bx bx-shopping-bag"></i>
            </a>

            <div class="hamburger">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>


    <!-- Check out form -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill"></span>
                </h4>
                <ul class="list-group mb-3 sticky-top">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    
                        <div>
                            <h6 class="my-0">Product name:</h6>
                            <small class="text-muted"><?php echo $_SESSION['cake_name'];?></small>
                        </div>
                        <div>
                            <h6 class="my-0">Price:</h6>
                            <small class="text-muted"><?php echo $_SESSION['price'];?></small>
                        </div>
                        
                        <div>
                            <h6 class="my-0">Flavor:</h6>
                            <small class="text-muted"><?php echo $_SESSION['flavor'];?></small>
                        </div>
                        <div>
                            <h6 class="my-0">Quantity:</h6>
                            <small class="text-muted"><?php echo $_SESSION['quantity'];?></small>
                        </div>
                    </li>
                    
                        <span>Total (USD)</span>
                        <strong>$<?php $total = $_SESSION['price']*$_SESSION['quantity']; echo $total;?></strong>
                    
                </ul>

            </div>
            <div class="col-md-8 order-md-1">
                <h2 class="mb-3">Billing address</h2>
                <form class="needs-validation" novalidate="" action ="session_checkout.php" method ="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" name = "firstName" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback"> Valid first name is required. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name = "lastName" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback"> Valid last name is required. </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name = "email" id="email" placeholder="you@example.com" required="">
                        <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name = "address" id="address" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback"> Please enter your shipping address. </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" name = "phone" id="phone" placeholder="0123-456-789" required="">
                        <div class="invalid-feedback"> Please enter your phone. </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" name = "country" id="country" required="">
                                <option value="">Choose...</option>
                                <option>Vietnam</option>
                            </select>
                            <div class="invalid-feedback"> Please select a valid country. </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">City</label>
                            <select class="custom-select d-block w-100" name = "state" id="state" required="">
                                <option value="">Choose...</option>
                                <option>Danang</option>
                                <option>Hanoi</option>
                                <option>Hochiminh</option>
                                <option>Dalat</option>
                                <option>Quangninh</option>
                                <option>Haiphong</option>
                            </select>
                            <div class="invalid-feedback"> Please provide a valid city. </div>
                        </div>

                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my
                            billing address</label>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Date order</label>
                            <p id="cc-date" placeholder="" required=""><?php $_SESSION['date'] = date("Y-m-d");?></p>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>
    </div>


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
<script>

        // checkout
(function () {
  'use strict'

  window.addEventListener('load', function () {
    var forms = document.getElementsByClassName('needs-validation')

    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  }, false)
}())


    $(function () {
        var monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];
        var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

        var newDate = new Date();
        newDate.setDate(newDate.getDate());
        $('#cc-date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
    })

</script>

</html>