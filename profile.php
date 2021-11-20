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
        <link rel="stylesheet" href="CSS/cartpage.css"/>
    </head>

    <body>
        <!--header section starts -->
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href=""><h1>Dnet</h1></a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="HomePage.html">Home</a></li>
                            <li><a href="Product.html">Product</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Tracking Services</a></li>
                            <li><a href="">Account</a></li> 
                        </ul>
                    </nav>
                    <div class="left">
                        <div class="search-container">
                          <label for="search" class="fas fa-search"></label>
                          <input type="search" placeholder="search" id="search">
                        </div>
                    </div>   
                    <div class="fas fa-shopping-cart"></div>
                    <div class="fas fa-bars" onclick="menutoggle()" ></div>
                </div>
            </div>     
        <!-- header section ends --> 

        
        
       

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
                            <li>Home</li>
                            <li>Product</li>
                            <li>About</li>
                            <li>Tracking</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">&copy; Copyright @ 2021 by Big Fish</p>
            </div>
        </div>
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



    
        <script type="text/javascript">
          let input = document.querySelector("#search")
          let search = document.querySelector("#search");
          let fdj = document.querySelector("label.fas.fa-search");
          let nav = document.querySelector("ul");
          search.addEventListener("mouseenter", e => { nav.style.display = "none"; });
          search.addEventListener("mouseleave", e => { nav.style.display = "block"; });
          input.addEventListener("focus", e => { fdj.style.display = "none"; });
          input.addEventListener("blur", e => { fdj.style.display = "block"; });
      
        </script>

    </body>
</html>