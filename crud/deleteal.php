<?php

include 'connection.php';

$sql = "DELETE FROM userdata";

$result = mysqli_query($connection, $sql);

if($result){

    header("Location: read.php");
    exit();

}else{

    echo "Failed To Delete Data";
}

?>