<?php

session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username']))
{

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <center> 
        <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
    </center>

    <div style="text-align:right">
    <a href="logout.php"> Log out</a>
</div>
</body>
</html>