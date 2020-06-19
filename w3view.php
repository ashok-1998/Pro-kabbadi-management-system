<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf");
$res=mysqli_query($connection,"select photo from user");
?>
<html>
<body>

<?php
If(mysqli_num_rows($res)> 0){

	while($row=mysqli_fetch_array($res,MYSQL_NUM)){?>
	
	
<a href="test/<?php echo $row[0] ?>" target="_blank">view file</a>
<?php
	}
}?>	

</body>
</html>