<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart || Mobile Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="https://fontawesome.com/icons/house?f=classic&s=solid"/>
    <script src="js/vendor/modernizr.js"></script>
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
        


    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <?php

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="product.php" class="button [secondary success alert]">Continue Shopping</a>';
          if(isset($_SESSION['mail'])) {
            echo '<a href="success.php"><button style="float:right;">ORDER(COD)</button></a>';
          }

          else {
            echo '<a href="loginn.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>



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
