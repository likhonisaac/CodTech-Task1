<html>
    <head>
        <style>
        body{
            font-family:Arial,sans-serif;
            <background-color: id="f0f0f0";
            margin:0;
            padding:0;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        form{
            background-color:#fff;
            padding:20px;
            border-radius:8px;
            box-shadow:0 2px 4px rgba(0,0,0,0.1);
            border:1px solid #ccc;
        }
        
        input[type="email"],
        input[type="text"]{
            width:100%;
            padding:10px;
            margin-bottom:10px;
            border:1px solid #ccc;
            border-radius:4px;
            box-sizing:border-box;
        }
        
        button[type="submit"]{
            width:100%;
            padding:10px;
            border:none;
            border-radius:4px;
            background-color:#007bff;
            color:#fff;
            cursor:pointer;
            margin-bottom:5px;
        }

        button[type="submit"]:hover{
            background-color:#0056b3;
        }


        </style>
        </head>
    
<body>
        <?php
$link=mysqli_connect('localhost','root','','spectacles');
if(!$link)
{
    die('connection failed'.mysqli_error('spectacles'));
}
$db=mysqli_select_db($link,'spectacles');
if(!$db)
{
    die('selected database unavailable'.mysqli_error('spectacles'));
}
if(isset($_POST['forgot_submit'])){
    $mail=$_POST['mail'];
    $sec_code=$_POST['sec_code'];
    
    // Check if user exists and security question answer is correct
    $sql = "SELECT * FROM login_db WHERE mail='".$mail."' AND sec_code='".$sec_code."'";
    $result = mysqli_query($link, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        // Password reset code here
        // Redirect to password reset page or send password reset link via email
        echo("<script language='javascript'>
        window.alert('User verification successful. Redirecting to password reset page...')
        window.location.href='reset_pass.php'
        </script> ");
        exit();
    } else {
        echo("<script language='javascript'>
        window.alert('User not found or security answer incorrect. Please try again.')
        window.location.href='forgot_pass.php'
        </script> ");
        exit();  
    }
}
?>

<!-- HTML form for forgot password -->
<form method="post" action="" >
    <h2 style="text-align:center;">Forgot Password</h2>
    <h5 style="text-align:center;">Enter your security code and reset your password.</h5>
    <input type="email" placeholder="Enter email" name="mail" required/>
    <input type="text" name="sec_code" placeholder="Enter your security code" required>
    <button type="submit" name="forgot_submit">Submit</button>
</form>
</html>