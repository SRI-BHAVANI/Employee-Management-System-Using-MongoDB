<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
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
    </style>
    <script>

function showUser()
{
var dept=document.getElementById("d").value;
var address=document.getElementById("a").value;
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","ajax.php?d="+dept+"&a="+address,true);
    xmlhttp.send();
    xmlhttp.onreadystatechange=function(){
        if(this.readyState==4&& this.status==200)
        {
            document.getElementById("hint").innerHTML=this.responseText;
        }
    };
}


</script>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['n']))
    {
        
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
    <br><br>
    <form>
    Select Department:
    <select id="d" name=dept onchange="showUser()">
    <option value="">Departments:</option>
    <option value="Data Science">Data Science</option>
    <option value="IT">IT</option>
    <option value="ML">ML</option>
    <option value="Technical">Technical</option>
    
    </select>

    
    Select Address:
    <select id="a" name=address onchange="showUser()">
    <option value="">Address:</option>
    <option value="Vijayawada">Vijayawada</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Guntur">Guntur</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Chennai">Chennai</option>
    <option value="Kurnool">Kurnool</option>
    <option value="Vizag">Vizag</option>
    <option value="Mumbai">Mumbai</option>
    </select>
    <br>
<br>
</form>
<div id="hint"><h3>Employee details will be listed here....</h3></div>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
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