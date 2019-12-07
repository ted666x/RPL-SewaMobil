<?php
# Konek ke Web Server Lokal
$myHost	= "localhost";
$myUser	= "root";
$myPass	= "";
$myDbs	= "multi_user";

$koneksidb = new mysqli ($myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>