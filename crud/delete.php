<?php

include 'connection.php';

if(isset($_GET['delete'])){

    $id = (int)$_GET['delete'];

    // SAFETY CHECK

    if($id > 0){

        $sql = "DELETE FROM userdata WHERE s_no = ?";

        $stmt = mysqli_stmt_init($connection);

        if(mysqli_stmt_prepare($stmt, $sql)){

            mysqli_stmt_bind_param($stmt, "i", $id);

            mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);

            header("Location: read.php");

            exit();

        }else{

            echo "Delete Query Failed";
        }

    }else{

        echo "Invalid ID";
    }
}
?>