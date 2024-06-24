<!DOCTYPE html>
<html>
<head>
<title>SpectraCare login</title>
<style>
    *,
    *:before,
    *:after{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

    

    form{
        height:600px;
        width:400px;
        background-color:rgba(255,255,255,0.13);
        position:absolute;
        transform:translate(-50%,-50%);
        top:50%;
        left:50%;
        border-radius:10px;
        backdrop-filter:blur(10px);
        border:2px solid rgba(255,255,255,0.1);
        box-shadow:0 0 40px rgba(8,7,16,0.6);
        padding:50px 35px;
    }
    

    body{
        background-color:white;

    }

    h2{
        font-size:32px;
        font-weight:500;
        text-align:center;
        color:black;
    }

    label{
        display:inline-block;
        margin-top:10px;
        font-size:16px;
        font-weight:500;
        color:black;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"]{
        display:inline-block;
        height:50px;
        width:100%;
        background-color:rgba(255,255,255,0.07);
        border-radius:3px;
        padding:0 10px;
        margin-top:4px;
        font-size:14px;
        font-weight:300;
    }

    ::placeholder{
        color:black;
    }

    input[type="submit"],
    input[type="reset"]{
        margin-bottom:20px;
        margin-top:20px;
        width:20%;
        height:5%;;
        background-color:#E6E6FA;
        color:#080710;
        padding:5px 2px;
        font-size:11px;
        font-weight:600;
        border-radius:5px;
        cursor:pointer;
    }
    h5{
        text-align:center;
        color:grey;
    }
    input[type="submit"]:hover,
    input[type="reset"]:hover
    {
        background-color:#E6E6FA;
    }



    </style>
    </head>
    <body> 
    <form action="signuppp.php" method="POST">
        <h2>Signup</h2> 
        <label>Name</label>      
        <input type="text" placeholder="Enter your name" name="uname" pattern="^[A-Za-z\s]+$" required/>
        <label>Password</label>
        <input type="password" placeholder="Enter Password" name="pswrd" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-<>]).{8,}" title="Password must be at least 8 characters long and contain at least one uppercase letter,one lowercase letter,one number, and one special character" required/>
        <label>Phone Number</label>
        <input type="text" placeholder="Enter phone number" name="phoneno" minlength=10 maxlength=10 pattern="[0-9]{10}" required/>
        <label>Email</label>
        <input type="email" placeholder="Enter email" name="mail" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required/>
        <label>Enter a security code</label>      
        <input type="text" placeholder="Enter security code" name="sec_code" required/>
        <label>Enter type</label>      
        <input type="text" placeholder="Admin or User" name="type" required/>
        <center>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        <p>Already a user? <a style="text-decoration:none" href="index.php">Login</a></p>
        </center>
        </form>
        </body>
        </html>