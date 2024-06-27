<?php
session_start();
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
$mail=$_POST['mail'];
$pswrd=$_POST['pswrd'];
if(!$_POST['mail'] | !$_POST['pswrd'])
{
echo("<script language='javascript'>
window.alert('you didnot complete all the fields')
window.location.href='loginn.php'
</script> ");
exit();
}

$sql=mysqli_query($link,"SELECT * FROM login_db WHERE mail='$mail' AND pswrd='$pswrd'");
if(mysqli_num_rows($sql)>0)
{
$_SESSION['log']='yes';
$_SESSION['mail']=$mail;
echo("<script language='javascript'>
window.alert('login successful')
window.location.href='index.php'
</script> ");
exit();
}
else
{ 
    echo("<script language='javascript'>
window.alert('Invalid username and password')
window.location.href='loginn.php'
</script> ");
exit();
}


?>
