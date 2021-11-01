<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <style>
    table,th,td {
        width:500px;
        border: 2px solid red;
        border-collapse: collapse;
        text-align:center;
    }
    .display
    {
        
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }

#ih3{
    text-align:center;  

    width:100%;
    height:50px;
    padding:10px;
}
    #ida{
   font-weight:bold;
    color:white;
    background-color:#333;
    padding:10px;
    text-decoration:none;
    height:35px;
    width:150px;
    font-size:20px;
    text-align:center;
    }
    </style>
</head>
<body>
<?php
 session_start();
 if(isset($_SESSION['n']))
 {
     $x=0;
     $d=$_GET['d'];
     $add=$_GET['a'];
     require 'vendor/autoload.php';
        $client= new MongoDB\Client;#("mongodb://127.0.0.1:27017");
        $empdb=$client->mongoemp;  
        if($empdb){
        $tb1=$empdb->emp_details;
        if($d!=''&& $add=='')
        {
            $x=1;
            $acc1=$tb1 -> find(['dept_name'=>$d]);
            echo "<table>
            <tr>
            <th>_id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Department</th>
            <th>Role</th>
            <th>Salary</th>
            </tr>";
            foreach($acc1 as $a)
            {
                echo "<tr>";
                echo "<td>" . $a['_id'] . "</td>";
                echo "<td>" . $a['name'] . "</td>";
                echo "<td>" . $a['phone'] . "</td>";
                echo "<td>" . $a['Address'] . "</td>";
                echo "<td>" . $a['dept_name'] . "</td>";
                echo "<td>" . $a['role'] . "</td>";
                echo "<td>" . $a['Salary'] . "</td>";
                echo "</tr>";
            }
                echo "</table>";
            
        } 
        if($d==''&& $add!='')
        {
            $x=1;
            $acc1=$tb1 -> find(['Address'=>$add]);
            echo "<table>
            <tr>
            <th>_id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Department</th>
            <th>Role</th>
            <th>Salary</th>
            </tr>";
            foreach($acc1 as $a)
            {
                echo "<tr>";
                echo "<td>" . $a['_id'] . "</td>";
                echo "<td>" . $a['name'] . "</td>";
                echo "<td>" . $a['phone'] . "</td>";
                echo "<td>" . $a['Address'] . "</td>";
                echo "<td>" . $a['dept_name'] . "</td>";
                echo "<td>" . $a['role'] . "</td>";
                echo "<td>" . $a['Salary'] . "</td>";
                echo "</tr>";
            }
                echo "</table>";
            
        }     
    
        if($d!=''&& $add!='')
        {
            $x=1;
            $acc1=$tb1 -> find(['Address'=>$add,'dept_name'=>$d]);
            echo "<table>
            <tr>
            <th>_id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Department</th>
            <th>Role</th>
            <th>Salary</th>
            </tr>";
            foreach($acc1 as $a)
            {
                echo "<tr>";
                echo "<td>" . $a['_id'] . "</td>";
                echo "<td>" . $a['name'] . "</td>";
                echo "<td>" . $a['phone'] . "</td>";
                echo "<td>" . $a['Address'] . "</td>";
                echo "<td>" . $a['dept_name'] . "</td>";
                echo "<td>" . $a['role'] . "</td>";
                echo "<td>" . $a['Salary'] . "</td>";
                echo "</tr>";
            }
                echo "</table>";
            
        }   


if($x==0){
    echo "<h3>No result found</h3>";
}

}
}
 else{
     echo "<div class='display'>";
     echo "<h3 id='ih3'>You are logged out click login to continue </h3>";
     echo '<a href="login.php" id="ida">Login</a>';
     echo'<br>';
     echo "</div>";
 }
?>
    
</body>
</html>