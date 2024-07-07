<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile  Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <style>
        .product-container {
            display: flex;
            flex-wrap: nowrap; /* Prevent wrapping */
            overflow-x: auto; /* Enable horizontal scrolling */
            gap: 20px;
        }
        .card {
            flex: 0 0 auto; /* Prevent stretching */
        }
        *{
    margin: 0%;
    padding: 0%;

`
}
.fnav{
    display: flex;
    justify-content: center;
    justify-content: space-around;
}
.fnav input{
    width: 300px;
    height: 27px;
    border-radius: 3px;
    text-align: center;
    border: 2px solid gray;
    margin-top: 16px;


}
.fnav p{
    margin-top: 17px;
    font-size: 17px;
}
.snav{
    display: flex;
    justify-content: center;
    justify-content: space-around;
    padding: 11px;
    background-color: rgb(218, 213, 213);
    font-weight: 800;
}
.snav p:hover{
    border-bottom: 2px solid rgb(13, 13, 46);
    color:rgb(13, 13, 46);
    cursor: pointer;

}
.snav img{
    width: 5%;
}
.small-12 {
    background-color: #d4edda; /* Light green background */
    color: #155724; /* Dark green text color */
    padding: 10px; /* Padding around the message */
    border-radius: 5px; /* Rounded corners */
    margin-top: 20px; /* Margin from the top */
}

    </style>
  <body>

  <h1>SpectraCare</h1>
        <nav class="fnav">
            <img src="https://static.lenskart.com/media/mobile/images/phone_number.svg" alt="">
            <a href="index.php" style="text-decoration:none;"><p>Home</p></a>
            <a href="about.php" style="text-decoration:none;"><p>About Us</p></a>
           <a href="product.php" style="text-decoration:none;"><p>Product</p></a>
           <a href="cart.php" style="text-decoration:none;"><p>Cart</p></a>
           <a href="orders.php" style="text-decoration:none;"><p>My Orders</p></a>
            <a href="loginn.php" style="text-decoration:none;"><p>Sign Up & Sign In</p></a>
            
            <a href="logout.php" style="text-decoration:none;"><p>Logout</p></a>
        </nav>
        <nav class="snav">
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
        </nav>







    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <p style="text-align:center;">Successful! Thank you for your order! We appreciate your business.</p>
      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
