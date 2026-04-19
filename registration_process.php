<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Process</title>

<style>
body{
  font-family:Arial;
  text-align:center;
  background:url('background1.png');
  background-size:cover;
  background-position:center;
  background-attachment:fixed;
}
.box{
  background:rgba(255,255,255,0.95);
  margin:100px auto;
  padding:30px;
  width:350px;
  border-radius:10px;
  box-shadow:0 10px 25px rgba(0,0,0,0.2);
}
.success{color:green;}
.error{color:red;}
a{
  display:inline-block;
  margin-top:15px;
  text-decoration:none;
  color:#004aad;
  font-weight:bold;
}
</style>

</head>

<body>

<div class="box">


<?php
$cname=$_POST["name"];
$email=$_POST["email"];
$ph=$_POST["phone"];
$course=$_POST["course"];
$npass=$_POST["password"];
$cpass=$_POST["password"];
#database connectivity
$servername="127.0.0.1:3308";
$username="root";
$password="";
$dbname="school_admission_system";
#connect php to phpadmin database
$con=mysqli_connect($servername, $username, $password, $dbname);
if(!$con)
{
echo mysqli_connect_error;
}
#insert data/ update data/ delete data (only query change)
$sql="insert into student values('".$cname."','".$email."','".$ph."','".$course."','".$npass."','".$cpass."')";
if($con->query($sql)=== TRUE)
{
echo "<h3> student record successfully inserted.</h3>";
}
else
{
echo $con->error;
}
$con->close();
?>
<a href="registration.html">Go Back</a>

</div>

</body>
</html>