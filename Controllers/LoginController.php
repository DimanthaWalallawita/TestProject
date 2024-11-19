<?php
    include ('../Model/connection.php');

    if(isset($_POST['Login'])){
        $Email = mysqli_real_escape_string($connection, $_POST['Email']);
        $Password = mysqli_real_escape_string($connection, $_POST['Password']);

        $SQLCheck = "SELECT * FROM `users` WHERE `Email` = '".$Email."'";
        $Result = mysqli_query($connection, $SQLCheck);

        if(mysqli_num_rows($Result) > 0){
            $Row = mysqli_fetch_assoc($Result);

            if(password_verify($Password, $Row['Password']) == true){
                session_start();

                $_SESSION['ID'] = $Row['id'];
                header("Location: ../View/index.php");
            }

            else{
                echo "Invalid Password";
                exit();
            }
        }
        else{
            echo "Invalid User";
            exit();
        }
    }
    else{
        echo "Invalid request";
        exit();
    }
?>