<?php


if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us ||Spectra Care</title>
    <link rel="stylesheet" href="css/foundation.css" />
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
        




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <h3>About SpectraCare</h3>
        <p>Welcome to SpectraCare, your number one source for high-quality, stylish spectacles. We're dedicated to giving you the very best of eyewear, with a focus on quality, style, and customer service.</p>

        <h3>Our story</h3>
<p>Founded in 1999, SpectraCare has come a long way from its beginnings in a small office. When we first started out, our passion for fashionable and affordable eyewear drove us to do tons of research so that SpectraCare can offer you the world's trendiest spectacles. We now serve customers all over India, and are thrilled that we're able to turn our passion into our own website.</p>

<h3>Our Mission</h3>
<p>Our mission is to provide our customers with the best online shopping experience by offering not only high-quality products but also exceptional customer service. We strive to help you find the perfect pair of spectacles that suits your style, personality, and budget.</p>

<h3>Why Choose Us?</h3>
<p>- Wide Selection: We offer a vast array of frames and lenses, from classic styles to the latest trends, ensuring there’s something for everyone.<br>
- Quality Assurance: Each pair of glasses is crafted with precision and care, ensuring durability and comfort.<br>
- Affordable Prices*: We believe that great eyewear should be accessible to everyone. That’s why we offer competitive prices without compromising on quality.<br>
- Customer Service: Our dedicated team is always here to help you. Whether you need assistance with your order or advice on choosing the right frame, we're here to support you every step of the way.</p>

<h3>Our Team</h3>
<p>We are a team of eyewear enthusiasts who believe in the perfect blend of style and functionality. Our experts work tirelessly to source and curate the best spectacles, ensuring that every pair meets our high standards.<p>

<h3>Join Us</h3>
<p>We are more than just an online store; we are a community of visionaries. Follow us on social media to stay updated on the latest trends, special offers, and more. Share your looks with #SpectraCare, and join our growing family of satisfied customers.<br><br>
Thank you for choosing SpectraCare. We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don’t hesitate to contact us.</p>



        
      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

