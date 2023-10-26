<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

if(3>1){
	echo"I love PHP <br>";
}
elseif(3<1){
	echo"I don't want to print this.";
}
else{
	echo"I also don't want to print this.";
}

for($i=1; $i <= 10; $i++)
{
	echo $i."<br>";
}
echo "<br>";
$condition = 'A';

switch($condition){
	case 'A':
		echo "its A condition <br>";
		break;
	case 'B':
		echo "its B condition";
		break;
	case 'C':
		echo "its C condition";
		break;
	case 'D':
		echo "its D condition";
		break;
	case 'E':
		echo "its E condition";
		break;
	default:
		echo"invalid input";
	}
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>