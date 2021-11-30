<?php
$sql=new mysqli("localhost","root","","saintanne");

if(isset($_GET['update'])){
	$id=$_GET['id'];
	$pname=$_GET['pname'];
	$link=$sql->query("UPDATE product SET Name='$pname' WHERE Id='$id'");
	if ($link) {
		echo '<script>alert("Updated successfully");</script>';
		header('location:product.php');
	}
	else{
		echo '<script>alert("Update failed");</script>';
	}
}

//delete product
if (isset($_GET['del'])) {
	$id=$_GET['id'];
	$pname=$_GET['pname'];
	$link=$sql->query("DELETE FROM product WHERE Id='$id'");

	if ($link) {
		echo '<script>alert("Updated successfully");</script>';
		header('location:product.php');
	}
	else{
		echo '<script>alert("Update failed");</script>';
	}
}


?>

<style>
	body{
			background-color: #1690A7;
		
			justify-content: center;
			align-items: center;

		}
			h1{
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
				margin-left: 40px;
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
				margin: auto;
				border:2px solid #ccc ;
				padding: 30px;
				border-radius: 15px;

			}
			a{
				color: black;
			}
			a:link{
				text-decoration: none;
			}

</style>
<body>
	<form method="get">
		<h1>Update/Delete a product</h1>
		<input type="hidden" name="id" value="<?= $_GET['upd'] ?>">
		<label>Product Name</label>
		<input type="text" name="pname"><br><br>
		<button name="update">Update</button>
		<button name="del">Delete</button>
	</form>
</body>