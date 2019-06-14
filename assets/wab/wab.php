<?php
/**
 * Wab configures class
 * Developed by mehrab.xyz
 */
class Wab {
  public $manifest_path = __DIR__."/../manifest.json";
  function decode_manifest() {
    $manifest_data = file_get_contents($this->manifest_path);
    $manifest = json_decode($manifest_data,true);
    return $manifest;
  }
}

 ?>
