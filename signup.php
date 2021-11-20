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
      <title>Sign Up</title>
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="css/all.css" rel="stylesheet">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </head>

   <body>
      <?php include('header.php'); ?>
      <main>
         <div class="container">
            <div class="row my-5">
               <div class="col-lg-4 py-5 text-center mx-auto">
                  <form action="signup.php" method="post" enctype="multipart/form-data">
                     <h1 class="fs-1 mb-5 fw-bold text-primary">Sign Up</h1>
                     <p class="validation-feedback text-danger" hidden></p>
                     <div class="form-floating">
                        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                        <label for="floatingInput">Username</label>
                     </div>
                     <div class="my-3"></div>
                     <div class="form-floating">
                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="new-password" required>
                        <label for="floatingPassword">Password</label>
                     </div>
                     <div class="my-3"></div>
                     <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                  </form>
                  <p class="mb-4 text-sm mx-auto">
                     Already have account? 
                     <a href="login.php" class="text-purple text-decoration-none fw-bold">Login</a>
                  </p>
               </div>
            </div>
         </div>
      </main>
      <?php include('footer.php'); ?>
   </body>
</html>
<?php } ?>