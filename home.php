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
        <link rel="stylesheet" href="CSS/all.css"/>
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
                        <h2>Inspiron 15 3000 Laptop</h2>
                        <p>Operating System
                           Windows 11 Home, English </br> Video Card Intel® UHD Graphics </br>Display 15.6-inch FHD (1920 x 1080) Anti-glare LED Backlight Non-Touch Narrow Border WVA Display
                           </br>Memory 4 GB, 1 x 4 GB, DDR4, 2666 MHz </br>Hard Drive 256 GB, M.2, PCIe NVMe, SSD</p>
                    </div>
                    <div class="col-2">
                        <img src="img/in153.jpg" alt="">                     
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
                        <img src="img/mate13.png" alt="">
                    </div>
                    <div class="col-3">
                        <img src="img/zen.png" alt="">
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
               $sql = "SELECT * FROM table_product LIMIT 4";
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
                        <a href="details.php?id=<?php echo $row['product_id']; ?>" class="detail-button">Details</a>
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
                        <img src="img/mate.jpg" class="offer-img" alt="">
                    </div>
                    <div class="col-2">
                        <p>Up Coming</p>
                        <h2>HUAWEI MateBook X Pro 2021</h2>
                        <small>
                            Windows 10 Home (Free upgrade to Windows 11)</br>Dimensions Width 304 mm
                            </br>Height 14.6 mm Weight Approx. 1.33 kg
                        </small>
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
                        <p>The service at this store is excellent and the prices are very reasonable. 
                           The owner was very patient in explaining the different features and recommending the suitable laptops for me.</p>
                        <div class="colon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <img src="img/guai.png" alt="">   
                        <h3>Step</h3>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-quote-left"></i>
                        <p>Whenever there is a problem with laptop, I can always book a time online. 
                           The staff will also explain the problem after inspection, and they will help to remove the dust.</p>
                        <div class="colon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <img src="img/jess.jpg" alt="">   
                        <h3>Jessica</h3>
                    </div>
                    <div class="col-3">
                        <i class="fas fa-quote-left"></i>
                        <p>This store is very close to my house, so whenever I want to buy a new laptop, he is the computer store I must go to. 
                            This store not only provides sales service but also after-sales service, it's great!</p>
                        <div class="colon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <img src="img/happy.jpg" alt="">   
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
                        <img src="img/dell.jpg" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/asus.jpg" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/huawei.jpg" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/hp.jpg" alt="">
                    </div>
                    <div class="col-5">
                        <img src="img/acer.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- brand section ends -->

        <!--  footer section starts -->
        <?php include('footer.php'); ?>
        <!--  footer section ends -->


    </body>
</html>