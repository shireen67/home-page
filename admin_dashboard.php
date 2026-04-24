<?php
session_start();

// Change these according to your login system
$admin_name = isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : "Administrator";

// Optional: Restrict direct access
/*
if(!isset($_SESSION['admin_name'])){
    header("Location: admin_login.php");
    exit();
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard | Smart Future Academy</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),
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
    padding:18px 40px;
    background:rgba(0,0,0,0.9);
    position:sticky;
    top:0;
    z-index:1000;
}

.logo{
    font-size:30px;
    font-weight:bold;
    color:#ff3c00;
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
    font-size:17px;
    transition:0.3s;
}

.navbar ul li a:hover{
    color:#ffcc00;
}

/* Hero Section */
.hero{
    text-align:center;
    padding:70px 20px 40px;
}

.hero h1{
    font-size:55px;
    color:#ffcc00;
    margin-bottom:15px;
}

.hero p{
    font-size:22px;
    color:#fff;
}

/* Dashboard Cards */
.dashboard{
    width:90%;
    margin:40px auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}

.card{
    background:rgba(255,255,255,0.95);
    color:#333;
    padding:35px 25px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 15px 30px rgba(0,0,0,0.3);
    transition:0.4s;
}

.card:hover{
    transform:translateY(-12px);
}

.card h2{
    color:#ff3c00;
    margin-bottom:15px;
    font-size:28px;
}

.card p{
    margin-bottom:25px;
    font-size:17px;
    line-height:1.6;
}

.btn{
    display:inline-block;
    background:#ff3c00;
    color:#fff;
    padding:12px 28px;
    text-decoration:none;
    border-radius:8px;
    transition:0.3s;
    font-weight:bold;
}

.btn:hover{
    background:#cc2f00;
}

/* Admin Profile */
.admin-profile{
    width:90%;
    max-width:800px;
    margin:50px auto;
    background:rgba(255,255,255,0.95);
    color:#333;
    padding:40px;
    border-radius:20px;
    box-shadow:0 15px 35px rgba(0,0,0,0.3);
}

.admin-profile h2{
    text-align:center;
    color:#ff3c00;
    margin-bottom:30px;
    font-size:35px;
}

.admin-info p{
    font-size:20px;
    margin:15px 0;
}

/* Footer */
.footer{
    background:#111;
    text-align:center;
    padding:20px;
    margin-top:50px;
    color:#fff;
}

@media(max-width:768px){
    .navbar{
        flex-direction:column;
    }

    .navbar ul{
        flex-direction:column;
        margin-top:20px;
    }

    .navbar ul li{
        margin:10px 0;
    }

    .hero h1{
        font-size:38px;
    }

    .hero p{
        font-size:18px;
    }
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">Smart Future Academy</div>

    <ul>
        <li><a href="admin_dashboard.php">Dashboard</a></li>
        <li><a href="manage_students.php">Students</a></li>
        <li><a href="manage_courses.php">Courses</a></li>
        <li><a href="view_applications.php">Applications</a></li>
        <li><a href="admin_logout.php">Logout</a></li>
    </ul>
</div>

<!-- Hero Section -->
<div class="hero">
    <h1>Welcome, <?php echo htmlspecialchars($admin_name); ?>!</h1>
    <p>Smart Future Academy Administration Panel</p>
</div>

<!-- Dashboard Cards -->
<div class="dashboard">

    <div class="card">
        <h2>Manage Students</h2>
        <p>View, edit, and manage all registered student accounts.</p>
        <a href="manage_students.php" class="btn">Open</a>
    </div>

    <div class="card">
        <h2>Manage Courses</h2>
        <p>Add, update, and remove academy courses and streams.</p>
        <a href="manage_courses.php" class="btn">Open</a>
    </div>

    <div class="card">
        <h2>Admission Applications</h2>
        <p>Review and approve student admission applications.</p>
        <a href="view_applications.php" class="btn">Open</a>
    </div>

    <div class="card">
        <h2>Student Results</h2>
        <p>Upload and manage examination results.</p>
        <a href="manage_results.php" class="btn">Open</a>
    </div>

    <div class="card">
        <h2>Messages</h2>
        <p>Read contact form messages sent by students.</p>
        <a href="view_messages.php" class="btn">Open</a>
    </div>

    <div class="card">
        <h2>Website Settings</h2>
        <p>Control homepage content and academy information.</p>
        <a href="website_settings.php" class="btn">Open</a>
    </div>

</div>

<!-- Admin Information -->
<div class="admin-profile">
    <h2>Administrator Information</h2>

    <div class="admin-info">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($admin_name); ?></p>
        <p><strong>Role:</strong> Super Administrator</p>
        <p><strong>Academy:</strong> Smart Future Academy</p>
        <p><strong>Session:</strong> 2026 - 2027</p>
        <p><strong>Status:</strong> Active</p>
        <p><strong>Access Level:</strong> Full Control</p>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2026 Smart Future Academy | Admin Control Panel</p>
</div>

</body>
</html>