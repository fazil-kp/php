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
            background-color:#F0E9D2;
            display: flex;
            font-family: sans-serif;
            align-items: center;
            justify-content: center;
        }
        form{
            background-color: #495579;
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
    <form method="POST" action="">
        <div>
            <span id="login">Login</span><br>
            <br>
            <input type="text" name="name" placeholder="Username" ><br><br>
            <input type= "password" name="pswrd" placeholder="Password"/>
            <br><br><br>
            <input type="submit" value="Login" name="login" />
            <br><br>
            <input type="submit" value="Create Account" class="user" name="new"></div>
    </form>

        </div>
</body>
</html>

<?php
    if($_POST)
    {
        $con = pg_connect("host=localhost dbname=postgres user=postgres password=123");
        if($con)
        {
            if(isset($_POST['new']))
            {
                    $query = "INSERT INTO login VALUES('$_POST[name]','$_POST[pswrd]')";
                    $result = pg_query($con,$query);
                if ($result) {
                    echo '<script>alert("Logined Successfully")</script>';
                    
                }
                else
                {
                    echo ('<script>alert("Create new account")</script>');
                }
            }
            if(isset($_POST['login']))
            {
                $flag = 0;
                $qry = "SELECT * FROM login";
                $res = pg_query($con,$qry);
                while($row = pg_fetch_row($res))
                {
                    if(($row[0]==$_POST['name']) && ($row[1]==$_POST['pswrd']))
                    {
                        $flag = 1;
                    }
                    
                }
                if($flag)
                {
                    echo '<script>alert("Logined Successfully")</script>';
                }
                else
                {
                    echo '<script>alert("Account not found\nPlease, create new account")</script>';
                }
            }
            pg_close($con);
        }
        else
        {
        echo '<script>alert("Try again Later")</script>';
        }
    }
?>