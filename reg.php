<?php
$sql=new mysqli("localhost","root","","saintanne");

if(isset($_POST['insert'])){
	$names=$_POST['names'];
	$loc=$_POST['loc'];
	$tel=$_POST['tel'];
	$uname=$_POST['uname'];
	$pssw=$_POST['pssw'];

	$link=$sql->query("INSERT INTO reg(Names,Location,Phone,Username,Password) VALUES('$names','$loc','$tel','$uname','$pssw')");
	if($link){
		echo '<script>alert("Welcome")</script>';
		header('location:login.php');
	}
	else{
		echo '<script>alert("Failed")</script>';
	}
}
?>

<html>
	<body>
		<center>
			<form method="post">
				<h2>Register Here!</h2>
				<label>Names</label>
				<input type="text" name="names"><br><br>
				<label>Location</label>
				<input type="text" name="loc"><br><br>
				<label>Phone</label>
				<input type="text" name="tel"><br><br>
				<label>Username</label>
				<input type="text" name="uname"><br><br>
				<label>Password</label>
				<input type="password" name="pssw"><br><br>
				<button name="insert">Submit</button>

			</form>
		</center>
		
	</body>
</html>
<head>

	<style>
		body{
			background-color: #1690A7;
			display: flex;
			justify-content: center;
			align-items: center;

		}
			h2{
				text-align: center;
				font-size: 24px;
				padding: 10px;
				margin-top: 20px;
			}
			button{
				background-color: #ccc;
				border-style: none;
				padding: 10px;
				font-size: 18px;
				font-weight: bold;
				border-radius: 5px;
			}
			input{
				
				border:none;
				border-bottom:2px solid #ccc;
				background: transparent;
				margin-left: 5px;
				outline: none;

			}
			form{
				background: #1690A7;
				width: 500px;
				border:2px solid #ccc ;
				padding: 30px;
				border-radius: 15px;
			}
			
</style>
</head>