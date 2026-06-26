<?php

include 'connection.php';

// FETCH DATA

if (isset($_GET['update'])) {

    $id = (int)$_GET['update'];

    $sql = "SELECT * FROM userdata WHERE s_no= ?";

    $stmt = mysqli_stmt_init($connection);

    if (mysqli_stmt_prepare($stmt, $sql)) {

        mysqli_stmt_bind_param($stmt, "i", $id);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $row = mysqli_fetch_assoc($result);
    }
}

// UPDATE DATA

if (isset($_POST['update_btn'])) {

    $id = (int)$_POST['s_nos'];

    $name = $_POST['name'];

    $email = $_POST['e1'];

    $sql = "UPDATE userdata 
            SET user_name = ?, user_email = ? 
            WHERE s_no = ?";

    $stmt = mysqli_stmt_init($connection);

    if (mysqli_stmt_prepare($stmt, $sql)) {

        mysqli_stmt_bind_param(
            $stmt,
            "ssi",
            $name,
            $email,
            $id
        );

        mysqli_stmt_execute($stmt);

        header("Location: read.php");

        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Update User</title>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
     background:linear-gradient(135deg,#0f172a,#1e293b);
    overflow:hidden;
}

/* CARD */

.update-card{
    width:400px;
    background:white;
    padding:40px;
    border-radius:24px;
    box-shadow:0 15px 40px rgba(0,0,0,0.2);
    animation:showCard 0.7s ease;
}

/* HEADING */

.update-card h2{
    text-align:center;
    margin-bottom:30px;
    color:#333;
    font-size:30px;
}

/* LABEL */

label{
    display:block;
    margin-bottom:8px;
    color:#555;
    font-weight:500;
}

/* INPUT */

.input-box{
    margin-bottom:22px;
}

.input-box input{
    width:100%;
    padding:14px;
    border:1px solid #ddd;
    border-radius:12px;
    outline:none;
    font-size:15px;
    transition:0.3s;
}

.input-box input:focus{
    border-color:#667eea;
    box-shadow:0 0 10px rgba(102,126,234,0.2);
}

/* BUTTON */

.update-btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:14px;
    background:linear-gradient(135deg,#0f172a,#1e293b);;
    color:white;
    font-size:16px;
    cursor:pointer;
    font-weight:600;
    transition:0.3s;
}

.update-btn:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 20px rgba(118,75,162,0.3);
}

/* ANIMATION */

@keyframes showCard{

    from{
        opacity:0;
        transform:translateY(40px) scale(0.9);
    }

    to{
        opacity:1;
        transform:translateY(0) scale(1);
    }
}

/* MOBILE */

@media(max-width:500px){

    .update-card{
        width:100%;
        margin:20px;
        padding:30px 20px;
    }

    .update-card h2{
        font-size:24px;
    }
}

</style>

</head>

<body>

<div class="update-card">

<h2>Update User</h2>

<form method="post">

<input type="hidden"
name="s_nos"
value="<?php echo $row['s_no']; ?>">

<div class="input-box">

<label>Name</label>

<input type="text"
name="name"
value="<?php echo $row['user_name']; ?>">

</div>

<div class="input-box">

<label>Email</label>

<input type="text"
name="e1"
value="<?php echo $row['user_email']; ?>">

</div>

<input type="submit"
name="update_btn"
value="Update User"
class="update-btn">

</form>

</div>

</body>
</html>