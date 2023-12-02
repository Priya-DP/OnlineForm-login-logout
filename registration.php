<?php
include 'database/config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobileno = $_POST['mobileno'];

    $result = mysqli_query($mysqli, "INSERT INTO users VALUES ('','$username','$email','$password','$mobileno')");

    if ($result) {
        echo "<script>alert('Registered Successfully, Thank You');</script>";
    } else {
        echo "<script>alert('Something wrong, please check your data');</script>";
    }
}
?>
