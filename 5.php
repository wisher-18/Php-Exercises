<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

	echo pow(2, 9)."<br>";

	echo strtoupper("wisher")."<br>";

	$list = array(4, 5, 3, 2, 6, 7,9,8, 1, 0);
	sort($list);

	foreach($list as $li){
		echo $li."  ";
	}


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>