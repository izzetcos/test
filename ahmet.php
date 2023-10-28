<?php
$sourceFile = 'C:/temp/a.txt';
$destinationFolder = 'Public/dosyalar/';


if (!file_exists($destinationFolder)) {
    mkdir($destinationFolder, 0777, true);
}

$destinationFile = $destinationFolder . basename($sourceFile);


if (copy($sourceFile, $destinationFile)) {
    echo 'Dosya başarıyla kopyalandı.';
} else {
    echo 'Dosya kopyalanırken bir hata oluştu.';
}
?>
