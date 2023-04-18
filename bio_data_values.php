<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio Data U Entered</title>
    <style>
    body{
            background-color: #628E90;
            color: white;
            font-family: sans-serif;
            font-size: 1.5em;
        }
        h1{
            font-size: 3em;
            font-family: monospace;
            text-align: center;
            color: #FF8E9E;
        }
        span{
            color: #F3CCFF;
        }
    </style>
</head>
<body>
    
</body>
</html>



<?php
if ($_POST) {
    echo "<h1>Biodata</h1>";
    echo "Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span>" . $_POST["name1"] . "</span><br>";
    echo "Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<span>" . $_POST["address"] . 
    "</span><br>";
    echo "Age &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span>" . $_POST["age"] . "</span><br>";
    echo "Mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span>" . $_POST["phone"] . "</span><br>";
    echo "Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span>" . $_POST["email"] . "</span><br>";
    echo "Qualification : <span>" . $_POST["qualification"] . "</span><br>";
}
?>