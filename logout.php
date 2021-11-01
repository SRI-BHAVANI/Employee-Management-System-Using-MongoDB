<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        .display
    {
        color:white;
        width:100%;
        height:40px;
        padding:10px;
       display:flex;
       justify-content:center;
       align-items:center;
        
    }
    </style>
</head>
<body style="background-color:#333;">
<?php
session_start();
session_unset();
session_destroy();
echo "<div class='display'>";
echo "<h3>Thank you.You have successfully logged out :)<h3>";
echo "</div>";
?>
</body>
</html>