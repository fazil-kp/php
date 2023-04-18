<html>
<style>
    body{
            text-align: center;
            background-color:#00337C;
            color: aliceblue;
            font-family: sans-serif;+
            font-size: larger;            
        }

        h2{
            color: #9DF1DF;
        }
        
    </style>
<body>
    <h2> Last visited time on the web page</h2>
    <?php
    $intm = 60 * 60 * 24 * 60 + time();
    setcookie('lastVisit', date("h:i:s - d/m/y"), $intm);
    if (isset($_COOKIE['lastVisit'])) {
        $visit = $_COOKIE['lastVisit'];
        echo "Your last visit was - " . $visit;
    } else
        echo "You have not visited this website before!";
    ?>
</body>

</html>