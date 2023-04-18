<!DOCTYPE html>
<html>
    <style>
        body{
            text-align: center;
            background-color:#F0E9D2;
            font-family: sans-serif;
            font-size: x-large;
        }
        input{
            background-color:black ;
            color:white ;
            padding: 10px;
        }
        span{
            color: red;
            font-size: x-large;
            font-family: monospace;
        }

        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }
        .custom-file-input::before {
            content: 'Select a files';
            display: inline-block;
            background: linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }
        /* .custom-file-input:hover::before {
            border-color: black;
        }
        .custom-file-input:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        } */
        </style>
<body>

<form action="" method="post" enctype="multipart/form-data">
  Select a File :
  <input type="file" name="image" class="custom-file-input"/>&nbsp;&nbsp;
  <input type="submit" />
</form>

</body>
</html>

<?php 
if(isset($_FILES['image']))
{
    echo "<br><br>File Name :" . $_FILES['image']['name'] . "<br>";
    echo "Size :" . $_FILES['image']['size'] . "bytes <br>";
    echo "File Type :" . $_FILES['image']['type'] . "<br><br><br><br>";
    echo "<span>Success Uploaded...</span>";
}
?>