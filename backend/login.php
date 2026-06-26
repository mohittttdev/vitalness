<?php
session_start();
include "connection.php";

if(isset($_POST['submit'])){

    $email = $_POST['emails'];
    $password = $_POST['passwords'];

    $sql = "SELECT * FROM userdata WHERE user_email = ?";

    $stmt = mysqli_stmt_init($connection);

    if(mysqli_stmt_prepare($stmt, $sql)){

        mysqli_stmt_bind_param($stmt, "s", $email);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) > 0){

            $user = mysqli_fetch_assoc($result);

            if(password_verify($password, $user['user_password'])){

                $_SESSION['kashish'] = $user['user_name'];
header("Location: dashboard/dashboard.php?login=success");
exit();

            } else {

                echo "Incorrect Password";

            }

        } else {

            echo "Email Does Not Exist";

        }

    } else {

        echo "Query Failed";

    }
}
?>