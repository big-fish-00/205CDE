<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dnet | Home Page</title>
        
        <!--font awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!--font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette&family=Patrick+Hand&display=swap">
        <!-- font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette&family=Fira+Sans:wght@200&family=Patrick+Hand&display=swap">
        <!--bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!----CSS--->
        <link rel="stylesheet" href="css/all.css"/>
        <!-- inserting javascript -->
        <!-- <script src="java/homepage.js" async></script> -->
        <!-- inserting javascript -->
        <!-- <script src="java/cartpage.js" async></script> -->

    </head>

    <body>
        <?php include('header.php'); ?>
        <div class="top">
            <div class="containers">
                <div class="row">
                    <div class="col-2">
                        <h2>Asus Laptop</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Voluptas unde <br> excepturi saepe sit optio odit recusandae 
                            nesciunt doloremque nulla velit?</p>
                        <button id="add-animation" class="cart-button">Add to cart <i class="bi bi-cart-fill"></i></button>
                    </div>
                    <div class="col-2">
                        <img src="img/guai.png" alt="">                     
                    </div>
                </div>
            </div>
        </div>
        
        <!-- product section stars -->
        <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <img src="img/M15.jpeg" alt="">
                    </div>
                    <div class="col-3">
                        <img src="img/M15.jpeg" alt="">
                    </div>
                    <div class="col-3">
                        <img src="img/M15.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- features product section starts  -->
        <main>
        <div class="small-container">
            <div class="row">
               <h1 class="title">Featured Products</h1>
               <?php 
               $conn = mysqli_connect('localhost', 'root', '', 'bigfish');
               $sql = "SELECT * FROM table_product LIMIT 3";
               if($result = mysqli_query($conn, $sql)){
                      if(mysqli_num_rows($result)>0){
                          while($row = mysqli_fetch_assoc($result)){
                ?>

                <div class="col-4">
                    <img class="" src="img/<?php echo $row['product_image']; ?>">
                        <h5 class="card-title"><?php echo $row['product_name']; ?></h5>                    
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <p class="card-text"><?php echo $row['product_price']; ?></p>
                        <a href="details.php?id=<?php echo $row['product_id']; ?>" class="btn btn-primary">Check it out</a>
               </div>
               
               <?php }}} ?>
            </div>
         </div>
        </main>
        <!-- product section ends -->

        <!-- offer section starts -->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="img/guai.png" class="offer-img" alt="">
                    </div>
                    <div class="col-2">
                        <p>Only Available on Dnet</p>
                        <h2>Laptop 1</h2>
                        <small>
                            HIDHFOEIHOIFOFOI
                            FEHIHIHFIUHFIUHEIHIFH
                            FEHFOEFOEHOFHOHO
                        </small>
                        <a href="CartPage.html" class="cart-button">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- offer section ends -->

        <!-- review section stars -->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fas fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo qui dolor 
                            porro voluptatem autem, esse voluptate aut dolore? Dignissimos, impedit?</p>
                        <div class="colon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <img src="img/guai.png" alt="">   
                        <h3>Step</h3>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo qui dolor 
                            porro voluptatem autem, esse voluptate aut dolore? Dignissimos, impedit?</p>
                        <div class="colon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <img src="img/guai.png" alt="">   
                        <h3>Jessica</h3>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo qui dolor 
                            porro voluptatem autem, esse voluptate aut dolore? Dignissimos, impedit?</p>
                        <div class="colon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <img src="img/guai.png" alt="">   
                        <h3>Happy</h3>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- review section ends -->

        <!-- brand section starts -->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="img/s.jpg" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/s.jpg" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/s.jpg" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/s.jpg" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/s.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- brand section ends -->

        <!--  footer section starts -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Memes</h3>
                        <p> I changed my password everywhere to 'incorrect.' That way when I forget it, 
                        it always reminds me, 'Your password is incorrect.'  </p>
                    </div>
                    <div class="footer-col-2">
                        <img src="img/power.png" alt="">
                        <p>We builds smiles </p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Nav Links</h3>
                        <ul>
                            <a href="HomePage.html"><li>Home</li></a>
                            <a href="Product.html"><li>Product</li></a>
                            <a href=""><li>About</li></a>
                            <a href=""><li>Tracking</li></a>
                            <a href=""><li>Profile</li></a>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <a href="https://www.facebook.com/"><li>Facebook</li></a>
                            <a href="https://www.instagram.com/"><li>Instagram</li></a>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">&copy; Copyright 2021 by —— Big Fish</p>
            </div>
        </div>
        <!--  footer section ends -->


    </body>
</html>