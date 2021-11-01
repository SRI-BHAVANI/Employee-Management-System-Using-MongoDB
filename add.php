<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <style>
        .header {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  height:100px;
}
.headermenu {
  float: right;
}
.headermenu:hover {
  background-color: white;
  color:black;
  height:100px;
}
.headermenu,.icon{
  display: block;
  color: white;
  text-align: center;
  padding: 30px;
  text-decoration: none;
  font-size: 30px;
}
.footer
    {
        height:200px;
        width:100%;
        background-color: #333;
        display:float;
        justify-content: center;
        align-items: center;
        

    }
    #idimg1
    {
        height:40px;
        width:40px;
    }
    #item2
    {
        position:absolute;
        float:right;
        color:white;
        padding:25px;
        right:10%;
        text-align: center;
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
    .form
{
    background-color: #333;
    height:auto;
    width:auto;
    padding:10px;
    color:white;
    text-align:center;
    
}
#submit{
background-color:white;
color:#333;
font-weight:bold;
}

    </style>
</head>
<body>
    <?php
    $n1="";
    $i1="";
    $p1="";
    $a1="";
    $r1="";
    $s1="";
    $d1="";
    $id1="";
    $x=1;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST['id']))
        {
            $i1='This field cannot be empty ';
            $x=0;
        }
        if(empty($_POST['name']))
        {
            $n1='This field cannot be empty ';
            $x=0;
        }
        if(empty($_POST['phone']))
        {
            $p1='This field cannot be empty ';
            $x=0;
        }
        if(empty($_POST['address']))
        {
            $a1='This field cannot be empty ';
            $x=0;
        }
        if(empty($_POST['dept']))
        {
            $d1='This field cannot be empty ';
            $x=0;
        }
        if(empty($_POST['role']))
        {
            $r1='This field cannot be empty ';
            $x=0;
        }
        if(empty($_POST['salary']))
        {
            $s1='This field cannot be empty ';
            $x=0;
        }
    
        if($x==1)
        {
    session_start();
    if(isset($_SESSION['n']))
    {
     $id=$_POST['id'];
     $name=$_POST['name'];
     $phone=$_POST['phone'];
     $address=$_POST['address'];
     $dept=$_POST['dept'];
     $role=$_POST['role'];
     $salary=$_POST['salary'];
     require 'vendor/autoload.php';
     $client= new MongoDB\Client;#("mongodb://127.0.0.1:27017");
     $empdb=$client->mongoemp;  
     if($empdb){
     $tb1=$empdb->emp_details;   
     $result=$tb1 ->insertOne(['_id'=>$id,'name'=>$name,'phone'=>$phone,'Address'=>$address,'dept_name'=>$dept,'role'=>$role,'Salary'=>$salary]); 
     $drr=$result -> getInsertedCount();
     if($drr!=0)
     {
        $id1="The Field is Inserted Successfully";
     }
     else{
         $id1="Insertion Unsuccessfil";
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
}
} 
    
    
    ?>

<div class="header" id="header">
            <a class="headermenu" href="logout.php">Logout</a>
            <a href="update_emp.php" class="headermenu">Update Details</a>
            <a href="view_emp.php" class="headermenu">View Details</a>
            <a href="home.php" class="headermenu">Home</a>
              
    </div>
    <br><br>
    <div class="form">
        <form method="POST" action="add.php">

        <div>
            <label>ID &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
            <input type="text" name="id" ><span>*<?php echo $i1; ?></span>
            </div>
        <br>

        <div>
            <label>Name &emsp;&nbsp;&nbsp;&nbsp; </label>
            <input type="text" name="name" ><span>*<?php echo $n1; ?></span>
        
            </div>
        <br>

        <div>
            <label>Phone &emsp;&nbsp;&nbsp;&nbsp; </label>
            <input type="text" name="phone" ><span>*<?php echo $p1; ?></span>
            
            </div>

            <br>
        <div>
           <label>Address &emsp; </label>
           <input type="text" name="address" ><span>*<?php echo $a1; ?></span>
                
           </div>

           <br>
        <div>
            <label>Department  </label>
            <input type="text" name="dept" ><span>*<?php echo $d1; ?></span>
            
            </div>

            <br>
        <div>
            <label>Role &emsp;&emsp;&nbsp;&nbsp; </label>
            <input type="text" name="role" ><span>*<?php echo $r1; ?></span>
                
            </div>   
            
            <br>

        <div>
            <label>Salary &emsp;&emsp; </label>
            <input type="text" name="salary" ><span>*<?php echo $s1; ?></span>
                
            </div>

            <br>

            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="submit" value="submit" id="submit"> 
            <br>
            <p><?php echo "<h3 id='error'>". $id1. "</h3>";?></p>

  </form>
</div>
    
    
    <br><br>
    <br><br>
    <div class="footer">

  <div id="item2">
      <h3>Name :Company name</h3>
      <h3>Customer Service : 9876543210</h3>
      <a href="https://www.gmail.com"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTklqAVw0CSx1OSi80OBXeHo_YI-CEdbcxMKA&usqp=CAU" id="idimg1"></a>
      &nbsp;
      <a href="https://www.instagram.com"><img src="https://www.freepnglogos.com/uploads/instagram-logos-png-images-free-download-2.png" id="idimg1"></a>
      &nbsp;
      <a href="https://www.youtube.com"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMito5VOuFfyeoVKnB-9nqzWuSJGnl23sa-w&usqp=CAU" id="idimg1"></a>
      &nbsp;
      <a href="https://www.facebook.com"><img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-512.png" id="idimg1"></a>
      &nbsp;
      <a href="https://www.linkedin.com"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlfcwxpxBo_uFK-p4fNNG-2XEJvhLq01ypfQ&usqp=CAU" id="idimg1"></a>
      
  </div>


</div>
    
</body>
</html>
