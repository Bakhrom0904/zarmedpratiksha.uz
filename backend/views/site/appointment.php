<?php

/** @var yii\web\View $this */

use lajax\translatemanager\helpers\Language as Lx;
$this->title = Lx::t('backend', 'Appointments');
$lang = Yii::$app->language;
?>
<div class="row">
  <div class="col-xl-8 col-md-12">
    <div class="ms-panel">
      <div class="ms-panel-header">
        <h6><?=$this->title?></h6>
      </div>
      <div class="ms-panel-body">
        <div class="table-responsive">
          <table class="table table-hover thead-primary">
            <thead>
              <tr>
                <th scope="col"><?=Lx::t('backend', 'Patient')?></th>
                <th scope="col"><?=Lx::t('backend', 'Doctor')?></th>
                <th scope="col"><?=Lx::t('backend', 'Date')?></th>
                <th scope="col"><?=Lx::t('backend', 'Contact')?></th>
                <th scope="col"><?=Lx::t('backend', 'Status')?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($ap as $a):?>
                <tr>
                  <td class="ms-table-f-w"><?=$a->fullname?></td>
                  <td><?php echo $a->doctor->{"last_name_$lang"}." ".$a->doctor->{"first_name_$lang"}." ".$a->doctor->{"middle_name_$lang"}?></td>
                  <td><?=Yii::$app->formatter->asDate($a->date)?></td>
                  <td><?=$a->phone?></td>
                  <td><label class="ms-switch">
                      <input type="checkbox" checked="<?=$a->status==1?'checked':''?>">
                      <span class="ms-switch-slider ms-switch-success round"></span>
                    </label>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>