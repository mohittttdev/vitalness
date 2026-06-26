<?php
session_start();
include "connection.php";

$successPopup = false;

if (!isset($_SESSION['admin'])) {
    header("Location: adminlogin.php");
    exit();
}

if (isset($_POST['submit'])) {

  $title = mysqli_real_escape_string($conn, $_POST['title']);

$content = mysqli_real_escape_string($conn, $_POST['content']);

$sql = "INSERT INTO blogs (title, content)
VALUES ('$title', '$content')";

    $result = $conn->query($sql);

    if ($result) {

        $successPopup = true;

    } else {
        $error = "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Blog</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:
    linear-gradient(135deg,#0b1220,#13264a,#0f172a);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:40px;
    color:white;
}

/* MAIN BOX */

.admin-container{
    width:100%;
    max-width:800px;
    padding:40px;
    border-radius:30px;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(15px);
    border:1px solid rgba(255,255,255,0.15);
    box-shadow:0 10px 40px rgba(0,0,0,0.4);
    animation:fadeIn 1s ease;
}

/* TITLE */

.admin-title{
    text-align:center;
    font-size:40px;
    margin-bottom:35px;
    background:linear-gradient(135deg,#00e5ff,#ffffff);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

/* INPUTS */

.input-box{
    margin-bottom:25px;
}

.input-box input,
.input-box textarea{

    width:100%;
    padding:18px;
    border:none;
    outline:none;
    border-radius:18px;
    background:rgba(255,255,255,0.12);
    color:white;
    font-size:16px;
}

.input-box textarea{
    resize:none;
    min-height:220px;
}

.input-box input::placeholder,
.input-box textarea::placeholder{
    color:#d1d5db;
}

/* BUTTON */

.post-btn{
    width:100%;
    padding:16px;
    border:none;
    border-radius:18px;
    background:
    linear-gradient(135deg,#00e5ff,#0066ff);
    color:white;
    font-size:18px;
    font-weight:bold;
    cursor:pointer;
    transition:0.4s;
}

.post-btn:hover{
    transform:translateY(-3px);
    box-shadow:0 0 25px #00e5ff;
}

/* LINKS */

.admin-links{
    margin-top:30px;
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
    gap:15px;
}

.admin-links a{

    text-decoration:none;
    color:white;
    background:rgba(255,255,255,0.12);
    padding:14px 22px;
    border-radius:14px;
    transition:0.4s;
    font-weight:bold;
}

.admin-links a:hover{
    background:#00bfff;
    transform:scale(1.05);
}

/* ERROR */

.error{
    margin-top:20px;
    color:#ff5e5e;
    font-weight:bold;
    text-align:center;
}

/* POPUP */

.popup-overlay{

    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.6);
    backdrop-filter:blur(5px);
    display:none;
    justify-content:center;
    align-items:center;
    z-index:1000;
}

.popup-overlay.active{
    display:flex;
}

.popup{

    width:350px;
    background:white;
    color:#111;
    padding:35px;
    border-radius:25px;
    text-align:center;
    animation:popupAnim 0.5s ease;
}

.popup h1{
    color:#0066ff;
    margin-bottom:10px;
}

.popup p{
    margin-bottom:20px;
}

.popup button{

    padding:12px 25px;
    border:none;
    border-radius:12px;
    background:
    linear-gradient(135deg,#00e5ff,#0066ff);
    color:white;
    font-size:16px;
    cursor:pointer;
}

/* ANIMATIONS */

@keyframes fadeIn{

    from{
        opacity:0;
        transform:translateY(40px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes popupAnim{

    from{
        transform:scale(0.5);
        opacity:0;
    }

    to{
        transform:scale(1);
        opacity:1;
    }
}

</style>
</head>
<body>

<div class="admin-container">

    <h1 class="admin-title">
        Add Blog
    </h1>

    <form method="POST">

        <div class="input-box">
            <input type="text"
                   name="title"
                   placeholder="Enter Blog Title"
                   required>
        </div>

        <div class="input-box">
            <textarea name="content"
                      placeholder="Write Your Blog Content..."
                      required></textarea>
        </div>

        <button type="submit"
                name="submit"
                class="post-btn">
            🚀 Publish Blog
        </button>

    </form>

    <?php
    if(isset($error)){
        echo "<div class='error'>$error</div>";
    }
    ?>

    <div class="admin-links">

        <a href="manage.php">
            📚 Manage Blogs
        </a>

        <a href="logout.php">
            🚪 Logout
        </a>

    </div>

</div>

<!-- SUCCESS POPUP -->

<div class="popup-overlay <?php if($successPopup) echo 'active'; ?>">

    <div class="popup">

        <h1>Success 🎉</h1>

        <p>Blog Posted Successfully</p>

        <button onclick="goHome()">
            Go To Website
        </button>

    </div>

</div>

<script>

function goHome(){

    window.location.href = "../../index.html";
}

</script>

</body>
</html>