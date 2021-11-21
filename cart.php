<?php 
session_start();
?>

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
        <!-- font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Kalam:wght@300&family=Roboto+Slab:wght@300&display=swap" >
        <!-- font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette&family=Fira+Sans:wght@200&family=Patrick+Hand&display=swap">
        <!--bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!----CSS--->
        <link rel="stylesheet" href="CSS/all.css"/>
        <!-- inserting javascript -->
        <script src="java/cartpage.js" async></script>
    </head>

    <body>
        <!--header section starts -->
        <?php include('header.php'); ?>
        <!-- header section ends --> 
        
        <!-- cart item details starts -->
        <section class="container content-section">
            <div class="container section-header">
                <h2>CART</h2>
            </div>
            
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="img/in153.jpg" width="100" height="100">
                        <span class="cart-item-title">Inspiron 15 3000 laptop</span>
                    </div>
                    <span class="cart-price cart-column">RM 2249</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="1">
                        <button class="btn btn-danger" type="button">REMOVE</button>
                    </div>
                </div>
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="img/h732.png" width="100" height="100">
                        <span class="cart-item-title">ASUS ROG STRIX G17</span>
                    </div>                    
                    <span class="cart-price cart-column">RM 4399</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="1">
                        <button class="btn btn-danger" type="button">REMOVE</button>
                    </div>
                </div>
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">RM6648</span>
            </div>
            <a href="home.php"><button class="btn btn-primary btn-purchase" type="button">PURCHASE</button></a>
        </section>
        <!-- cart item details ends -->

       

        <!--  footer section starts -->
        <?php include('footer.php'); ?>
        <!--  footer section ends -->

    </body>
</html>