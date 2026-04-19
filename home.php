<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smart Future Academy</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif}

body{
  font-family:'Segoe UI',sans-serif;
  background:url('background1.png');
  background-size:cover;
  background-position:center;
  background-attachment:fixed;
  color:blue;
}

/* NAVBAR */
.navbar{
  display:flex;justify-content:space-between;align-items:center;
  padding:15px 40px;
  background:rgba(0,0,0,0.8);
  color:white;
  position:sticky;top:0;z-index:1000;
}
.navbar h2{color:red}
.navbar ul{display:flex;list-style:none}
.navbar li{margin-left:20px}
.navbar a{color:red;text-decoration:none}
.navbar a:hover{color:#ffcc00}

.search-box input{
  padding:7px;border-radius:5px;border:none;
}

/* HERO */
.hero{
  height:90vh;
  display:flex;flex-direction:column;justify-content:center;align-items:center;
  text-align:center;color:blue;
}
.hero h1{font-size:50px;margin-bottom:10px}
.hero p{font-size:18px;margin-bottom:20px}

.btn{
  background:red;color:white;padding:10px 20px;
  border:none;border-radius:5px;cursor:pointer;
}
.btn:hover{background:#e65c00}

.tagline{
  margin-top:10px;
  font-size:14px;
  color:red;
}

/* SECTION */
.section{
  background:rgba(255,255,255,0.9);
  padding:60px 20px;
  text-align:center;
  backdrop-filter:blur(5px);
}

/* FEATURES */
.features{
  display:flex;flex-wrap:wrap;justify-content:center;
}
.feature-box{
  width:250px;margin:15px;padding:20px;
  border-radius:10px;
  box-shadow:0 5px 15px rgba(0,0,0,0.1);
  transition:0.3s;
}
.feature-box:hover{transform:translateY(-10px)}

/* FORM */
.form-box{
  max-width:500px;margin:20px auto;
  padding:20px;
  background:#f9f9f9;
  border-radius:10px;
}
.form-box input, .form-box select{
  width:100%;padding:10px;margin:10px 0;
  border-radius:5px;border:1px solid #ccc;
}

/* CONTACT */
.contact-box{
  max-width:500px;margin:20px auto;
  padding:20px;
  background:#f9f9f9;
  border-radius:10px;
}
.contact-item{margin:10px 0}

/* STATUS */
.status-box{
  max-width:400px;margin:20px auto;
  padding:20px;
  background:#eef;
  border-radius:10px;
}

/* FOOTER */
.footer{
  background:#111;color:#fff;text-align:center;padding:15px;
}

@media(max-width:768px){
  .navbar{flex-direction:column}
  .navbar ul{flex-direction:column;margin-top:10px}
  .hero h1{font-size:30px}
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
  <h2>Smart Future Academy</h2>
  
  <div class="search-box">
    <input type="text" placeholder="Search Class (5-12) or Stream...">
  </div>

  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#about">About Us</a></li>
    <li><a href="#apply">Apply</a></li>
    <li><a href="#status">Status</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#login">Login/Signup</a></li>
  </ul>
</div>

<!-- HERO -->
<div class="hero">
  <h1>Welcome to Smart Future Academy</h1>
  <p>Classes from 5 to 12 | Science . Commerce . Arts</p>
  <button class="btn">Apply Now</button>
  <div class="tagline"> Your data is safe with us</div>
</div>

<!-- ABOUT -->
<div class="section" id="about">
  <h2>About Us</h2>
  <p>We provide modern education with experienced teachers, smart classrooms, and affordable fees.</p>
</div>

<!-- FEATURES -->
<div class="section">
  <h2>Our Facilities</h2>
  <div class="features">
    <div class="feature-box">Experienced Teachers</div>
    <div class="feature-box">Smart Classes</div>
    <div class="feature-box">Affordable Fees</div>
    <div class="feature-box">Weekly Tests</div>
  </div>
</div>

<!-- CONTACT -->
<div class="section" id="contact">
  <h2>Contact Us</h2>

  <div class="contact-box">

    <div class="contact-item">
      <img src="callicon.png" width="22" onerror="this.src='https://via.placeholder.com/22'">
      <span>+91-9267564894</span>
    </div>

    <div class="contact-item">
      <img src="whatsappicon.png" width="22" onerror="this.src='https://via.placeholder.com/22'">
      <span>+91-6754908763</span>
    </div>

    <div class="contact-item">
      <img src="emailicon.png" width="22" onerror="this.src='https://via.placeholder.com/22'">
      <span>smartfutureacademy@gmail.com</span>
    </div>

  </div>
</div>


<!-- FOOTER -->
<div class="footer">
  <p>© 2026 Smart Future Academy | Your data is safe with us</p>
</div>

</body>
</html>
