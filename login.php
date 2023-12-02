<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validate</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alata&family=Crimson+Text&family=Hedvig+Letters+Sans&family=Montserrat:wght@300;600&display=swap');

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
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

        form{
            width:300px;
            height:300px;
            display:flex;
            flex-direction:column;
            background-color: rgba(255,255,255,0.06);
            box-shadow: 0px 8px 32px 0 rgba(31,38,135,0.37);
            border-radius: 25px;
            border-left: 1px solid rgba(255,255,255,0.3);
            border-top: 1px solid rgba(255,255,255,0.3);

        }

        
        form:before{
            content: " ";
            position: absolute;
            width: 150px;
            height: 140px;
            background-color: magenta;
            right: 31%;
            bottom:95px;
           border-radius: 50%;
           z-index: -1;
           opacity: 0.8;  
           
        }
        form:after{
            content: " ";
            position: absolute;
            width: 100px;
            height: 100px;
            background-color: magenta;
            border-radius: 50%;
            top: 18%;
            left: 35%;
           z-index: -1;
           opacity: 0.8;
        }


        h1{
            font-size: 30px;
            color: white;
            text-align: center;
            opacity: 0.7;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            letter-spacing: 3px;
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
            font-size: 20px;
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
            font-size:18px;
        }
    </style>

        
     
</head>
<body>


<br><br>
<form action="loginregistration.php" method="post">

<?php

if(isset($_GET['error']))
{
    echo $_GET['error'];
}

?>
<br>

<h1> LOGIN </h1> <br>
    <label for="Username">Username</label>
    <input type="text" name="username"> <br>

    <label for="Password">Password</label>
    <input type="password" name="password"> <br>

    <button type="submit" name="signin"> Sign In </button>

</form>
   
</body>
</html>