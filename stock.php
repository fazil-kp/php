<html>
<head><title >Stock Details</title></head>
<style>
     body{
            text-align: center;
            background-color:#227C70;
            font-family: sans-serif;
            color: aliceblue;
        }
        form,.table{
            background-color: #301E67;
            margin: 14em;
            padding: 2em;
            border-radius: 10px;
        }
        .table{
            width: 75vw;
        }
        h1,h2{
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
            font-size: larger;
            margin-top: 15px;
        }
        input[type=submit]{
            background-color:#227C70 ;
            color:white ;
            border-radius: 0 10px 0 10px;
        }
        input[type=submit]:hover{
            scale: 1.1;
            border-radius: 10px 0 10px 0;
        }
        td,th{
            padding: 15px;;
        }
        th{
            color: antiquewhite;
        }
    
    </style>
<body>
    <form  action=""  method="post" >
        <center> <h1> Stock  Details</h1></center>
        <br><br><br>
        <table align = "center">
            <tr>
                <td> </td>
                <td> <input type = "text" name="item_code" placeholder="Item Code"><td>
            </tr>
            <tr>
                <td> </td>
                <td> <input type = "text" name="item_name" placeholder="Item Name"></td>
            </tr>
            <tr>
                <td> </td>
                <td> <input type = "text" name="price" placeholder="Price"></td>
            </tr>
            <tr align = "center">
                <td colspan="3" > <input type = "submit"  value="SUBMIT" ></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if ($_POST) {
    $code = $_POST['item_code'];
    $name = $_POST['item_name'];
    $price = $_POST['price'];

    $con = pg_connect("host=localhost dbname=postgres user=postgres password=123") or die("cannot connect");
    $sql = "INSERT INTO stock VALUES ('$code','$name','$price')";
    $retval = pg_query($con, $sql);
    if ($retval) {
        echo "New record created successfully";
    } else {
        echo "Cannot insert  " . pg_last_error();
        exit(0);
    }
    $sql = "SELECT * from stock";
    $result = pg_query($con, $sql);
    if (!$result) {
        echo 'Could not run query: ' . pg_last_error();
    }
    echo "<h2>INVENTORY DETAILS</h2>";
    echo "<br>";
    echo "<table border=1 rules=all class=table align=center>
                <tr>
                    <th> Item Code</th>
                    <th>Item Name</th>
                    <th>Unit Price</th>
                </tr>";
    while ($row = pg_fetch_row($result)) {
        echo "<tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
            </tr>";
    }
}
 ?>