<?php 
session_start();
if(isset($_GET['id'])) {
    $conn = mysqli_connect('localhost','root','','bigfish');
    $product_id = $_GET['id'];
    $sql = "SELECT * FROM table_product WHERE product_id = '$product_id' LIMIT 1";
    if ($result = mysqli_query($conn,$sql)) {
        if(mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_assoc($result);
        }
    }
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dnet | Details Page</title>

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
        <script src="java/cartpage.js" async></script>
        <!-- inserting javascript -->
        <!-- <script src="java/header.js" async></script> -->
    </head>

    <body>
        <!--header section starts -->
        <?php include('header.php'); ?>
              
        <!-- header section ends --> 

        <!-- single product section starts  -->
        <main>
         <div class="small-container single-product">
    		<div class="row">
    			<div class="col-2">
                    <img class="shop-item-image" style="object-fit: cover;" id="ProductImg" src="img/<?php echo $row['product_image']; ?>">
                </div>

    			<div class="col-lg-6 product-details pl-md-5 ftco-animate fadeInUp ftco-animated">
    				<h2  class="shop-item-title"><?php echo $row['product_name']; ?></h2>
    				<p2 class="shop-item-price"><span> RM <?php echo $row['product_price']; ?></span></p2></br>
                    <h3>Tips <i class="bi bi-journal-text"></i></h3>
    				<p2> Pick the laptop that you liked !</p2>
                   <form action="add-to-cart.php" method="post" enctype="multipart/form-data">
                      <div class="row mt-4">
                        <label for="qty" class="form-label">Quantity:
                         <input type="number" min="1" max="10" maxlength="2" name="quantity" value="1" id="qty" class="form-control w-25"></label>
                         <input type="hidden" value="<?php echo $row['product_id']; ?>" name="product_id">
                     </div>
                      <button type="submit" class="cart-button" id="add-animation">Add to Cart</button>
                   </form>
    			</div>
    		</div>
    	  </div>
       </main>

        <!-- title -->
        <div class="small-container multiple-product">
            <div class="row row-2">
                <h2>Related Products</h2>
                <a href="product.php">View More</a>
            </div>
        </div>

        <!-- single product section ends  -->

        <!-- features product section starts  -->
        <div class = "down">
          <div class="small-container">
              <div class="row row-3">
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
        </div>
        
        <!-- product section ends -->

        <!--  footer section starts -->
        <?php include('footer.php'); ?>
        <!--  footer section ends -->


        <!-- inserting javascript -->
        <script>
            var MenuItems = document.querySelector("ul");

            MenuItems.style.maxHeight = "0px" ;

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px"
                }
                else
                {
                    MenuItems.style.maxHeight = "0px"
                }
            }
        </script>

        <!-- single product gallery -->
<!-- 
        <script>
            var ProductImg = document.getElementById("ProductImg");
            var SmallImg = document.getElementsByClassName ("small-img");

            SmallImg [0].onclick = function() {
                ProductImg.src = SmallImg[0].src;
            }

            SmallImg [1].onclick = function() {
                ProductImg.src = SmallImg[1].src;
            }

            SmallImg [2].onclick = function() {
                ProductImg.src = SmallImg[2].src;
            }

            SmallImg [3].onclick = function() {
                ProductImg.src = SmallImg[3].src;
            }


        </script> -->


    </body>
</html>