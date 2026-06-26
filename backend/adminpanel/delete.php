<?php

session_start();
include "../../connection.php";

if (!isset($_SESSION['admin'])) {
    header("Location: adminlogin.php");
    exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM blogs WHERE s_no = $id";

if($connection->query($sql)){

    header("Location: manage.php");
    exit();

}else{

    echo "Delete Failed";
}
?>