<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use lajax\translatemanager\helpers\Language as Lx;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Modal;
use yii\helpers\Html;

$this->title = Yii::t('frontend', "ZARMED PRATIKSHA") . " | " . Yii::t('frontend', 'International department');
?>
<?= \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]) ?>
<?= Banner::widget(['title' => $this->title]) ?>

<section class="blog-main blg-listings">
    <div class="container">
        <div class="sc-title-two text-center">
            <h2 style="color:#283779"><?= Lx::t('frontend', 'International department') ?></h2>
        </div>
        <div >
            <div class="mb-2">
                <div class="text-right" id="google_translate_element"></div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-7 col-12">
                        <img src="https://www.zarmedpratiksha.uz/uploads/images/wpratiksha.jpg?_t=1671173944" width="96%">
                        <iframe style="width: 96%; margin:2px auto;" height="350" src="https://www.youtube.com/embed/_OZxAOK034Q" title="Международный отдел клиники “Zarmed Pratiksha Bog’ishamol”" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <?php if(Yii::$app->language=="uz")
                {?>
                <div class="col-lg-5 col-12">
                <p style="color:#283779 ;font-weight: bold;font-size:20px;">Sizga tashxis qo'yilgan, lekin siz uning to'g'riligiga shubha qilyapsizmi? Hindistonlik shifokorlarning muqobil fikrini olish uchun ajoyib imkoniyat mavjud! "Zarmed Pratiksha Bog'ishamol" klinikasining xalqaro bo'limiga murojaat qiling.</p><br>
                                        <a href="/detail?id=2"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;Teletibbiyot</p></a>
                                        <a href="/detail?id=1"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;Tibbiy hujjatlarni tarjima qilish</p></a>
                                        <a href="/detail?id=1"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;Tibbiy hujjatlarni Hindistonga yuborish</p></a>
                                         <a href="/detail?id=2"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;Shifokorlarning muqobil fikrini onlayn taqdim etish</p></a>
                                         <a href="/detail?id=2"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;Bemorlarni onlayn kuzatib borish</p></a>
                                         <a href="/detail?id=2"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;Tayinlangan onlayn davolanishni kuzatib borish</p></a>
                                         <a href="/detail?id=1"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;Hindistonlik mutaxassislar bilan videoko'riklar tashkil etish: siz uchun qulay vaqtda, onlayn, navbatsiz va mutaxassis tajribasi va malakasiga ishonch bilan. Onlayn ko'rik - bu shifokor bilan videokonferentsiya orqali muloqot qilishdir. Bu jarayon tibbiy xulosalar va diagnostika natijalari asosida amalga oshiriladi</p></a>
                                        <p style="color:#283779 ;font-weight: bold;font-size:20px;"><a href="tel:+998979360209"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;+998 97 936 02 09</a></p>                   
                </div>
                <?php
                }
                 else
                 {
                    ?>
                    <div class="col-lg-5 col-12">
                    <p style="color:#283779 ;font-weight: bold;font-size:20px;">ВАМ ПОСТАВИЛИ ДИАГНОЗ, НО ВЫ СОМНЕВАЕТЕСЬ В НЁМ? ЕСТЬ ОТЛИЧНАЯ ВОЗМОЖНОСТЬ ПОЛУЧИТЬ АЛЬТЕРНАТИВНОЕ МНЕНИЕ ИНДИЙСКИХ ВРАЧЕЙ! ОБРАЩАЙТЕСЬ В МЕЖДУНАРОДНЫЙ ОТДЕЛ КЛИНИКИ “ZARMED PRATIKSHA BOG’ISHAMOL”.</p><br>
                                        <a href="/detail?id=2"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;  Телемедицина</p></a>
                                        <a href="/detail?id=1"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;Перевод медицинской документации</p></a>
                                         <a href="/detail?id=1"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;Отправка медицинской документации в Индию</p></a>
                                         <a href="/detail?id=2"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp; Онлайн-предоставление альтернативного мнения врачей</p></a>
                                         <a href="/detail?id=2"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp; Онлайн-наблюдение пациентов</p></a>
                                         <a href="/detail?id=2"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp;  Мониторинг назначенного онлайн-лечения</p></a>
                                         <a href="/detail?id=1"><p style="color:#283779 ;font-weight: bold;font-size:20px;"><i class="fa-solid fa-circle-check"></i>&nbsp; Организация видео-консультаций с индийскими специалистами: в удобное для вас время, онлайн, без ожидания в очереди и с уверенностью в опыте и квалификации специалиста</p></a>
                                        <p style="color:#283779 ;font-weight: bold;font-size:20px;"><a href="tel:+998979360209"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;+998 97 936 02 09</a></p>                   
                   </div>
                <?php
                 }
                 ?>
                
            </div>
        </div>
            <div>
            </div>   
    </div>
</section>

<?= Consult::widget(['social' => $this->params['social']]) ?>

<?php
Modal::begin([
    'centerVertical' => true,
    'toggleButton' => ['label' => '', 'id' => 'modal-btn', 'class' => 'd-none'],
    'class' => 'bg-danger'
]);
$form = ActiveForm::begin();
echo '<div class="text-center text-muted mb-3"><i class="fa fa-phone fa-3x"></i>
<h3 class="mt-2 mb-0 text-muted">' . Lx::t('frontend', 'WANT WE TO CALL YOU BACK?') . '</h3>
<span class="small">' . Lx::t('frontend', 'REQUEST A CALL BACK') . '</span>
</div>';

echo '<div class="row"><div class="col-sm-6">';
echo $form->field($model, 'name', [
    'template' => '<div class="form-outline">{label}{input}</div>'
])->textInput(['class' => 'form-control form-control-sm sm bg-sfgrey-2 border border-light-c'])->label(Lx::t('frontend', 'Full Name'));
echo '</div>';
echo '<div class="col-sm-6">';
echo $form->field($model, 'phone', [
    'template' => '<div class="form-outline ">{label}{input}</div>'
])->textInput(['class' => 'form-control bg-sfgrey-2 border border-light-c'])->label(Lx::t('frontend', 'Phone Number'));
echo '</div></div>';
echo $form->field($model, 'email', [
    'template' => '<div class="form-outline">{label}{input}</div>'
])->textInput(['class' => 'form-control bg-sfgrey-2 border border-light-c'])->label(Lx::t('frontend', 'Email Address'));

echo '<div class="text-right">' . Html::submitButton(Lx::t('frontend', 'Send Request'), ['class' => 'btn btn-lightblue w-100']) . '</div>';
ActiveForm::end();
Modal::end();

$js = <<<JS
     setTimeout(function() {
         jQuery('#modal-btn').click()
     }, 10000);
 JS;

$this->registerJs($js, \yii\web\View::POS_READY);
?>
