<?php

use yii\helpers\Url;
use yii2assets\pdfjs\PdfJs;

$string = Url::base() . '/book/kitob.pdf';
$string = str_replace(" ", "%20",$string); // fayl nomidagi probellarni %20 ga almashtirish.

echo PdfJs::widget([
    'url' => $string,
    'width' => '100%',
    'height' => '100vh',
    'buttons' => [
        'presentationMode' => true,
        'openFile' => false,
        'print' => false,
        'download' => false,
        'viewBookmark' => false,
        'secondaryToolbarToggle' => false
    ]
]);

?>