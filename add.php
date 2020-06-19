<html>
<body>
<?php
$connection = mysqli_connect("localhost", "root", "","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$rev_id = $_POST['man_id'];
$rev_name = $_POST['man_name'];
$rev_city = $_POST['man_city'];
$password = $_POST['password'];
$rev_email = $_POST['man_email'];
$phno = $_POST['man_phno'];
$domain = $_POST['man_zone'];
$query = mysqli_query($connection,"insert into manager_add(man_id,man_name,man_city,password,man_email,man_phno,man_zone) values ('$rev_id','$rev_name', '$rev_city', '$password','$rev_email','$phno','$domain')");
if($query==1){
	
	?>
	<script type="text/javascript">
	window.alert("succesfully updated");
	</script>
	
	<?php
		header("Location:add_rev.php?msg=Successfully added");
	?>
	<?php
}
else{
	
	?>
	<script type="text/javascript">
	window.alert("not updated");
	</script>
	<?php
	header("Location:add_rev.php?err=Manager ID already exists");
	?>
	<?php
	
}
}

mysqli_close($connection); // Closing Connection with Server
?>
<html>
<body>