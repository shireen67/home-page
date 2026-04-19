<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Smart Future Academy</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif}

body{
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:url('background1.png');
  background-size:cover;
  background-position:center;
}

/* GLASS EFFECT CONTAINER */
.login-container{
  width:350px;
  padding:30px;
  border-radius:15px;
  background:rgba(255,255,255,0.1);
  backdrop-filter:blur(10px);
  box-shadow:0 10px 30px rgba(0,0,0,0.3);
  color:#fff;
  text-align:center;
}

.login-container h2{
  margin-bottom:20px;
}

/* INPUT FIELDS */
.input-box{
  margin:15px 0;
}
.input-box input{
  width:100%;
  padding:10px;
  border:none;
  outline:none;
  border-radius:5px;
}

/* BUTTON */
.btn{
  width:100%;
  padding:10px;
  border:none;
  border-radius:5px;
  background:#ff6600;
  color:#fff;
  cursor:pointer;
  margin-top:10px;
}
.btn:hover{
  background:#e65c00;
}

/* LINKS */
.links{
  margin-top:15px;
  font-size:14px;
}
.links a{
  color:#ffcc00;
  text-decoration:none;
}
.links a:hover{
  text-decoration:underline;
}

/* TAGLINE */
.tagline{
  margin-top:10px;
  font-size:12px;
  color:#ffcc00;
}

</style>
</head>

<body>
<?php
// START SESSION
session_start();

// DATABASE CONNECTION
$servername = "127.0.0.1:3308"; // your port is correct
$username = "root";
$password = "";
$dbname = "school_admission_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// CHECK CONNECTION
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GET FORM DATA
$email = $_POST['email'];
$pass = $_POST['password'];

// PREVENT SQL INJECTION
$email = mysqli_real_escape_string($conn, $email);
$pass = mysqli_real_escape_string($conn, $pass);

// QUERY DATABASE
$sql = "SELECT * FROM customer WHERE email='$email' AND password='$pass'";
$result = $conn->query($sql);

// CHECK LOGIN
if ($result->num_rows > 0) {
    // LOGIN SUCCESS
    $_SESSION['user'] = $email;

    echo "<script>
            alert('Login Successful!');
            window.location.href='index.html';
          </script>";
} else {
    // LOGIN FAILED
    echo "<script>
            alert('Invalid Email or Password!');
            window.location.href='login.html';
          </script>";
}

// CLOSE CONNECTION
$conn->close();
?>
</body>
</html>