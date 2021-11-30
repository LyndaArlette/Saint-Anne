<?php
$sql=new mysqli("localhost","root","","saintanne");
/*if($sql){
	echo "done!!";
}
else{
	echo "failed";
}*/
?>

<html>
	<body>
		<center>
		<form method="post">
			<h1>Enter product Name</h1>
			<label>Product Name</label>
			<input type="text" name="prodname"><br><br>
			<input type="submit" name="insert" value="Submit">
			<input type="submit" name="view" value="Display">
			<button><a href="stockin.php" style="text-decoration: none; color: black;">Stock In</a></button>
			<button><a href="stockout.php" style="text-decoration: none; color: black;">Stock Out</a></button>
		</form>
	</center>
	</body>
</html>