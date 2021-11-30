<?php
$sql=new mysqli("localhost","root","","saintanne");
if(isset($_POST['check'])){
	$uname=$_POST['uname'];
	$psswrd=$_POST['psswrd'];

	$link="SELECT * FROM reg WHERE Username='$uname' and Password='$psswrd'";
	$result=$sql->query($link);
	$row=$result->num_rows;
		if($row){
			echo '<script>alert("Welcome!!!")</script>';
			header('location:product.php');
			}
		else{
				echo '<script>alert("Try again!!")</script>';
			}
}

?>

<body>
	<center>
		<form method="post">
			<h2>Log in here!</h2>
			<label>Username</label>
			<input type="text" name="uname"><br><br>
			<label>Password</label>
			<input type="password" name="psswrd"><br><br>
			<button name="check">Log in</button>
			
		</form>
	</center>
</body>

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