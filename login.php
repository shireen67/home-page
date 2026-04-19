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

<div class="login-container">
  <h2>Login</h2>

  <form action="login.php" method="POST">
    
    <div class="input-box">
      <input type="email" name="email" placeholder="Enter Email" required>
    </div>

    <div class="input-box">
      <input type="password" name="password" placeholder="Enter Password" required>
    </div>

    <button class="btn" type="submit">Login</button>

  </form>

  <div class="links">
    <p>Don't have an account? <a href="#">Sign Up</a></p>
  </div>

  <div class="tagline"> Your data is safe with us</div>
</div>

</body>
</html>