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

</body>
</html>