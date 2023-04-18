<html lang="en">
<head> <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account Details</title></head><body>
<form action="" method="POST">
<div>
<h1>Bank Details</h1> <input type="number" placeholder="Account Number" name="acc_no"/> <br><br>
<input type="number" placeholder="Amount(in Rs/-)" name="amnt"/> <br><br>
<input type="radio" value="deposit" name="type" id="deposit"/>
<label for="deposit">Deposit</label>
<input type="radio" value="withdrawal" name="type" id="withdrawal"/>
<label
for="withdrawal">Withdrawal</label>&nbsp;&n
bsp; <br><br>
<input type="submit" value="Submit" name="submit"/>
</div> </form></body></html>
<?php if($_POST){
$acc=$_POST['acc-no'];
$amnt=$_POST['amnt'];
$type=$_POST['type'];
$con=pg_connect("host=localhost
dbname=postgres user=postgres password=123");
if($con)
{
$qry="SELECT * from bank WHERE
acc_no=$acc",$result=pg_query($con,$qry);
if($result)
{
$answr=pg_fetch_row($result);
$balance=$answr[2]; echo "<h2>Account details before
transaction</h2><br>"; echo "Account No: $answr[0]<br>Customer Name: $answr[1]<br>Bank Balance: $answr[2]<br>";
if($type = = "deposit")
{
$amt=(int) $amt + $balance;
$query="UPDATE bank SET
balance=$amt WHERE acc_no=$acc";
$res=pg_query($con,$query);
$row=pg_query($con,$qry); echo "<h2>Account details after
transaction</h2><br>"; while ($row=pg_fetch_row($row)){ echo "<i>Account No</i>: $row[0]<br>Customer<i> Name:</i>:<b>$row[1]</b><br><i>Bank
Balance </i>:<b>$row[2]</b><br>”"
} } else {
if($balance <$amnt){ echo "<br> \n Sorry,You have no
sufficient balance";
} else {
$amt=$balance - $amnt;
$query= "UPDATE bank SET balance = $amt WHERE acc_no=$acc";
$res= pg_query($con,$query);
$row= pg_query($con,$qry); echo "<h2>Account details after
transaction</h2><br>"; while ($row=pg_fetch_row($row)){ echo "<i>Account No</i>: $row[0]<br>Customer<i> Name:</i>:<b>$row[1]</b><br><i>BankBalance </i>:<b>$row[2]</b><br>”;
} }
} } else{ echo "Error: " .pg_last_error();
} }
pg_close ($con); } ?>