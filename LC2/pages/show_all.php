
<?php
require_once 'models/Masiv.php';
$numberMasiv = new Masiv ();
$array = $numberMasiv->getAllNumbers();
foreach ($array as $key => $val) {
    echo "$val\n";
}
?>