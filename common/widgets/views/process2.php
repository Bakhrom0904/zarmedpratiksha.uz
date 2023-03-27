<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;
$til=Yii::$app->language;

?>
<section class="w-process bg-sfgrey-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <?php
                if($til=='ru')
                {?>
                    <iframe style="width: 100%; margin:2px auto;" height="350" src="https://www.youtube.com/embed/hNeAtqtcUsA" title="В честь священного месяца Рамадан в клинике &quot;ZARMED PRATIKSHA Bog’ishamol&quot; снижение цен!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php
                }
                else{?>
                    <iframe style="width: 100%; margin:2px auto;" height="350" src="https://www.youtube.com/embed/65vCUnThhiY" title="Мuqaddas Ramazon oyi munosabati bilan &quot;ZARMED PRATIKSHA Bog&#39;ishamol&quot; klinikasida chegirmalar!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-6 mb-3">
                <iframe style="width: 100%; margin:2px auto;" height="350" src="https://www.youtube.com/embed/1ViViAotG_E" title="Безразрезное лазерное дробление камня почки мини доступом (5мм)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>