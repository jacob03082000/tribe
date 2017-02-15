<html>
<head>
<style>
#phptables {
	border: 1px solid black;
	text-align: center;
}

table {
	text-align: center;
	margin: auto;
}
* {
	text-align: center;
}
</style>
</head>
<body>
<h1>Exersise One</h1>
<?php
//question 1
$x = rand(1, 10);
$y = rand(1, 10);
if($x > $y){
	echo "The variable X (" . $x. ") is greater than variable Y(" . $y . ")";
}else {
	echo "The variable X (" . $x . ") is smaller than variable Y(" . $y .")";
}
//end of question 1
?>
<br><br>
<h1>Exersise Two</h1>
<?php
if(isset($_POST['tablebrd'])){
$n = $_POST['tablebrd'];
}
?>
<table border="<?php echo $n; ?>">
	<tr>
		<td>Hello</td>
		<td>Hello</td>
		<td>Hello</td>
	</tr>
</table>
<form action="<?php $_PHP_SELF ?>" method="post">
	<input type="text" name="tablebrd"/>
	<input type = "submit" /><br>
</form>
<h1>Exersise Three</h1>
<?php
$tabled = '<td>';
$table = "<table id='phptables'>";
$tabler = '<tr>';
$endtabled = '</td>';
$endtable = '</table>';
$endtabler = '</tr>';
?>
<?php echo $table ?>
	<?php echo $tabler ?>
		<?php echo $tabled ?>Hello<?php echo $endtabled ?>
		<?php echo $tabled ?>Hello<?php echo $endtabled ?>
		<?php echo $tabled ?>12456<?php echo $endtabled ?>
	<?php echo $endtabler ?>
<?php echo $endtable ?>
//Question 4
<?php
$ontariobar = 1;
$quebecbar = 1.50;
?>
<br>
<form action="<?php $_PHP_SELF ?>" method="post">
	<input type="text" name="state"/>
	<input type='submit'/><br>
</form>
<?php
if($_POST[state] == ontario){
	$currentstate = 'ontario';
	echo "Given you are from" . $currentstate . ", your tax rate is %13, and your total is $" . $ontariobar;
}
if($_POST[state] == quebec){
	$currentstate = 'Quebec';
	echo "Given you are from" . $currentstate . ", your tax rate is %13, and your total is $" . $quebecbar;
}
?>
//question 5
<form> action="<?php $_PHP_SELF ?>" method="post>
	<input type='radio' name='shape' value='square'>
	<input type='radio' name='shape' value='circle'>
	<input type='radio' name='shape' value='triangle'>
</form>
<form> 
	<input type='text' name='size'>
	<input type='text' name='height'>
</form>
<?php
$pi = 3.14;
$circleradius = $_POST[size];
$circlearea = $pi x 
?>
</body>
</html>
