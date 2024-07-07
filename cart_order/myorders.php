<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["mail"])){
  header("location:index.php");
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Orders || Spectra Care</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <style>
        .product-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(18rem, 1fr)); /* Auto-fit columns with minimum width of 18rem */
        gap: 20px;
    }
    .card {
        margin-top:20px;
        margin-bottom:20px;
        margin-right:20px;
        margin-left:20px;
    grid-auto-flow: dense; /* Prevent stretching */
    align-self: start; /* Align to the start of the grid cell */
    /* Other styles */
}

.card img {
        width: 100%;
        height: 100%; /* Ensure images fill the available space */
        object-fit: cover; /* Maintain aspect ratio */
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

.invoice-details {
    margin-top: 20px; /* Margin from the top */
}

.invoice-details h3 {
    margin-bottom: 10px; /* Bottom margin for the heading */
}

.invoice-details p {
    margin-bottom: 5px; /* Bottom margin for each paragraph */
}

.invoice-details hr {
    margin-top: 15px; /* Top margin for the horizontal rule */
    margin-bottom: 15px; /* Bottom margin for the horizontal rule */
    border: 0; /* Remove default border */
    border-top: 1px solid #ccc; /* Add custom border */
}


    </style>
  </head>
  <body>

    <h1>SpectraCare</h1>
        <nav class="fnav">
            <img src="https://static.lenskart.com/media/mobile/images/phone_number.svg" alt="">
            <a href="index.php" style="text-decoration:none;"><p>Home</p></a>
            <a href="about.php" style="text-decoration:none;"><p>About Us</p></a>
           <a href="product.php" style="text-decoration:none;"><p>Product</p></a>
           <a href="cart.php" style="text-decoration:none;"><p>Cart</p></a>
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
       

    <div class="row invoice-details" style="margin-top:10px;">
      <div class="large-12">
        <h3>My Orders</h3>
        <hr>

        <?php
          $user = $_SESSION["mail"];
          $result = $mysqli->query("SELECT * from orders where mail='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
              echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              echo '<p><hr></p>';

            }
          }
        ?>
      </div>
    </div>




    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        
      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
