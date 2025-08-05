<?php
$file = 'health-bar-3.4.0.mcpack';

$countFile = 'count.txt';
$fp = fopen($countFile, 'r+');
if (flock($fp, LOCK_EX)) {
    $count_text = fread($fp, filesize($countFile));
    $count = (int)str_replace(',', '', $count_text);
    $count ++;
    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, number_format($count));
    fflush($fp);
    flock($fp, LOCK_UN);
}
fclose($fp);

header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . $file . '"');
header('Content-Length: ' . filesize($file));

readfile($file);
exit;
?>