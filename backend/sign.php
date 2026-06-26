<?php

session_start();

include "connection.php";

if(isset($_POST['submit'])){

    $username = $_POST['name'];

    $email = $_POST['email'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // =========================
    // CHECK EMAIL ALREADY EXISTS


    $check_sql = "SELECT * FROM userdata WHERE user_email = ?";

    $check_stmt = mysqli_stmt_init($connection);

    if(mysqli_stmt_prepare($check_stmt, $check_sql)){

        mysqli_stmt_bind_param($check_stmt, "s", $email);

        mysqli_stmt_execute($check_stmt);

        $result = mysqli_stmt_get_result($check_stmt);

        // IF EMAIL EXISTS

        if(mysqli_num_rows($result) > 0){

            header("Location: /vitalness/index.html");

            exit();
        }else{

            // =========================
            // INSERT USER
            // =========================

            $sql = "INSERT INTO userdata(user_name, user_email, user_password)
                    VALUES(?, ?, ?)";

            $stmt = mysqli_stmt_init($connection);

            if(mysqli_stmt_prepare($stmt, $sql)){

                mysqli_stmt_bind_param($stmt, "sss",
                $username, $email, $password);

                mysqli_stmt_execute($stmt);

                // SESSION

                $_SESSION['kashish'] = $username;

                // REDIRECT

                header("Location: dashboard/dashboard.php?signup=success");

                exit();

            }
          
            
            else{

                echo "Insert Query Failed";
            }
        }

    }else{

        echo "Check Query Failed";
    }
}
?>