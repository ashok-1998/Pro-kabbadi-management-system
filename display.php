<!DOCTYPE html>
<html lang="en">
<title>KMS</title>
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

</head>
<body><br /><br /><br />

<body background="back.jpeg">
<center><h1> PRO KABBADI MANAGEMENT SYSTEM </h1> </center>

<br /><br /><br />
<?php

$bd = mysqli_connect("localhost", "root", "", "conf") or die("Oops some thing went wrong");

echo '<form action="" method="POST">
<center>
<select name="zone">
<option name="ZONE-A(NORTH)">ZONE-A(NORTH)</option>
<option name="ZONE-B(SOUTH)">ZONE-B(SOUTH)</option>
<option name="ZONE-C(EAST)">ZONE-C(EAST)</option>
<option name="ZONE-D(WEST)">ZONE-D(WEST)</option>
</select>

<input type="submit" name="submit">
</center>
<br /><br /><br />
</form>';


if(isset($_POST['submit'])){
	$zone=$_POST['zone'];
$result = mysqli_query($bd,"select * from player1 where zone='$zone'"); //stored procedure
echo '<center>';
echo '<table border=1px>';
echo'<th>TEAM-ID</th><th>FORM_ID</th><th>NATIONALITY</th><th>ZONE</th><th>YEAR</th>';

while($row = mysqli_fetch_array($result))
{

echo'<tr>';
echo '<td>'.$row['team_id'].'</td><td>'.$row['form_id'].'</td><td>'.$row['nationality'].'</td><td>'
.$row['zone'].'</td><td>'.$row['year'].'</td>'; 
echo'</tr>'; 
}

echo '</table>';  
echo '<center>';
}
?>
</body>
</html>

<style>
table{ font-family:arial, sans-serif;
		border-collapse:collapse;
		width:100%;}
td,th{ border:1px solid #dddddd;
		text-align:left;
		padding:8px;
		}
tr:nth-child(even){
			background-color:#dddddd;
		}
</style>