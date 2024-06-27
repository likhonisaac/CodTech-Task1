<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .product-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(18rem, 1fr));
            gap: 20px;
        }
        .card {
            background-color: #FFF;
            margin: 20px;
            align-self: start;
        }
        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        * {
            margin: 0;
            padding: 0;
        }
        a {
            text-decoration: none;
            color: #000;
            padding: 5px 20px;
            border: 1px solid #fff;
            transition: 0.6s ease;
        }
        a:hover {
            background-color: #FCF;
            color: #000;
        }
        .fnav, .snav {
            display: flex;
            justify-content: center;
            justify-content: space-around;
        }
        .fnav input {
            width: 300px;
            height: 27px;
            border-radius: 3px;
            text-align: center;
            border: 2px solid gray;
            margin-top: 16px;
        }
        .fnav p {
            margin-top: 17px;
            font-size: 17px;
        }
        .snav {
            padding: 11px;
            background-color: rgb(218, 213, 213);
            font-weight: 800;
        }
        .snav p:hover {
            border-bottom: 2px solid rgb(13, 13, 46);
            color: rgb(13, 13, 46);
            cursor: pointer;
        }
        .snav img {
            width: 5%;
        }
		.sea{width:auto;
		}
    </style>
</head>
<body>
    <h1>SpectraCare</h1>
    <nav class="fnav">
        <img src="https://static.lenskart.com/media/mobile/images/phone_number.svg" alt="">
        <a href="index.php"><p>Home</p></a>
        <a href="about.php"><p>About Us</p></a>
        <a href="product.php"><p>Product</p></a>
         <form action="product.php" method="get">
            <input type="text" name="search" placeholder="Search products">
            <button type="submit" value="Search">Search</button>
        </form>
        <a href="cart.php"><p>Cart</p></a>
        <a href="orders.php"><p>My Orders</p></a>
        <a href="loginn.php"><p>Sign Up & Sign In</p></a>
        <a href="logout.php"><p>Logout</p></a>
       
    </nav>
    <nav class="snav">
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
    </nav>
    <div class="product-container">
        <?php
        // Establish a database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "spectacles";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if there is a search query
        $search = isset($_GET['search']) ? $_GET['search'] : '';

        // SQL query to retrieve products from the database
        if ($search) {
            $sql = "SELECT * FROM products WHERE product_name LIKE '%$search%'";
        } else {
            $sql = "SELECT * FROM products";
        }

        $result = $conn->query($sql);

        // Check if there are any products returned from the query
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="card" style="width: 18rem;">
                    <h4 class="card-title" style="text-align: center;"><?php echo $row['product_name']; ?></h4>
                    <img src="<?php echo $row['product_img_name']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Description: <?php echo $row['product_desc']; ?></p>
                        <p>Price: <?php echo $row['price']; ?></p>
                        <?php
                        if ($row['qty'] == 0) {
                            echo "<p style='color: red;'>Out of Stock!</p>";
                        } else {
                            echo "<a href='update-cart.php?id=" . $row['id'] . "&action=add' class='btn btn-primary'>Add to Cart</a>";
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "No results found.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
