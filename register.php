<?php

require_once "register.class.php";

if(isset($_POST['submit'])){
	$name = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['login'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$city = $_POST['city'];
	
	$reg = new register($name, $lname, $email, $password, $cpassword, $city);
	$reg->connect();
	$reg->create_register();
	
	
	
	if($name && $lname && $email && $password && $cpassword1 && $city)
	{
		
		if (eregi('^[a-zA-Z]$',$name))
		{
			if(eregi('^[a-zA-Z]$', $lname))
			{
			
			if (eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$', $email))
			{
				if(eregi('^[a-zA-Z]$', $city))
				
				if (eregi('^[A-Za-z0-9!@#$%^&*()_].{6,20}$',$password))
				{
					if($password == $cpassword1)
					{
						require "register.class.php";
						$query = mysql_query("INSERT INTO register VALUES ('','$name','$lname','$email','$password', '$cpassword', '$city')");
						echo "Registration Complete! <a href='login.php'>Click here to login</a>";
					}
					else
					{
						
						echo '<span style="font-size:14px; color:#cc0000; margin-top:10px">Passwords must match</span>';
					}
				}
				else
				{
					//echo "Your password must be between 6 and 15 characters";	
					echo '<span style="font-size:14px; color:#cc0000; margin-top:10px">Your password must be between 6 and 15 characters</span>';
				}
			}
			else
			{
				//echo "Invalid email";	
				echo '<span style="font-size:14px; color:#cc0000; margin-top:10px">Invalid email</span>';
			}
		}
		else
		{
			//echo "Invalid username";
			echo '<span style="font-size:14px; color:#cc0000; margin-top:10px">Invalid username</span>';
		}
	}
	else
	{ 
		//echo "All fields are required"; 
		echo '<span style="font-size:14px; color:#cc0000; margin-top:10px">All fields are required</span>';
	}
	}
}



?>


<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Music-register</title>
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
             <td><form method="post" action="" >
             	<h3 align="center"><b>Register</b></h3>
            <table border="0" cellpadding="1px">
                  <tr>
                    <td><b>FIRST NAME: </b></td>
                  
                   	<td><input name="fname" type="text" /></td>
                   </tr>
                   <tr>
                 	<td><b>LAST NAME:</b></td>
                  <td><input name="lname" type="text" /></td>
                    </tr> 
                    <tr>
                  <td><b> EMAIL ADDRESS:</b></td>
                   <td><input name="login" type="text" /></td>
                     </tr>
                     <tr>
                    <td><b> PASSWORD:</b></td>
                     <td><input name="password" type="password" /></td>
                   	</tr>
                    <tr>
                     <td><b> CONFIRM PASSWORD:</b></td>
                      <td><input name="cpassword" type="password"  /></td>
                    </tr>
                    <tr>
                 	<td><b>CITY:</b></td>
                  	<td><input name="city " type="text" /></td>
                 	</tr>
                    <tr>
                    <td>
                 	 	<input type="reset" name="Reset"  value="Clear Fields">
                  		<input type="submit" name="Submit"  value="Register">
              </td>
              </tr>
              </table>
            </form>
    	 </td>
         </tr>
       </table>
   </div>
</body>
<!-- Placed the boostrap code at the end of the document so that the  page will load faster -->
 <script src="js/bootstrap.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>