<?php
$out = '{';
$out = $out . '"user":"' . $_POST["name"] . '",';
$out = $out . '"token":"' . 'token123' . '"';
$out = '}';
echo $out;
?>