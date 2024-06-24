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
        height:520px;
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
        margin-top:50px;
    }
    

    body{
        background-color:white;

    }

    h2{
        font-size:32px;
        font-weight:500;
        font-family:verdana;
        text-align:center;
        color:black;
    }

    label{
        display:inline-block;
        margin-top:30px;
        font-size:16px;
        font-weight:500;
        color:black;
    }

    input[type="email"],
    input[type="password"]{
        display:inline-block;
        height:50px;
        width:100%;
        background-color:rgba(255,255,255,0.07);
        border-radius:3px;
        padding:0 10px;
        margin-top:8px;
        font-size:14px;
        font-weight:300;
    }

    ::placeholder{
        color:black;
    }

    button{
        margin-top:40px;
        width:100%;
        background-color:#E6E6FA;
        color:#080710;
        padding:15px 0;
        font-size:18px;
        font-weight:600;
        border-radius:5px;
        cursor:pointer;
    }
    h5{
        text-align:center;
        color:grey;
    }

    input[type="checkbox"]{
        
        width:15px;
        height:15px;
        margin-top:2px;
        margin-right:1px;
    }
    a{
        color:#007bff;
    }
    
    </style>
    </head>
    <body> 
    
    <form action="signin.php" method="POST">
        <h2>LOGIN</h2>
        
        <label>Email</label>
        <input type="email" placeholder="Enter email" name="mail" required/>
        <label>Password</label>
        <input type="password" placeholder="Password" name="pswrd" id="myInput" required/>
        <input type="checkbox" onclick="myFunction()" > Show Password
        <a style="text-decoration:none;" href="forgot_pass.php">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Forgot Password?</a>
        <button>Log In </button>
        <center>
        <p>Don't have an account? <a style="text-decoration:none" href="register.php">Signup</a></p>
</center>
        </form>
        <script>
            function myFunction(){
                var x=document.getElementById("myInput");
                if(x.type==="password"){
                    x.type="email";
                }else{
                    x.type="password";
                }
            }
            </script>
        </body>
        </html>
        