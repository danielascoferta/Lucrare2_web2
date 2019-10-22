<?php
require_once 'models/Masiv.php';
$index = $_GET['index'];
$numberMasiv = new Masiv ();
echo $numberMasiv->getNumber($index);
?>