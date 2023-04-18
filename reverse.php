<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse of a String</title>
    <style>
        body{
            background-color: #B08BBB;
            color: white;
            font-family: sans-serif;
            font-size: 1.2em;
        }
        h1{
            font-size: 3em;
            font-family: monospace;
            text-align: center;
        }
        input{
            padding-left: 15px;
            padding-top: 5px;
            padding-bottom: 5px;
            padding: 10px;
            border: 0px solid rgb(0, 0, 0);
            outline: none;
            border-radius: 5px;
            font-size: larger;
        }
        input[type=submit]{
            background-color: black;
            color: white;
        }
        span{
            color: #58287F;
            font-size: 2.5em;
        }
        </style>
</head>
<body>
    <h1>Reverse of a string</h1>
    <br><br>
    <div>
    <form action="" method="GET">
    Enter the String : <input type="text" name="string" >
    <input type="submit" onclick="reverse()">
    </form>
    </div><br><br><br>
</body>
</html>

<?php 
    if($_GET)
    {
        echo "<h1>Reverse of a String</h1>";
        echo ("<span>".strrev($_GET["string"])."</span>");
    }

?>