<?php
$showAlert = "false";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    include '_dbconnect.php';

    $userEmail = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];

    $existSql = "SELECT * FROM `users` WHERE user_email= '$userEmail' OR `user_name` ='$username' ";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);

    if($numRows>0)
    {
        $showError = "User already exists";
    }
    else
    {
        if($pass==$cpass)
        {
            $hash = password_hash($pass, PASSWORD_DEFAULT);

            $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_dob`, `user_password`) VALUES ('$username', '$userEmail', '$dob', '$hash');";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                $showAlert = true;
                header("Location: /AahanLogin/Signup.php?signupsuccess=true");
                exit();
            }
        }
        else
        {
            $showError = "Password doesn't match";
        }
    }
    
    header("Location: /AahanLogin/Signup.php?signupsuccess=false&error=$showError");
}
?>