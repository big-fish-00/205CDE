<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
   $conn = mysqli_connect('localhost', 'root', '', 'bigfish');
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   
   $sql = "INSERT INTO table_user SET user_name = '$username', user_password = '$password' ";
   if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header('Location: login.php?signup=success');
      exit();
   }
}else {
?>

<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dnet | Sign Up Page </title>
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
   </head>

   <body>
      <?php include('header.php'); ?>
      <main>
         <div class="all">
            <div class="me-container">
               <div class="row ">
                  <div class="col text-center mx-auto">
                     <form action="signup.php" method="post" enctype="multipart/form-data">
                        <h1 class="text">Sign Up</h1>
   
                        <p class="validation-feedback text-danger" hidden></p>
                        <div class="txt_field">
                           <input type="text" name="username" required autofocus>
                           <span></span>
                           <label><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                           <path d="M3 12s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                           </svg> Username</label>
                       </div>
   
                        <div class="txt_field">
                           <input type="password"  name="password" autocomplete="new-password" required>
                           <span></span>
                           <label><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 2 18 16">
                           <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                           </svg>Password</label>
                        </div>
   
                        <input type="submit" name="submit" class="button-1" value="Sign Up">
    
                     </form>
   
                     <div class="sign">
                       Already have account? 
                       <a href="login.php" class="text-purple text-decoration-none fw-bold"> Sign In </a>    
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <?php include('footer.php'); ?>
   </body>
</html>
<?php } ?>