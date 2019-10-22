<?
if(!empty($_POST['array'])) {
	$_SESSION['myArray'][] = $_POST['array'];
} 
?>
<form action="" method="post">
	Adăugați un număr<input type="number" name="array">
	<button type="submit">OK</button>
</form>