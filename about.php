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
            <div class = "containers">
               <div class="container-section">
                  <div class="about">
                     <h6>About Us</h6></br>
                  </div>
                  <div class="content">
                     <h2>Dnet Power Computer</h2></br>
                     <p2>
                     This is a computer store located in Alor Setar. 
                     The store offers computers, printers, computer accessories, mice and more. In addition, repair services are also available here. 
                     For more information, please call the number below. </br>
                     Phone-number: 012-432-9032 </br>
                     Address: NO 180, Jalan ONE UTAMA, SIMPANG KUALA, 07700 ALOR SETAR, KEDAH. 
                     </p2>
                  </div>
               </div>

               <div class="img-section py-5">
                     <img src="img/dnet.jpg"> 
               </div>
            </div>
         </div>
         
      </main>
      <?php include('footer.php'); ?>
   </body>
</html>