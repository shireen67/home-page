<?php
session_start();
$error = "";

// Simple login check (replace with database later)
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Demo credentials (change this)
    if($username === "admin" && $password === "admin123"){
        $_SESSION['admin_name'] = $username;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login | Smart Future Academy</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif}

body{
  background:url('background1.png');
  background-size:cover;
  background-position:center;
  background-attachment:fixed;
}

/* NAVBAR */
.navbar{
  display:flex;justify-content:space-between;align-items:center;
  padding:15px 40px;
  background:rgba(0,0,0,0.8);
  color:white;
}
.navbar h2{color:red}

/* LOGIN BOX */
.login-container{
  height:90vh;
  display:flex;
  justify-content:center;
  align-items:center;
}

.login-box{
  background:rgba(255,255,255,0.95);
  padding:40px;
  border-radius:15px;
  width:350px;
  text-align:center;
  box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

.login-box h2{
  margin-bottom:20px;
  color:red;
}

.login-box input{
  width:100%;
  padding:10px;
  margin:10px 0;
  border-radius:5px;
  border:1px solid #ccc;
}

.btn{
  width:100%;
  padding:10px;
  background:red;
  color:white;
  border:none;
  border-radius:5px;
  cursor:pointer;
}

.btn:hover{background:#e65c00}

.error{
  color:red;
  margin-bottom:10px;
}

/* FOOTER */
.footer{
  background:#111;color:#fff;text-align:center;padding:15px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
  <h2>Smart Future Academy</h2>
</div>

<!-- LOGIN FORM -->
<div class="login-container">
  <div class="login-box">
    <h2>Admin Login</h2>

    <?php if($error!=""){ ?>
      <div class="error"><?php echo $error; ?></div>
    <?php } ?>

    <form method="POST">
      <input type="text" name="username" placeholder="Enter Username" required>
      <input type="password" name="password" placeholder="Enter Password" required>
      <button type="submit" name="login" class="btn">Login</button>
    </form>
  </div>
</div>

<!-- FOOTER -->
<div class="footer">
  <p>&copy; 2026 Smart Future Academy</p>
</div>

</body>
</html>