<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        #heading
        {
            text-align:center;
            color:#333;
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
span
{
    color:white;
}
.body{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align:center;
}
#error
{
    text-align:center;
    color:white;
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
    #item2
    {
        position:absolute;
        float:right;
        color:white;
        padding:25px;
        right:10%;
        text-align: center;
    }
    #idimg1
    {
        height:40px;
        width:40px;
    }
    .bottom-right {
    position: absolute;
    top:0px;
    left:24%;
    font-size: 50px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
        </style>
</head>
<body>
<?php
$id1="";
$passcode1="";
$err_msg="";
$x=1;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST['id']))
    {
        $id1='Name cannot be empty ';
        $x=0;
    }
    
    if(empty($_POST['pass']))
    {
        $passcode1='password cannot be empty ';
        $x=0;
    }

    if($x==1)
    {
        session_start();
        $n=$_POST['id'];
        $p=$_POST['pass'];
        require 'vendor/autoload.php';
        $client= new MongoDB\Client;#("mongodb://127.0.0.1:27017");
        $empdb=$client->mongoemp;  
        if($empdb){
        $tb1=$empdb->login ;#emp_details; 
        $result = $tb1->findOne( ['_id' => $n]);   
        //var_dump($result);
       if(!empty($result)){
           if($result['pass']==$p)
           {
            $_SESSION['n']=$result['_id'];
            header("Location: home.php");
           }
           else
           {
            $err_msg="Invalid Password";
           }
        }else{
            $err_msg="Invalid Username";
        }
    }
    else{
        echo "Mongodb Connection unsuccessful";
    }
        
    }
}
?>
 
    
    <h1 id="heading"> Welcome to YB Corp Inventory Management</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="body">   
        
    <div class="form">
        <form method="POST" action="login.php">
        <div>
        <label>Username: </label>
        <input type="text" name="id" ><span>*<?php echo $id1; ?></span>
        </div>
        <br>
        <div>
        <label>Password: </label>
        <input type="password"  name="pass" ><span>*<?php echo $passcode1; ?></span>
        </div>
        <br>
        
        <input type="submit" value="Sign-in" id="submit">
        <p><?php echo "<h3 id='error'>". $err_msg. "</h3>";?></p>



    </form>
</div>
    
    <br>
    
</div>  
<br>

<br>
<br>  
<br>
<br>
<br>
<br>
<br>
<br> 
<br>
<br>
<br> 
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
