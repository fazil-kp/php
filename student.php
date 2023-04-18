<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body{
            text-align: center;
            background-color:#9D3C72;
            display: flex;
            font-family: sans-serif;
            align-items: center;
            justify-content: center;
        }
        form{
            background-color: #7B2869;
            margin: 14em;
            padding: 2em;
            border-radius: 10px;
        }
        #login{
            font-size: 2em;
            color: antiquewhite;
        }
    
        input{
            padding-left: 15px;
            padding-top: 5px;
            padding-bottom: 5px;
            padding: 10px;
            border: 0px solid rgb(0, 0, 0);
            outline: none;
            border-radius: 15px 0 15px 0;
            font-size: larger;
        }
        input[type=submit]{
            background-color:black ;
            color:white ;
            border-radius: 0 10px 0 10px;
        }
        input[type=submit]:hover{
            scale: 1.1;
            border-radius: 10px 0 10px 0;
        }
        .user{
            color: white;
            font-family: sans-serif;
            background-color: #495579;
        }
    </style>
</head>
<body>
    <form method="POST" action="student_link.php">
        <div>
            <span id="login">Marklist</span><br>
            <br>
            <input type="text" name="reg" placeholder="Register Number" ><br><br>
            <br><br><br>
            <input type="submit" value="Browse" name="browse" />
            <br><br>
    </form>

</body>
</html>


