<?php
session_start();
?>
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

   </head>

   <body>
      <?php include('header.php'); ?>
      <main>
         <div class="sections">
            <div class = "container">
               <div class="container-section">
                  <div class="about">
                     <h6>About Us</h6>
                  </div>
                  <div class="content">
                     <h2>There are many variations of passages of Lorem Ipsum available. </h2>
                     <p>
                        but the majority have suffered alteration in some form, by injected humour, 
                        or randomised words which don't look even slightly believable. 
                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't 
                        anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators 
                        on the Internet tend to repeat predefined chunks as necessary, making this the first 
                        true generator on the Internet. It uses a dictionary of over 200 Latin words, combined 
                        with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
                        The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic 
                        words etc.
                     </p>
                  </div>

                  <div class="img-section">
                     <img src="img/dent.jpg">
                  </div>
               </div>
            </div>
         </div>
         
      </main>
      <?php include('footer.php'); ?>
   </body>
</html>