<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3d094f337e.js" crossorigin="anonymous"></script>
    <title>Home</title>
    <style>
      #id
    {
    position: relative;
    text-align: center;
    color: rgb(31, 30, 30);
    
    }
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
@media screen and (max-width: 600px) {
  .header.responsive {position: relative;}
  .header.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
}


 
  .header.responsive a {
    float: none;
    display: block;
    text-align: left;
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
    #id1
    {
        width:100%;
        height:500px;
    }
    #idimg1
    {
        height:40px;
        width:40px;
    }
    .bottom-right {
    position: absolute;
    top:0px;
    left:3%;
    font-size: 50px;
    color:#544841;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
$name="";
session_start();
    if(isset($_SESSION['n']))
    {
        $id=$_SESSION['n'];
        require 'vendor/autoload.php';
        $client= new MongoDB\Client;#("mongodb://127.0.0.1:27017");
        $empdb=$client->mongoemp;  
        if($empdb){
        $tb1=$empdb->emp_details; 
        $result = $tb1->findOne( ['_id' => $id]);
        if(!empty($result))
        {   
        $name=$result['name'];
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
    <div class="header" id="header">
            <a class="headermenu" href="logout.php">Logout</a>
            <a href="update_emp.php" class="headermenu">Update Details</a>
            <a href="view_emp.php" class="headermenu">View Details</a>
            <a href="home.php" class="headermenu">Home</a>
              
    </div>
    <div id="id">
      <img src="https://www.pngkey.com/png/full/11-113033_building-png-building-png-for-photoshop.png" id="id1" >
      <div class="bottom-right"><h1>Welcome <?php echo $name; ?> to the YB Corp's Admin portal</h1></div>
  </div>

 <br>
 <br>

 <div class="footer">

  <div id="item2">
      <h3>Name :YB Corporation</h3>
      <h3>Customer Service : 9876543211</h3>
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