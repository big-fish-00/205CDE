<?php
if(isset($_POST['date']) && isset($_POST['email']) && isset($_POST['description'])){
   $conn = mysqli_connect('localhost', 'root', '', 'bigfish');
   $date = mysqli_real_escape_string($conn, $_POST['date']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $description = mysqli_real_escape_string($conn, $_POST['description']);


   $sql = "INSERT INTO table_tracking SET track_date = '$date', track_email = '$email', track_description = '$description' ";
   if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header('Location: home.php?book=success');
      exit();
   }
}else {
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
         <form action="tracking.php" method="post" enctype="multipart/form-data">
            <div class="background">
               <div class="booking">
                  <h2> Tracking Service </h2>
                  <div class="booking-form">
                     <label> Date</label>
                     <input type="date" name="date" class="form-control select-date">
                  </div>
                  <div class="booking-form">
                     <label> Email</label>
                     <input type="email" name="email" class="form-control">
                  </div>
                  <div class="booking-form">
                     <label> Description</label></br>
                     <textarea type="text" name="description" cols="20" rows="5" class="form-control"> 
                     </textarea>
                  </div>
               </div>
   
               <input type="submit" name="submit" class="button" value="Book">
   
            </div>
         </form>
         
      </main>
      <?php include('footer.php'); ?>
   </body>
</html>
<?php } ?>