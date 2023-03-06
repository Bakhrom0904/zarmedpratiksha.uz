<?php

use yii2assets\pdfjs\PdfJs;
use yii\helpers\Url;

$string =Url::base() . '/' . 'Kitob.pdf';
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