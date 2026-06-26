<?php
session_start();
include "connection.php";

$showPopup = false;

if (isset($_POST['login'])) {

    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    // 🔐 LOGIN CHECK
    $sql = "SELECT * FROM adminpanel 
            WHERE user_name='$user_name' 
            AND user_password='$user_password'";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {

        $_SESSION['admin'] = $user_name;

        $showPopup = true;

    } else {
        $error = "❌ Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:
    linear-gradient(135deg,#0f172a,#1e3a8a,#06b6d4);
    overflow:hidden;
}

/* LOGIN BOX */

.login-box{
    width:380px;
    padding:40px;
    border-radius:25px;
    backdrop-filter:blur(15px);
    background:rgba(255,255,255,0.08);
    border:1px solid rgba(255,255,255,0.2);
    box-shadow:0 10px 40px rgba(0,0,0,0.4);
    text-align:center;
    color:white;
    animation:fadeIn 1s ease;
}

.login-box h2{
    margin-bottom:30px;
    font-size:32px;
}

/* INPUT */

.input-box{
    margin-bottom:20px;
}

.input-box input{
    width:100%;
    padding:15px;
    border:none;
    outline:none;
    border-radius:12px;
    background:rgba(255,255,255,0.15);
    color:white;
    font-size:16px;
}

.input-box input::placeholder{
    color:#ddd;
}

/* BUTTON */

.login-btn{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    background:linear-gradient(135deg,#00e5ff,#0066ff);
    color:white;
    font-size:17px;
    font-weight:bold;
    cursor:pointer;
    transition:0.4s;
}

.login-btn:hover{
    transform:scale(1.05);
    box-shadow:0 0 20px #00e5ff;
}

/* ERROR */

.error{
    margin-top:15px;
    color:#ff4d4d;
    font-weight:bold;
}

/* POPUP */

.popup{
    position:fixed;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%) scale(0);
    width:350px;
    padding:35px;
    border-radius:25px;
    background:white;
    text-align:center;
    z-index:1000;
    box-shadow:0 10px 40px rgba(0,0,0,0.5);
    transition:0.4s;
}

.popup.active{
    transform:translate(-50%,-50%) scale(1);
}

.popup h1{
    color:#0066ff;
    margin-bottom:10px;
}

.popup p{
    color:#333;
    margin-bottom:20px;
}

.popup button{
    padding:12px 25px;
    border:none;
    border-radius:10px;
    background:linear-gradient(135deg,#00e5ff,#0066ff);
    color:white;
    font-size:16px;
    cursor:pointer;
}

/* DARK OVERLAY */

.overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.6);
    backdrop-filter:blur(5px);
    opacity:0;
    pointer-events:none;
    transition:0.4s;
}

.overlay.active{
    opacity:1;
    pointer-events:auto;
}

/* ANIMATION */

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

</style>
</head>
<body>

<div class="login-box">

    <h2>Admin Login</h2>

    <form method="POST">

        <div class="input-box">
            <input type="text" 
                   name="user_name" 
                   placeholder="Enter Username" 
                   required>
        </div>

        <div class="input-box">
            <input type="password" 
                   name="user_password" 
                   placeholder="Enter Password" 
                   required>
        </div>

        <button type="submit" 
                name="login" 
                class="login-btn">
            Login
        </button>

    </form>

    <?php
    if(isset($error)){
        echo "<div class='error'>$error</div>";
    }
    ?>

</div>

<!-- OVERLAY -->
<div class="overlay <?php if($showPopup) echo 'active'; ?>"></div>

<!-- POPUP -->
<div class="popup <?php if($showPopup) echo 'active'; ?>">

    <h1>Welcome Back 🎉</h1>

    <p>Login Successful</p>

    <button onclick="goDashboard()">
        Continue
    </button>

</div>

<script>

function goDashboard(){

    window.location.href = "addblog.php";
}

</script>

</body>
</html>