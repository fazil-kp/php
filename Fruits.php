<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
    <style>
         body{
            background-color: bisque;
            font-family: sans-serif;
        }
        h2{
            font-family: monospace;
        }


    </style>
</head>
<body>
    
</body>
</html>

<?php
if ($_POST) {
    $f = $_POST["fruits"];
    echo "<h2> You have selected : \t<bold> $f</bold></h2>";


    if($f=="Mango")
    {
        echo "Mango is rich in vitamins, minerals, and antioxidants, and it has been associated with many health benefits, including potential anticancer effects, as well as improved immunity and digestive and eye health. Best of all, it's tasty and easy to add to your diet as part of smoothies and many other dishes.";
    }
    else if($f=="Grape")
    {
        echo "Grapes are a good source of potassium, a mineral that helps balance fluids in your body. Potassium can help bring down high blood pressure and lower your risk of heart disease and stroke. Most people don't get enough of this nutrient, so eating grapes can help fill the gap.";
    }
    elseif($f=="Banana")
    {
        echo "They may boost your digestion and heart health thanks to their fiber and antioxidant contents. Plus, they may support weight loss because they're relatively low in calories, nutrient dense, and filling. Both ripe, yellow bananas and unripe, green bananas can satisfy your sweet tooth and help keep you healthy.";
    }
    else{
        echo "Fruits are an excellent source of essential vitamins and minerals, and they are high in fiber. Fruits also provide a wide range of health-boosting antioxidants, including flavonoids. Eating a diet high in fruits and vegetables can reduce a person's risk of developing heart disease, cancer, inflammation, and diabetes.";
    }
}
?>