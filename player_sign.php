<html>
<body>
<?php
$connection = mysqli_connect("localhost", "root", "","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$team_id = $_POST['team_id'];
$team_name = $_POST['team_name'];
$team_city = $_POST['team_city'];
$password = $_POST['password'];
$team_email = $_POST['team_email'];
$phno = $_POST['phno'];
$year = $_POST['team_year'];
$query = mysqli_query($connection,"insert into player(team_id,team_name,team_city,password,team_email,phno,year) values ('$team_id','$team_name', '$team_city', '$password','$team_email','$phno','$year')");
if($query==1){
	
	?>
	<script type="text/javascript">
	window.alert("succesfully updated");
	</script>
	
	<?php
		header("Location:player_signup.php?msg=Successfully registered");
	?>
	<?php
}
else{
	
	?>
	<script type="text/javascript">
	window.alert("not updated");
	</script>
	<?php
	header("Location:player_signup.php?err=team ID already exists");
	?>
	<?php
	
}
}

mysqli_close($connection); // Closing Connection with Server
?>
<html>
<body>