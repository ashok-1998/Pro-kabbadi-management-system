<!DOCTYPE html>

<?php
$err="";
?>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<title>KMS</title>
</head>

	<body>
	<center><h1> PRO KABBADI MANAGEMENT SYSTEM </h1> </center>
	<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				
<CENTER>				<h3>ADD MANAGER</h3> </CENTER>
				
		<form action="add.php" method="POST">
		
			<div class="form-group">	
		<label for="rev_id" class="cols-sm-2 control-label"> MANAGER ID </label>
		<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						
		<input type="text" id="rev_id" class="form-control" name="man_id" placeholder="Enter manager_id"
			pattern="[a-zA-Z 0-9]{4,}" title ="Please enter the correct manager id" autofocus required>
					
					<?php
												
							if (isset($_GET['err']) && $_GET['err'] == "Reviewer ID already exists")
							{?>
								<h5 style="color: red;"> MANAGER-ID already exists </h5>
					<?php
							}
					?>
					</div>
							</div>
						</div>
	
			<div class="form-group">
		<label for="rev_name" class="cols-sm-2 control-label"> MANAGER Name </label>
		<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
		<input type="text" class="form-control" id="rev_name" name="man_name" placeholder="Enter Manager name"
			pattern="[a-z A-Z]{4,}" title ="Please enter more than 4 charcters"required>
			</div>
							</div>
						</div>


	


<div class="form-group">
	<label for="rev_city" class="cols-sm-2 control-label"> CITY </label>
		<div class="cols-sm-10">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
		<input type="text" class="form-control" id="rev_city" name="man_city" placeholder="Enter the city"
			pattern="[a-zA-Z]{4,}" title ="Please enter more than 4 charcters"required>	
</div>
</div>
</div>
<div class="form-group">
		<label for="password" class="cols-sm-2 control-label">PASSWORD</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
	<input type="password" class="form-control" id="password" name="password" placeholder="Set your new password"
		pattern="[a-zA-Z0-9]{4,}" title ="Please enter minimum of 4 characters" required>
</div>
</div>
</div>

<div class="form-group">
	<label for="rev_email" class="cols-sm-2 control-label"> EMAIL </label>
	<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
		<input type="email" class="form-control" id="rev_email" name="man_email" placeholder="Enter the email address"
			 title ="Please enter the correct email address"required>
</div></div></div>



<div class="form-group">
	<label for="phno" class="cols-sm-2 control-label"> PHONE-NO </label>
	<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
	<input type="tel" class="form-control" id="phno" name="man_phno" placeholder="Enter your phone no"
		  pattern="[0-9]{5,}" title="Please enter exactly 10 numbers" required>
</div></div></div>
<div class="form-group" class="cols-sm-2 control-label">
	<label for="domain" class="cols-sm-2 control-label"> ZONE </label>
	<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>


	
<select id="domain" name="man_zone" class="form-control">                      
<option value="ZONE-A(NORTH)">ZONE-A(NORTH)</option>
<option value="ZONE-B(SOUTH)">ZONE-B(SOUTH)</option>
<option value="ZONE-C(EAST)">ZONE-C(EAST)</option>
<option value="ZONE-D(WEST)">ZONE-D(WEST)</option>
</select>
</div></div></div>

<div class="form-group ">
		<input type="submit" value="Submit the form" name="submit" type="submit" class="btn btn-primary btn-lg btn-block login-button">
	</div>
	
			
	</form>
	</div>
	<div class="form-group ">
						<center><a href="co_home.php" type="button" id="button" class="btn  btn-sm ">Go to Home</a></center>	
						</div>
	
</div></div>
<?php
$msg="";
//$msg = $_GET['msg'];
//if($msg!='')
if (isset($_GET['msg']) && $_GET['msg'] == "Successfully registered")
{?>
	<script type="text/javascript">
	window.alert("succesfully registered");
	</script>
<?php 
}

?>			

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>