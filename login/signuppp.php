<?php
session_start();
$link = mysqli_connect('localhost', 'root', '', 'spectacles');
if (!$link) {
    die('connection failed' . mysqli_error('spectacles'));
}
$uname=$_POST['uname'];
$pswrd = $_POST['pswrd'];
$phoneno=$_POST['phoneno'];
$mail = $_POST['mail'];
$sec_code=$_POST['sec_code'];
$type=$_POST['type'];
// Check if email already exists in the database
$sql_check_email = "SELECT * FROM login_db WHERE mail='$mail'";
$result_check_email = mysqli_query($link, $sql_check_email);
if (mysqli_num_rows($result_check_email) > 0) {
    echo("<script language='javascript'>
    window.alert('Email already exists')
    window.location.href='register.php'
    </script> ");
    exit();
} else {
    // If email does not exist, insert new user into the database
    $sql_insert_user = "INSERT INTO login_db (uname,pswrd,phoneno,mail,sec_code,type) VALUES ('$uname','$pswrd','$phoneno','$mail','$sec_code','$type')";
    $result_insert_user = mysqli_query($link, $sql_insert_user);
    if ($result_insert_user) {
        $_SESSION['log'] = 'yes';
        $_SESSION['mail'] = $mail;
        echo("<script language='javascript'>
        window.alert('Registration successful')
        window.location.href='loginn.php'
        </script> ");
    } else {
        echo("<script language='javascript'>
        window.alert('Registration failed')
        window.location.href='register.php'
        </script> ");
    }
}
?>