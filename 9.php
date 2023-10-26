<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

	<?php
		$id = 10;
		$button = "Click here";
		$name = "somename";
		$value = 101;
		$expiry = time() + (60*60*24*7);
		setcookie($name, $value, $expiry);

		session_start();
		$_SESSION["greeting"] = "Hello there";
		echo $_SESSION["greeting"];

		/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
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
			<a href="http://localhost/demo/_practical-app/9.php?id=<?php echo $id;?>"><?php echo $button;?></a>
		</body>

		</html>
		






	</article><!--MAIN CONTENT-->
	<?php include "includes/footer.php" ?>