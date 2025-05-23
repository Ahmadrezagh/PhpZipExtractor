<?php
require __DIR__ . '/pclzip.lib.php';
$zip = new PclZip('file.zip');

if ($zip->extract() == 0) {
    die("Error: " . $zip->errorInfo(true));
} else {
    echo "Extraction successful!";
}
