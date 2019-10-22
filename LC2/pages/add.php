<?
require_once 'models/Masiv.php';
$numberMasiv = new Masiv ();
if(!empty($_POST['number'])) {
	echo 'Numărul a fost adăugat';
	$numberMasiv->addNumber($_POST['number']);
} else {
?>
<form action="" method="post">
	Adăugați un număr<input type="number" name="number">
    <button type="submit">OK</button>
</form>
<?}?>