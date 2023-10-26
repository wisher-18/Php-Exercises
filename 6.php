
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		echo "Hi, ".$username;
	}


/*  Step1: Make a form that submits one value to POST super global


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
	<form action="6.php" method="post">
		<input type="text" name = "username" placeholder="Enter your name"> <br><br>
		<input type="submit" name = "submit" value="submit">
	</form>
	
</body>
</html>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>