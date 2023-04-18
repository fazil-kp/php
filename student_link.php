<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
            text-align: center;
            background-color:#A0C3D2;
            font-family: sans-serif;+
            font-size: larger;            
        }

        h1{
            color: #4E6C50;
        }
        span{
            color: #00337C;
            font-family: sans-serif;
            font-weight: bolder;
        }
    </style>
<body>
    
</body>
</html>

<?php
    if($_POST)
    {
        $con = pg_connect("host=localhost dbname=postgres user=postgres password=123");
        if($con)
        {
            if(isset($_POST['browse']))
            {
                    $reg = $_POST['reg'];
                    $query = "SELECT * FROM student WHERE roll_no = $reg";
                    $result = pg_query($con,$query);
                if ($result) {
                    echo '<br><br><h1>Markilist</h1><br><br>';
                    
                $answr = pg_fetch_row($result);

                 echo ('<span>register no : '.$answr[0].'<br>name : '.$answr[1].'<br>Maths : '.$answr[2].'<br>Statistics : '.$answr[3].'<br>English : '.$answr[4].'<br>Grade : '.$answr[5].'</span>');

                }
                else
                {
                    echo ('<script>alert("Invalid Registratio Number")</script>');
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