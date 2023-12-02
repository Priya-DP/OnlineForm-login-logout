<?php
    include 'database/config.php';
    session_start();

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = ($_POST['username']);
        $password = ($_POST['password']);
    }
    if(empty($username))
    {
        echo "<script>alert('Enter a username and login'); window.location.href='login.php';</script>";
    exit();
    }
    else if(empty($password))
    {
        echo "<script>alert('Enter a password and login'); window.location.href='login.php';</script>";
    exit();
    }
    else{
        $sql = " SELECT * FROM users WHERE username='$username' AND password='$password' ";
        $result = mysqli_query($mysqli,$sql);

        if(mysqli_num_rows( $result))
        {
            $row=mysqli_fetch_assoc($result);
            if($row['username']===$username && $row['password']===$password)
            {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location:homepage.php");
                exit();
            }
        }
        else{
            header("Location:login.php?error=The username & password you entered isn't connected to an account. Find your account and log in.");
            exit();
        }
    }
?>