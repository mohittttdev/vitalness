<?php
session_start();
include "../../connection.php";

if (!isset($_SESSION['admin'])) {
    header("Location: adminlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Blogs</title>

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
    padding:40px;
    color:white;
}

/* CONTAINER */

.manage-container{

    max-width:1200px;
    margin:auto;

    background:rgba(255,255,255,0.08);

    backdrop-filter:blur(15px);

    border:1px solid rgba(255,255,255,0.12);

    border-radius:30px;

    padding:40px;

    box-shadow:0 10px 40px rgba(0,0,0,0.4);

    animation:fadeIn 1s ease;
}

/* TITLE */

.manage-title{

    text-align:center;

    font-size:42px;

    margin-bottom:35px;

    background:
    linear-gradient(135deg,#00e5ff,#ffffff);

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

/* ADD BUTTON */

.add-btn{

    display:inline-block;

    text-decoration:none;

    padding:15px 25px;

    border-radius:15px;

    background:
    linear-gradient(135deg,#00e5ff,#0066ff);

    color:white;

    font-weight:bold;

    transition:0.4s;
}

.add-btn:hover{

    transform:translateY(-3px);

    box-shadow:0 0 20px #00e5ff;
}

/* TABLE */

.table-box{

    margin-top:35px;

    overflow-x:auto;
}

table{

    width:100%;

    border-collapse:collapse;

    overflow:hidden;

    border-radius:20px;
}

table th{

    background:#00bfff;

    padding:18px;

    font-size:18px;

    color:white;
}

table td{

    padding:18px;

    text-align:center;

    background:rgba(255,255,255,0.05);

    border-bottom:1px solid rgba(255,255,255,0.08);
}

/* ROW HOVER */

table tr:hover td{

    background:rgba(0,191,255,0.12);

    transition:0.3s;
}

/* ACTION BUTTONS */

.action-btn{

    text-decoration:none;

    padding:10px 18px;

    border-radius:10px;

    color:white;

    font-size:14px;

    font-weight:bold;

    margin:0 5px;

    transition:0.3s;
}

/* EDIT */

.edit-btn{

    background:#00c853;
}

.edit-btn:hover{

    background:#00e676;

    transform:scale(1.05);
}

/* DELETE */

.delete-btn{

    background:#ff1744;
}

.delete-btn:hover{

    background:#ff4569;

    transform:scale(1.05);
}

/* EMPTY MESSAGE */

.empty{

    text-align:center;

    margin-top:40px;

    color:#ddd;

    font-size:18px;
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

<div class="manage-container">

    <h1 class="manage-title">
        📚 Manage Blogs
    </h1>

    <a href="addblog.php" class="add-btn">
        ➕ Add New Blog
    </a>

    <div class="table-box">


    </div>

</div>

</body>
</html>