<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Slip of an employee</title>


    <style>
        body{
            text-align: center;
            background-color:#FAD3E7;
            display: flex;
            font-family: sans-serif;
            align-items: center;
            justify-content: center;
        }
        form{
            background-color: #0081B4;
            margin: 14em;
            padding: 2em;
            border-radius: 10px;
        }
        h1{
            font-size: 2em;
            color: antiquewhite;
        }
        tr{
            padding: 20px;
            
        }
        td{
            color: aliceblue;
            font-size: larger;
            padding: 10px;
        }
        select{
            border-radius: 5px;
            background-color: white;
            border: none;
            padding:10px;
            font-size: larger;
            margin: 0;
            width: 100%;
            font-family: inherit;
            font-size: inherit;
            cursor: inherit;
            line-height: inherit;
        }
        .sub{
           padding-left: 40%;
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
            border-radius: 0 10px 0 10px;
        }
        input[type=submit]:hover{
            scale: 1.1;
            border-radius: 10px 0 10px 0;
        }
    </style>


</head>
<body>

    <form  action="pay_slip.php"  method="post" >
        <h1> Employee Details</h1>
        <br><br><br>
    <table >
        <tr><td> Employee Name</td>
            <td> <input type = "text" name="nam"><td>
        </tr>

        <tr><td> Employee Designation</td>
            <td> <select name="desig">
                    <option selected value="manager">Manager</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="clerk">Clerk</option>
                    <option value="peon">Peon</option>  </select>
            </td>
        </tr>

        <tr><td> Basic Salary</td>
            <td><input type="text" name="sal"></td>
        </tr>
        
        <tr class="sub">
            <td colspan="4" align="center"> <input type = "submit"  value="SUBMIT"  ></td>
        </tr>
    </table>
</form>
</body>
</html>

