<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dnet | ALL Products Website Design</title>

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
    </head>

    <body>
        <?php include('header.php');?>
        <main>
        <div class="small-container">
            <div class="row row-2">
               <h2 class="title">All Products</h2>
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

        <!-- features product section starts  -->
        <div class="small-container">
            <div class="page-button">
                <span>1</span>
            </div>
        </div>
        
        <!-- product section ends -->

        <!--  footer section starts -->
        <?php include('footer.php'); ?>
        <!--  footer section ends -->
    </body>
</html>