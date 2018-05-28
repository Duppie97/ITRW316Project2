<?php
$filename = "uploadFile.xml";
$filesize = filesize($filename);

header("Content-Length:". $filesize);

$handle = fopen($filename, "r");
if (FALSE === $handle) {
    exit("Failed to open stream to URL");
}

while (!feof($handle)) {
    echo fread($handle, 1024*1024*10);
}

fclose($handle);
?>
