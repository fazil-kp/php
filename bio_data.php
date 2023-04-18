<html>
<head>
    <title>Bio-Data of a person</title>
    <style>
        body{
            background-color: #628E90;
            color: white;
            font-family: sans-serif;
            font-size: 1.2em;
        }
        h1{
            font-size: 3em;
            font-family: monospace;
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
            background-color: black;
            color: white;
        }
        input[type=submit]:hover{
            scale: 1.2;
        }
        div{
            width: 30vw;
            padding-left: 40%;
        }
    </style>
</head>
<body>
    <form action="bio_data_values.php" method="POST">
        <H1>Biodata</h1>

        <pre>
Name:                      <input type=text name="name1"><br><br>
Address:                   <textarea name=address> </textarea><br><br>
Age:                       <input type=text name=age><br><br>
Phone:                     <input type=text name=phone><br><br>
Email:                     <input type=text name=email><br><br>
Educational Qualification: <input type=text name=qualification><br><br><br><br>
            <div>
                <input type=submit value=Display><br><br>
            </div>
            
        </pre>
    </form>
</body>

</html>
