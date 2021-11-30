<?php
$sql=new mysqli("localhost","root","","saintanne");

if(isset($_POST['insert'])){
	$pname=$_POST['pname'];

	$hahiye=$sql->query("INSERT INTO product (Name) VALUES('$pname')");
	if($hahiye){
		echo '<script>alert("Product inserted successfully")</script>';
	}
	else{
		echo '<script>alert("Failed")</script>';
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
			table,th,td{
		border: 1px solid white;
		

	}
	th{
		padding: 20px;
		background-color:skyblue; 
		font-size: 24px;
		font-weight: bolder;
	}
	tr{
		border-style: none;
	}
	td{
		padding: 10px;
		background-color: #ccc;
	}

</style>
<body>

		<form method="post">
			<h1>Enter a product name</h1>
			<label>Product Name</label>
			<input type="text" name="pname"><br><br>
			<button name="insert">Submit</button>
			<button name="view">Display</button>
			<button><a href="stockin.php">Stock In</a></button>
			<button><a href="#">Stock Out</a></button>
		</form>
	
</body>

<?php

//View Products
if(isset($_POST['view'])){
	$link="SELECT * FROM product";
	$result=$sql->query($link);
	if($result->num_rows){
		echo "<center><table border='2' style='text-align:center'>
				<tr>
					<th>Product Id</th>
					<th>Product Name</th>
					<th colspan=2>Action</th>
				</tr>
				";
		while($row=$result->fetch_assoc()){
			echo "
				<tr>
                    <td>".$row['Id']."</td>
                    <td>".$row['Name']."</td>
                    <td><a href='updatedelete.php?upd=".$row['Id']."'>Update</a></td>
                    <td><a href='updatedelete.php?upd=".$row['Id']."'>Delete</a></td>
                    <br>    
                </tr>
                <tr>
                </tr>
            ";
		}
		echo "
			</table>
			</center>
		";
	}
	
}

?>