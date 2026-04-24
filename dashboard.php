<?php
session_start();

// Example user data (replace with database session values)
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Student";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : "student@example.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard | Smart Future Academy</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),
    url('background1.png');
    background-size:cover;
    background-position:center;
    background-attachment:fixed;
    color:#fff;
}

/* Navbar */
.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 40px;
    background:rgba(0,0,0,0.9);
    position:sticky;
    top:0;
    z-index:1000;
}

.logo{
    color:#ff3c00;
    font-size:28px;
    font-weight:bold;
}

.navbar ul{
    display:flex;
    list-style:none;
}

.navbar ul li{
    margin-left:25px;
}

.navbar ul li a{
    color:#fff;
    text-decoration:none;
    transition:0.3s;
}

.navbar ul li a:hover{
    color:#ff3c00;
}

/* Welcome Section */
.welcome{
    text-align:center;
    padding:50px 20px;
}

.welcome h1{
    font-size:50px;
    margin-bottom:10px;
    color:#ffcc00;
}

.welcome p{
    font-size:20px;
}

/* Dashboard Cards */
.dashboard{
    width:90%;
    margin:30px auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}

.card{
    background:rgba(255,255,255,0.95);
    color:#333;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
    transition:0.4s;
    text-align:center;
}

.card:hover{
    transform:translateY(-10px);
}

.card h2{
    color:#ff3c00;
    margin-bottom:15px;
}

.card p{
    margin-bottom:20px;
    font-size:16px;
}

.btn{
    display:inline-block;
    padding:12px 25px;
    background:#ff3c00;
    color:#fff;
    text-decoration:none;
    border-radius:8px;
    transition:0.3s;
}

.btn:hover{
    background:#cc2f00;
}

/* Profile Section */
.profile{
    width:90%;
    max-width:700px;
    margin:50px auto;
    background:rgba(255,255,255,0.95);
    color:#333;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.profile h2{
    text-align:center;
    color:#ff3c00;
    margin-bottom:30px;
}

.profile-info{
    font-size:18px;
    line-height:2;
}

/* Footer */
.footer{
    text-align:center;
    background:#000;
    padding:20px;
    margin-top:50px;
}

@media(max-width:768px){
    .navbar{
        flex-direction:column;
    }

    .navbar ul{
        flex-direction:column;
        margin-top:15px;
    }

    .navbar ul li{
        margin:10px 0;
    }

    .welcome h1{
        font-size:35px;
    }
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">Smart Future Academy</div>

    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="results.php">Results</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<!-- Welcome -->
<div class="welcome">
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Your learning journey starts here.</p>
</div>

<!-- Dashboard Cards -->
<div class="dashboard">

    <div class="card">
        <h2>My Courses</h2>
        <p>View all your enrolled courses and study materials.</p>
        <a href="courses.php" class="btn">View Courses</a>
    </div>

    <div class="card">
        <h2>Admission Status</h2>
        <p>Check your admission approval and application details.</p>
        <a href="status.php" class="btn">Check Status</a>
    </div>

    <div class="card">
        <h2>Results</h2>
        <p>View your examination results and performance reports.</p>
        <a href="results.php" class="btn">View Results</a>
    </div>

    <div class="card">
        <h2>Update Profile</h2>
        <p>Edit your personal information anytime.</p>
        <a href="profile.php" class="btn">Update Profile</a>
    </div>

</div>

<!-- Profile Section -->
<div class="profile">
    <h2>Student Information</h2>

    <div class="profile-info">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($username); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Academy:</strong> Smart Future Academy</p>
        <p><strong>Session:</strong> 2026-2027</p>
        <p><strong>Status:</strong> Active</p>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2026 Smart Future Academy | Your Future, Our Responsibility</p>
</div>

</body>
</html>