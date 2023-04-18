<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            text-align: center;
            background-color:#F0E9D2;
            font-family: sans-serif;
        }
        input[type=button]{
            background-color:black ;
            color:white ;
            padding: 10px;
            
            border-radius: 0 10px 0 10px;
        }
        </style>
</head>
<body>


<?php
//create array from $_GET[fruits] array
    $names=array();

    foreach($_GET['fruits'] as $fruit)
        $names[$fruit]=$fruit;
        $op=$_GET['select'];

    switch($op){
        case 'display':
        // Display array
            $count=count($names);
            echo "<em><strong>Your FRUITS array has $count fruits. They are:</strong</em><br><br>";

            foreach ($names as $fruit)
            echo "$fruit <br>";
        break;

        case 'sort':
        //sort array
            sort($names);
            echo "<br><br><em><strong>Your FRUITS array in
                    SORTED ORDER is:</strong</em><br><br>";
            foreach($names as $fruit)
            echo "$fruit<br> ";
        break;

        case 'duplicate':
        //remove duplicate elements

            array_unique($names);
            echo "<strong> unique elements of FRUITS array are:</strong</em><br><br>";
            foreach ($names as $fruit)
                echo "$fruit <br> " ;
        break;

        case 'last':
        //remove last element
            $last=array_pop($names);
            echo "<br> <br><em> <strong> After Removing the last
            element '$last' of FRUITS is:</strong></em><br><br>";
            foreach ($names as $fruit)
            echo "$fruit <br>";
        break;

        case 'rsort':
        //reverse sort
            rsort($names);
            echo "<br><br><em><strong>Your FRUITS array in REVERSE ORDER is:</strong></em> <br><br>";

            foreach ($names as $fruit)
             echo "$fruit  <br>" ;
        break;

        case 'search':
            $val=$_GET['key'];

            if(in_array(strtolower($val),array_map('strtolower',$names))==true)

                 echo "item found!!";
            else
                echo "item not found!!";
        break;
    }
?>


<br><br><br><input type=button name=click value="SELECT ANOTHER" onclick="parent.location='array.html'"><br><br>

</body>
</html>