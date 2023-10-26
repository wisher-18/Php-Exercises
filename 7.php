<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	if(isset($_POST['submit'])){
		global $connection;
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];

		$connection = mysqli_connect('localhost', 'root', '', 'example');
		if(!$connection){
			die("Database connection failed");
		}
		$showQuery = "SELECT * FROM user";
		$query = "INSERT INTO user(fname, lname) ";
		$query .= "VALUES ('$fname','$lname')";

		$result = mysqli_query($connection, $query);
		if(!$result){
			die("Failed".mysqli_error($connection));
		}else{
			echo "Record inserted into the table!";
		}
	}
	

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<form action="7.php" method="post">
		<input type="text" name="fname" placeholder="first name">
		<input type="text" name="lname" placeholder="last name">
		<input type="submit" name="submit" value="Submit">
		<br><br>
		<input type="button" name="show" value= "Show">
		</form>
		<?php
		if(isset($_POST['show'])){
			$query = "SELECT * FROM user";
			$result = mysqli_query($connection, $query);
			while($row = mysqli_fetch_assoc($result)){
				print_r($row);
			}
			}
			?>
	</body>
	</html>



</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
