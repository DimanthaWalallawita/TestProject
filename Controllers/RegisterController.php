<?php
    include ('../Model/connection.php');

    if(isset($_POST['register'])){
        $FirstName = mysqli_real_escape_string($connection, $_POST['FirstName']);
        $LastName = mysqli_real_escape_string($connection, $_POST['LastName']);
        $Email = mysqli_real_escape_string($connection, $_POST['Email']);
        $Password = mysqli_real_escape_string($connection, $_POST['Password']);
        $ConfirmPassword = mysqli_real_escape_string($connection, $_POST['ConfirmPassword']);
        
        $UploadDirectory = "../View/Assets/Uploads/";
        $File = $UploadDirectory.basename($_FILES['profile']['name']);
    
        if(move_uploaded_file($_FILES['profile']['tmp_name'], $File)){
            $ProfilePic = $File;
        } else{
            die("There was an error in uploading");
        }
    
        $hashPassword = password_hash($Password, PASSWORD_DEFAULT);
    
        //Check Confirm Password
        if($Password != $ConfirmPassword){
            die("Confirm Password is not matched");
        }
        else{
            //Check Email already exists or not
            $SQLCheck = "SELECT * FROM `users` WHERE `Email` = '$Email'";
            $Result = mysqli_query($connection, $SQLCheck);
    
            if(mysqli_num_rows($Result) > 0){
                die("Email is already used");
            } 
            
            else{
                //Insert data into database
                $SQL = "INSERT INTO `users`(`FirstName`, `LastName`, `Email`, `Password`, `ProfileImage`) VALUES ('".$FirstName."','".$LastName."','".$Email."','".$hashPassword."','".$ProfilePic."')";
    
                $Result = mysqli_query($connection, $SQL);
                if($Result){
                    echo "Registration Successful";
                    header("Location: ../View/Login.php");
                }
                else{
                    echo "Registration Failure";
                }
            }
        }
    } else{
        header("Location:../View/register.php");
    }
?>