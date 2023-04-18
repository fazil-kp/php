<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect number</title>
    <style>
        body{
            background-color: #FEA1BF;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            overflow: hidden;
            
        }
        h1{
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
            background-color:black ;
            color:white ;
        }
      
        h1
        {
            color: rgb(98, 110, 68);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode',  Verdana, sans-serif;
            text-align: center;
        }
        div{
            font-size: larger;
            color: #144272;
        }
    </style>
</head>
<body>
    <h1>Perfect Number</h1><br><br><br>
    <form action="" method="GET">
        Enter the number : &nbsp;<input type="text" name="num"/>
    &nbsp;
    <input type="submit" value="Find" />
    </form>
</body>
</html>

<?php
if($_GET)
{
    echo '<h1>Perfect Number </h1> ';
        $a = $_GET["num"];
        $s=0;
        if($a==0 || is_nan($a))
        {
        echo ('<script>alert("Invalid input");</script>');
        }
    else{
        $s = 0;
        $n = (int) $a;
        for($i=1;$i<$n;$i++)
        {
            if(($n % $i)==0)
            {
                $s=$s+$i;
            }
        }
        if($s==$n)
        {
            echo("<div>".$n . " is a Perfect</div>");
        }
        else if($s>$n)
        {
            echo("<div>".$n." is a Abundent</div>");
        }
        else 
        {
            echo("<div>".$n . " is a Deficient</div>" );
                
        }
    }
}
?>
