
<br>
<?php
arsort($_SESSION['myArray']);
foreach ($_SESSION['myArray'] as $key => $val) {
    echo "$val\n";
}
?>