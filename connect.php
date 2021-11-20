<!doctype html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <title>Connect MySQL</title>
    </head>
    <body>
        <?php 
        if($conn = mysqli_connect('localhost','root','','bigfish')) {
            print'<p>Successfully connected to the database!</p>';
            mysqli_close($conn);
        }
        else {
            print '<p style="color: red;">Could not connect to the database.</p>';
        }?>
    </body>
</html>