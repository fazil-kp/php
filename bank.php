<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <style>
        body{
            text-align: center;
            background-color:#645CBB;
            font-family: sans-serif;
            color: aliceblue;
        }
        form{
            background-color: #A084DC;
            margin-left: 19em;
            margin-top: 4em;
            padding: 1em;
            width: 50%;
            border-radius: 10px;
        }
    
        input{
            padding-left: 15px;
            padding-top: 5px;
            padding-bottom: 5px;
            padding: 10px;
            border: 0px solid rgb(0, 0, 0);
            outline: none;
            font-size: larger;
        }
        input[type=submit]{
            background-color:black ;
            color:white ;
        }
        input[type=submit]:hover{
            scale: 1.1;
            border-radius: 10px 0 10px 0;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        h1,h2{
            color: coral;
        }
        b{
            color: burlywood;
        }
        </style>
</head>
<body>
    <form action="" method="POST">
        <div>
        <h1>Bank Details</h1>
            <input type="number" placeholder="Account Number" name="acc_no"/>
            <br><br>
            <input type="number" placeholder="Amount (in Rs/-)" name="amnt"/><br><br>
            <input type="radio" value="deposit" name="type" id="deposit"/>
            <label for="deposit">Deposit</label> 
            
            <input type="radio" value="withdrawal" name="type" id="withdrawal"/>
            <label for="withdrawal">Withdrawal</label> &nbsp;&nbsp;
            <br><br>
            <input type="submit" value="Submit" name="submit"/>

        </div>
    </form>
</body>
</html>

<?php
if($_POST)
{
    $acc = $_POST['acc_no'];
    $amnt = $_POST['amnt'];
    $type = $_POST['type'];

    $con = pg_connect("host=localhost dbname=postgres user=postgres password=123");
    if($con)
    {
        $qry = "SELECT * FROM bank WHERE id =$acc";
        $result = pg_query($con, $qry);
       
        
        if($result)
        { 
            $answr = pg_fetch_row($result);
            $balance = $answr[2];

            echo "<h2>Account Details Before transaction</h2><br>";
            echo "Account No:$answr[0]<br>Customer Name:$answr[1]<br>Bank Balance:$answr[2]<br>";

            if($type == "deposit")
            {
                $amt =(int) $amnt + $balance;
            }
           else{
                $amt = $balance - $amnt;
           }
            $query = "UPDATE bank SET balance = $amt WHERE id = $acc";
            $res = pg_query($con, $query);
            $row = pg_query($con, $qry);
            echo "<h2>Account Details After transaction</h2><br>";

            while($row=pg_fetch_row($row)){
                echo "<i>Account No</i>:$row[0]<br>Customer<i> Name:</i><b>$row[1]</b><br><i>Bank Balance</i>:<b>$row[2]</b><br>";
            }
        }
    }
    pg_close($con);
}


?>