<?php
include_once(__DIR__.'/wab.php');
$Wab = new Wab();
$manifest = $Wab->decode_manifest();
echo $manifest['background_color'];
 ?>
