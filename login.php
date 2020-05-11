<?php
session_start();
require"new1.php";
 
if(isset($_session['user']))
{
    header("location=Product.php"); 
}   
if(isset($_POST['login']))
    
    
{   $user=$_POST['user'];
    $pass=$_POST['pass'];
 if($user=="" && $pass=="")
    {   
      alert("The user and password doesn't match. ");
    }
 else
 {
     $log_qry=$conn->query("Select * from pro where user='$user' and password='$pass'");
     $count=$log_qry->rowCount();
    if($count==1)
     {
         $_session['user']=$user;
     ?>
     <script>
         window.location="Product.php";
         </script>
    <?php
     }
     else
     {
         ?>
<script type="text/javascript">
    {
        window.onload=alert("invallid login");
    }
</script>
        
<?php
     }
  }
}
?>
<html>
<head>
    <title>LOGIN</title>
     <link href="style.css" type="text/css" rel="stylesheet">
    </head>
<body style="background: url(home.jpg) fixed;">
    <div class="container">`
        <h1 class="title">COMPANY NAME</h1>
        <div class="form-group">
            <div class="form-group">
            <p>LOGIN</p>
            </div>
            <form name="LOGIN" method="post" action="login.php">
            <div class="form-group">    
            <p>Username : <input id="user" type="text" name="user" class="form-controll"></p>
                </div>
            <div class="form-group">       
            <p>Password : <input id="pass" type="password" name="pass" class="form-controll"></p>
                </div>
            <div class="form-group">  
            <p><input id="login" class="btnreg" value="LOGIN" name="login" type="submit"></p>    
                </div>
            </form>
        </div>
    </div>
    
    </body>
</html>