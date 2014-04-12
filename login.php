<?php
session_start();

require_once "login.class.php";

if(isset($_POST['submit'])){
	$username = $_POST['login'];
	$password = $_POST['password'];
	
	$username = addslashes($_POST['login']); 
	$password = addslashes($_POST['password']); 
	
	$log = new login($username, $password);
	$log->connect();
	$log->create_login();
}

if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: home.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Music-Login</title>

 <!-- Bootstrap CSS Code -->
 <link href="css/bootstrap.css" rel="stylesheet" />
 <link href="css/bootstrap.min.css" rel="stylesheet" />
 <link href="css/boostrap-theme.css" rel="stylesheet" />
 <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
 

</head>

<body>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Online Music</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href='index.php' class='customButton'>Home</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href='register.php' class='customButton'>register</a></li>
                
              </ul>
            </div><!--/.nav-collapse -->
         </div>
            </div><br/>
            <hr>
            <div class="container">
            <table width="356" border="1">
            <tr>
             <td><form  method="post" action="" >
             	<h3 align="center"><b>Login</b></h3>
            <table border="0" cellpadding="1px">
               <tr>
                 <td><b>EMAIL :</b></td>
             
               <td><input name="login" type="text" class="form-control"/></td>
    			</tr>
                <tr>
               <td><b>PASSWORD :</b></td>
               	  
                <td><input name="password" type="password" class="form-control"/></td>
                 </tr>
                 <tr>
                     <td><input name="remember" type="checkbox" class=""  />
                		<b>REMEMBER ME :</b>
             		 		<a href="">Forgot password?</a>
                      </td>
                  </tr>
                 <tr>
                <td>       
                  <input type="submit" value="Login">
                  <input type="reset" value="Clear Fields">
               </td>
                </tr>
               </table>
            </form>
            </td>
            </tr>
            </table>
            <!--<div class=" modal-footer">
            </div>-->
  		</div>
</body>
<!-- Placed the boostrap code at the end of the document so that the  page will load faster -->
 <script src="js/bootstrap.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>