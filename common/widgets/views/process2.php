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
                    <iframe style="width: 100%; margin:2px auto;" height="350" src="https://www.youtube.com/embed/2LzyBVy2CfM" title="МРТ со скидкой в ночное время ! Без очередей и без ожидания, по записи!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php
                }
                else{?>
                    <iframe style="width: 100%; margin:2px auto;" height="350" src="https://www.youtube.com/embed/-C9zM0cHkB4" title="МРТ чегирмаси билан!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-6 mb-3">
                <iframe style="width: 100%; margin:2px auto;" height="350" src="https://www.youtube.com/embed/GrcFU52486c" title="Бариартрия в клинике &quot;Zarmed Pratiksha Bogoishamol&quot;. Хирург Саидов Фарход Хакимович ." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>