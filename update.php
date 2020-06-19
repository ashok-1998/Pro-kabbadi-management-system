<!DOCTYPE html>
<?php
$connection = mysqli_connect("localhost", "root", "","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
if(isset($_POST['submit'])){
if(isset($_POST['radio'])){
$team_id= $_POST['team_id'];
$form_id= $_POST['form_id'];
$comments= $_POST['comments'];
$q1 = mysqli_query($connection,"UPDATE player1 SET status='".$_POST['radio']."'  WHERE team_id=$team_id AND form_id=$form_id");
$q2 = mysqli_query($connection,"UPDATE player1 SET comments='".$_POST['comments']."'  WHERE team_id=$team_id AND form_id=$form_id");
if($q1!=0 and $q2!=0){
	header("location:man_home.php");
	echo "Yes";
}
else
	header("location:man_home.php");
	echo "No";
}
else
{?>
	<h2><center>error not selected<center><h2>
	<a href="man_home.php">
		<input name="b1" type="button" class="btn btn-primary" value="Home" ></a><br><br><br>

	<?php
}
}
?>
