<?php

use yii\helpers\Html;
use lajax\translatemanager\helpers\Language as Lx;


/* @var $this yii\web\View */
/* @var $model common\models\Department */

$this->title = Lx::t('backend', 'Create department');
$this->params['breadcrumbs'][] = ['label' => Lx::t('backend', 'Departments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6><?=$this->title?></h6>
        </div>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
