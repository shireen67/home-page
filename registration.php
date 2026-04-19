<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student Registration - Smart Future Academy</title>

<style>
*{margin:0;padding:0;box-sizing:border-box}

/* BACKGROUND IMAGE */
body{
  font-family:Arial,sans-serif;
  background:url('background1.png');
  background-size:cover;
  background-position:center;
  background-attachment:fixed;
  display:flex;
  justify-content:center;
  align-items:center;
  height:100vh;
}

/* FORM BOX */
.form-box{
  background:rgba(255,255,255,0.95);
  padding:30px;
  width:360px;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

/* TITLE */
.form-box h2{
  text-align:center;
  margin-bottom:20px;
  color:#004aad;
}

/* INPUT FIELDS */
.input-box{
  margin-bottom:15px;
}
.input-box input,
.input-box select{
  width:100%;
  padding:10px;
  border:1px solid #ccc;
  border-radius:5px;
  outline:none;
}
.input-box input:focus,
.input-box select:focus{
  border-color:#004aad;
}

/* BUTTON */
.btn{
  width:100%;
  padding:12px;
  background:#ff6600;
  color:white;
  border:none;
  border-radius:5px;
  font-size:16px;
  cursor:pointer;
}
.btn:hover{
  background:#e65c00;
}

/* LOGIN LINK */
.login-link{
  text-align:center;
  margin-top:15px;
}
.login-link a{
  color:#004aad;
  text-decoration:none;
}

/* MOBILE */
@media(max-width:400px){
  .form-box{width:90%}
}
</style>

</head>

<body>

<div class="form-container">
  <h2>Student Registration</h2>

  <!-- FORM START -->
 <form action="registration_process.php" method="POST">
    <input type="text" name="student_name" placeholder="Student Name">
    <input type="email" name="email" placeholder="Email">
    <input type="tel" name="phone" placeholder="Phone">
    <select name="course" required>
    <option value="">-- Select Class --</option>
    <option value="5">Class 5</option>
    <option value="6">Class 6</option>
    <option value="7">Class 7</option>
    <option value="8">Class 8</option>
    <option value="9">Class 9</option>
    <option value="10">Class 10</option>
    <option value="11_science">Class 11 - Science</option>
    <option value="11_arts">Class 11 - Arts</option>
    <option value="11_commerce">Class 11 - Commerce</option>
    <option value="12_science">Class 12 - Science</option>
    <option value="12_arts">Class 12 - Arts</option>
    <option value="12_commerce">Class 12 - Commerce</option>
</select>
    <input type="password" name="password" placeholder="new password">
    <input type="password" name="confirm_password" placeholder="confirm password">
    <button type="submit">Register</button>
</form>
  <!-- FORM END -->

  <div class="login-link">
    <p>Already have an account? <a href="#">Login</a></p>
  </div>

</div>

</body>
</html>