<?php
$sql=new mysqli("localhost","root","","saintanne");



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
	<center>
		<form method="post">
			<h1>Stock-in/bought products</h1>
			<label>Product Id</label>
			<select name="prodid">
				<?php
				$sql=new mysqli("localhost","root","","saintanne");

				$link="SELECT * FROM product";
				$res=$sql->query($link);
				if ($res->num_rows){
					while ($row=$res->fetch_assoc()) {
						echo "<option value='".$row['Id']."'>".$row['Name']."</option>";
					}
				}
				?>
			</select><br><br>
			<label>Date</label>
			<input type="date" name="date"><br><br>
			<label>Quantity</label>
			<input type="number" name="qua"><br><br>
			<label>Unit Price</label>
			<input type="number" name="up"><br><br>
			<input type="submit" name="insert" value="Insert">
			<input type="submit" name="prd" value="Back">
		</form>
	</center>
</body>