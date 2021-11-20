<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dnet | Ecomerce Website Design</title>

        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">        
        <!--font awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!--font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette&family=Patrick+Hand&display=swap">
        <!-- font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette&family=Fira+Sans:wght@200&family=Patrick+Hand&display=swap">
        <!--bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!----CSS--->
        <link rel="stylesheet" href="CSS/all.css"/>
        <!-- inserting javascript -->
        <!-- <script src="java/homepage.js" async></script> -->
        <!-- inserting javascript -->
        <!-- <script src="java/cartpage.js" async></script> -->
        <!-- inserting javascript -->
        <script src="java/header.js" async></script>
        
    </head>

    <body>
        <!--header section starts -->
        <div class="header  sticky-top">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href=""><h1>Dnet</h1></a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="product.php">Product</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="tracking.php">Tracking Services</a></li>
                            <?php if (!isset ($_SESSION['user_name'])) { ?>
                                <li><a href="login.php">Login</a></li> 
                                <li><a href="signup.php">Sign Up</a></li>
                            <?php }else{ ?>
                                <li><a href="#"><?php echo $_SESSION['user_name']; ?></a></li> 
                                <li><a href="logout.php">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                    <div class="left">
                        <div class="search-container">
                          <label for="search" class="fas fa-search"></label>
                          <input type="search" placeholder="search" id="search">
                        </div>
                    </div>   
                    <a href="cart.php">
                        <div class="counter-container">
                            <span id="counter">1</span>
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </a>
                    <div class="fas fa-bars" onclick="menutoggle()"  ></div>
                </div>
            </div>
        </div>     
        <!-- header section ends --> 

    </body>
</html>
