<?php
$myDir = "C:/xampp/htdocs/Langkahprak1/upload_file/";
$dir = openDir($myDir);
echo "Isi folder (klik link untuk download : <br>";
while ($tmp = readdir($dir)) {
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);