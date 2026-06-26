<?php

session_start();

include "../../connection.php";

if(!isset($_SESSION['admin'])){

    header("Location: adminlogin.php");

    exit();
}

/* CHECK BLOG ID */

if(!isset($_GET['id'])){

    die("❌ Invalid Blog ID");
}

$id = intval($_GET['id']);

$success = false;

/* UPDATE BLOG */

if(isset($_POST['update'])){

    $title = mysqli_real_escape_string(
        $connection,
        $_POST['title']
    );

    $content = mysqli_real_escape_string(
        $connection,
        $_POST['content']
    );

    $sql = "UPDATE blogs
            SET title='$title',
            content='$content'
            WHERE s_no='$id'";

    if(mysqli_query($connection, $sql)){

        $success = true;

    }else{

        $error = "❌ Update Failed";
    }
}

/* FETCH BLOG */

$fetch = mysqli_query(
    $connection,
    "SELECT * FROM blogs
     WHERE s_no='$id'"
);

/* BLOG EXISTS? */

if(mysqli_num_rows($fetch) == 0){

    die("❌ Blog Not Found");
}

$row = mysqli_fetch_assoc($fetch);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Blog</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:40px;

    background:
    linear-gradient(135deg,#0b1220,#13264a,#0f172a);

    color:white;
}

/* CONTAINER */

.edit-container{

    width:100%;

    max-width:850px;

    padding:40px;

    border-radius:30px;

    background:rgba(255,255,255,0.08);

    backdrop-filter:blur(15px);

    border:1px solid rgba(255,255,255,0.15);

    box-shadow:0 10px 40px rgba(0,0,0,0.4);

    animation:fadeIn 1s ease;
}

/* TITLE */

.edit-title{

    text-align:center;

    font-size:42px;

    margin-bottom:35px;

    background:
    linear-gradient(135deg,#00e5ff,#ffffff);

    -webkit-background-clip:text;

    -webkit-text-fill-color:transparent;
}

/* INPUT */

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

    min-height:250px;
}

.input-box input::placeholder,
.input-box textarea::placeholder{

    color:#d1d5db;
}

/* BUTTON */

.update-btn{

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

.update-btn:hover{

    transform:translateY(-3px);

    box-shadow:0 0 25px #00e5ff;
}

/* ERROR */

.error{

    margin-top:20px;

    text-align:center;

    color:#ff4d4d;

    font-weight:bold;
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

    margin-bottom:12px;
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

<div class="edit-container">

    <h1 class="edit-title">
        Edit Blog
    </h1>

    <form method="POST">

        <div class="input-box">

            <input type="text"
                   name="title"
                   value="<?php echo $row['title']; ?>"
                   required>

        </div>

        <div class="input-box">

            <textarea name="content"
                      required><?php echo $row['content']; ?></textarea>

        </div>

        <button type="submit"
                name="update"
                class="update-btn">

             Update Blog

        </button>

    </form>

    <?php
    if(isset($error)){
        echo "<div class='error'>$error</div>";
    }
    ?>

</div>

<!-- SUCCESS POPUP -->

<div class="popup-overlay <?php if($success) echo 'active'; ?>">

    <div class="popup">

        <h1>Updated </h1>

        <p>Blog Updated Successfully</p>

        <button onclick="goManage()">
    Go To Manage
</button>

    </div>

</div>

<script>

function goManage(){

    window.location.href =
    "manage.php";
}

</script>

</body>
</html>