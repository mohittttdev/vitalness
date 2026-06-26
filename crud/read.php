<?php
include('connection.php');

$sql = "SELECT * FROM userdata";

$stmt = mysqli_stmt_init($connection);

if(mysqli_stmt_prepare($stmt, $sql)){

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>User Dashboard</title>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    min-height:100vh;
    background:linear-gradient(135deg,#0f172a,#1e293b);
    padding:40px 20px;
}

/* MAIN BOX */

.dashboard{
    max-width:1200px;
    margin:auto;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(14px);
    border:1px solid rgba(255,255,255,0.1);
    border-radius:24px;
    padding:30px;
    box-shadow:0 10px 35px rgba(0,0,0,0.3);
    animation:fadeIn 0.8s ease;
}

/* TOP BAR */

.top-bar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:20px;
    margin-bottom:25px;
}

/* TITLE */

.title h2{
    color:white;
    font-size:34px;
}

.title p{
    color:#cbd5e1;
    margin-top:5px;
}

/* SEARCH */

.search-box{
    flex:1;
    max-width:320px;
}

.search-box input{
    width:100%;
    padding:14px 16px;
    border:none;
    outline:none;
    border-radius:12px;
    background:rgba(255,255,255,0.12);
    color:white;
    font-size:14px;
}

.search-box input::placeholder{
    color:#ddd;
}

/* DELETE ALL */

.delete-all-btn{
    border:none;
    padding:14px 20px;
    border-radius:12px;
    background:#ef4444;
    color:white;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

.delete-all-btn:hover{
    background:#dc2626;
    transform:translateY(-2px);
}

/* TABLE */

.table-box{
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
    overflow:hidden;
    border-radius:18px;
}

/* TABLE HEAD */

th{
    background:#111827;
    color:white;
    padding:18px;
    font-size:15px;
    text-align:center;
}

/* TABLE DATA */

td{
    background:rgba(255,255,255,0.06);
    color:white;
    padding:16px;
    text-align:center;
    border-bottom:1px solid rgba(255,255,255,0.08);
    transition:0.3s;
}

/* HOVER */

tr:hover td{
    background:rgba(255,255,255,0.12);
}

/* BUTTONS */

.action-btn{
    text-decoration:none;
    padding:10px 16px;
    border-radius:10px;
    color:white;
    font-size:13px;
    margin:4px;
    display:inline-block;
    transition:0.3s;
}

/* EDIT */

.edit-btn{
    background:#10b981;
}

.edit-btn:hover{
    background:#059669;
    transform:translateY(-2px);
}

/* DELETE */

.delete-btn{
    background:#ef4444;
}

.delete-btn:hover{
    background:#dc2626;
    transform:translateY(-2px);
}

/* NO DATA */

.no-data{
    padding:20px;
    color:#fca5a5;
    font-weight:500;
}

/* ANIMATION */

@keyframes fadeIn{

    from{
        opacity:0;
        transform:translateY(30px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* MOBILE */

@media(max-width:768px){

    .top-bar{
        flex-direction:column;
        align-items:flex-start;
    }

    .search-box{
        max-width:100%;
        width:100%;
    }

    .title h2{
        font-size:28px;
    }

    th,td{
        padding:12px;
        font-size:13px;
    }
}/* ACTION BUTTONS LINE */

.action-group{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:10px;
    flex-wrap:nowrap;
}

</style>

</head>

<body>

<div class="dashboard">

<div class="top-bar">

<div class="title">

<h2>User Dashboard</h2>
<p>Manage all registered users easily</p>

</div>

<div class="search-box">

<input type="text"
id="searchInput"
placeholder="Search users...">

</div>

<button class="delete-all-btn"
onclick="deleteAllData()">

Delete All Users

</button>

</div>


<div class="table-box">

<table id="userTable">

<tr>

<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Actions</th>

</tr>

<?php

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
?>

<tr>

<td><?php echo $row['user_name']; ?></td>

<td><?php echo $row['user_email']; ?></td>

<td><?php echo $row['user_password']; ?></td>

<td>

<div class="action-group">

<a class="action-btn edit-btn"
href="update.php?update=<?php echo $row['s_no']; ?>">

Edit

</a>

<a href="#"
class="action-btn delete-btn"
onclick="confirmDelete(<?php echo $row['s_no']; ?>)">

Delete

</a>

</div>

</td>
</tr>

<?php
    }

}else{

    echo "<tr>
    <td colspan='4'
    class='no-data'>
    No Data Found
    </td>
    </tr>";
}

mysqli_stmt_close($stmt);

?>

</table>

</div>

</div>


<script>

/* SEARCH */

document
.getElementById("searchInput")
.addEventListener("keyup", function(){

    let value = this.value.toLowerCase();

    let rows =
    document.querySelectorAll("#userTable tr");

    rows.forEach((row,index)=>{

        if(index === 0) return;

        let text =
        row.innerText.toLowerCase();

        row.style.display =
        text.includes(value)
        ? ""
        : "none";
    });
});


/* SINGLE DELETE */

function confirmDelete(id){

    let check = confirm(
        "Are you sure you want to delete this user?"
    );

    if(check){

        window.location.href =
        "delete.php?delete=" + id;
    }
}


/* DELETE ALL */

function deleteAllData(){

    let confirmDelete = confirm(
        "Are you sure you want to delete ALL users?"
    );

    if(confirmDelete){

        window.location.href =
        "delete_all.php";
    }
}

</script>

</body>
</html>