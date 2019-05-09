<?php include 'connection.php';?>
<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link href="./css/style.css" rel="stylesheet">-->
	<title>Login</title>
</head>



<body id="LoginForm">
			<!--<div class="container padding">
            <div class="row login-form text-center">
             <div class="col-sm-6">
		      <div class="panel panel-default ">
			     <div class="main-div">
				 <?php
				 if(isset($_SESSION['username'])){?>
					 <br>Already Logged in<br>
					<a href="home.php" class='btn btn-primary'> home </a>
				 <?php } 
				 else{				 
				 ?>				   	
   					<h2>User Login</h2>
   					<p>Please enter your email and password</p>
   				</div>
    			<form id="Login" action="" method="post">

        		<div class="form-group">
            		<input type="text" class="form-control" name="username"  placeholder="chinmay" >
        		</div>
        		<div class="form-group">
            		<input type="password" class="form-control" name="password"  placeholder="Password" > 
        		</div>
        	<div class="forgot">
        		<a href="reset.html">Forgot password?</a>
			</div>
        		<input type="submit" name="sub" class="btn btn-primary" value="Login">
				<button type="btn" class="btn btn-sucess""><a href="register.php">Register</a></button>
           

</div>
 </form>
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script-->
<!------ Include the above in your HEAD tag ---------->

<!--script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form id="Login" action="" method="post">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Name" name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" name="sub" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
<?php
if (isset($_POST['sub']))
{	
	@$user=$_POST['username'];
	@$pwd=$_POST['password'];
	
	$q="select * from users where firstname='$user' && password='$pwd'";
	$run=mysqli_query($link,$q);
    while($row=mysqli_fetch_array($run))
	{
		$id=$row['id'];
		$_SESSION['username']=$id;
		
	}
	$numrows=mysqli_num_rows($run);
	if($numrows>=1)
	{
			echo'
			<script type="text/javascript">
			window.location.href = "index.php";
			</script>';
	}
	else
	{
			echo 'Inavlid UserName & Password';
	}
}
				 }    
?>         
    </div>



<?php include 'footer.php';?>

</body>
</html>

