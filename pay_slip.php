<html>
<head><title>employee salary</title>
<style>
    body{
        background-color: #F7F5EB;
    }
    input{
            background-color:black ;
            color:white ;
            border-radius: 0 10px 0 10px;
    }
    </style>
</head>
<body>
    <?php
        $na=$_POST["nam"];
        $des=$_POST["desig"];
        $basic=$_POST["sal"];
        switch($des)
        {
            case 'manager':
                    $ca=1000;
                    $ea=500;
                    break;
            case 'supervisor':
                    $ca=750;
                    $ea=200;
                    break ;
            case 'clerk':
                $ca=50;
                $ea=100;
                break;
            case 'peon':
                $ca=250;
                $ea=0;
                break;
        }
        $hra=0.25*$basic;
        $gross=$basic+$ca+$ea+$hra;
        if($gross>5000)
            $it=$gross*0.08;
        elseif($gross>4000)
            $it=$gross*0.05;
        elseif($gross>2500)
            $it=$gross*0.03;
        else
            $it=0;

        $net=$gross-$it;
        echo"<center>
        <table border=1 rules=all width=50%>
        <tr>
            <td colspan=2 align=center><strong>PAY SLIP</strong></td>
        </tr>
        <tr>
            <td width=50%>Employee Name</td>
            <td width=50%>$na</td>
        </tr>
        <tr>
            <td width=50%>Designation</td>
            <td width=50%> $des</td>
        </tr>
        <tr bgcolor=eeeee>
            <td>Salary Component</td>
            <td>Amount(in Rs)</td>
        <tr>
            <td>Basic Salary</td>  
            <td>$basic</td>
        </tr>
        <tr>
            <td>Conveyence Allowance</td>  
            <td>$ca</td>
        </tr>
        <tr>
            <td>Extra Allowance</td>  
            <td>$ea</td>
        </tr>
        <tr>
            <td>House Rent Allowance</td>  
            <td>$hra</td>
        </tr>
        <tr bgcolor=eeeeee>
            <td> Gross Salary</td>
            <td>$gross</td>
        </tr>
        <tr bgcolor=eeeeee>
            <td> Income Tax Deduction</td>
            <td>$it</td>
        </tr>
        <tr bgcolor=eeeeee>
            <td ><strong> Net Salary</strong></td>
            <td><h3>$net</h3></td>
        </tr>
        </table></center>";
    ?><br><br>
    <center><input type=button name=click value="Prepare another payslip" onclick="parent.location='paySlip.php'"></center>
</body></html>