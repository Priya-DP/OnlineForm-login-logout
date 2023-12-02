<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validate</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Alata&family=Crimson+Text&family=Hedvig+Letters+Sans&family=Montserrat:wght@300;600&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Alata', sans-serif;
        }

        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right,rgb(61, 61, 243),rgb(243, 22, 243));
        }
        form
        {
            width: 400px;
            height: 500px;
            display: flex;
            flex-direction: column;
            background-color: rgba(255,255,255,0.06);
            box-shadow: 0px 8px 32px 0 rgba(31,38,135,0.37);
            border-radius: 25px;
            border-left: 1px solid rgba(255,255,255,0.3);
            border-top: 1px solid rgba(255,255,255,0.3);
        }
        form:before{
            content: " ";
            position: absolute;
            width: 180px;
            height: 180px;
            background-color: magenta;
            right: 26%;
            top:410px;
           border-radius: 50%;
           z-index: -1;
           opacity: 0.8;  
           
        }
        form:after{
            content: " ";
            position: absolute;
            width: 150px;
            height: 150px;
            background-color: magenta;
           border-radius: 50%;
           top: 2%;
           left: 28%;
           z-index: -1;
           opacity: 0.8;
        }

        h1{
            font-size: 30px;
            color: white;
            text-align: center;
            opacity: 0.7;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            letter-spacing: 2px;
            margin-top:5px;
        }
        label{
            font-size: 13px;
            color: white;
            margin-left: 10%;
            opacity: 0.8;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            letter-spacing: 2px;
        }
        input{
            width: 80%; 
            border: none;
            outline: none; 
            background-color: transparent; 
            color: white;
            border-bottom:1px solid white;
            opacity: 0.5;
            font-size: 15px;
            margin:10px auto;
        }
        button{
            width: 50%;
            margin: 2px auto;
            font-size: 18px;
            background-color: rgba(255,255,255,0.07);
            color: white;
            border: none;
            outline: none;
            opacity: 0.8;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            letter-spacing: 2px;
            box-shadow: 0px 8px 32px 0 rgba(31,38,135,0.4);
            border-left: 1px solid rgba(255,255,255,0.3);
            border-top: 1px solid rgba(255,255,255,0.3);
            padding-top:8px;
            padding-bottom:8px;
            font-family: 'Alata', sans-serif;
            border-radius: 20px;
        }
        a{
            font-size: 15px;
            color: white;
            text-align: center;
            text-decoration: none;
            font-family: 'Alata', sans-serif;
            opacity: 0.8;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        p{
            font-size: 15px;
            color: white;
            text-align: center;
            opacity: 0.7;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <form action="registration.php" method="post">
        <h1>Create a new account</h1> <br>

        <label>Username</label>
        <input type="text" name="username" required> <br>

        <label>Email id</label>
        <input type="email" name="email" required> <br>

        <label>Password</label>
        <input type="password"  name="password" required> <br>

        <label>Mobile No.</label>
        <input type="tel"  name="mobileno" required> <br> 

        <button type="submit" name="login">Sign Up</button> <br>

        <p>Already have an account..? <a href="login.php">  Login</a> </p>
    </form>
</body>
</html>