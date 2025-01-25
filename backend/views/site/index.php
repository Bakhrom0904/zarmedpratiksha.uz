<?php

/** @var yii\web\View $this */
use yii\helpers\Url;
use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;

$this->title = Lx::t('backend', 'Admin panel - Zarmed Pratiksha Hospital');
?>
<div class="row">
  <div class="col-xl-3 col-md-6 col-sm-6">
    <a href="<?=Url::to('doctor')?>">
      <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
        <div class="ms-card-body media">
          <div class="media-body">
            <h6><?=Lx::t('backend', 'Doctors')?></h6>
            <p class="ms-card-change"><?=$docs?></p>
          </div>
        </div>
        <i class="fas fa-stethoscope ms-icon-mr"></i>
      </div>
    </a>
  </div>
  <div class="col-xl-3 col-md-6 col-sm-6">
    <a href="<?=Url::to('department')?>">
      <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
        <div class="ms-card-body media">
          <div class="media-body">
            <h6><?=Lx::t('backend','Departments')?></h6>
            <p class="ms-card-change"><?=$deps?></p>
          </div>
        </div>
        <i class="fas fa-sitemap ms-icon-mr"></i>
      </div>
    </a>
  </div>
  <div class="col-xl-3 col-md-6 col-sm-6">
    <a href="<?=Url::to('service')?>">
      <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
        <div class="ms-card-body media">
          <div class="media-body">
            <h6 class="bold"><?=Lx::t('backend','Services')?></h6>
            <p class="ms-card-change"><?=$serv?></p>
          </div>
        </div>
        <i class="material-icons fs-16 ms-icon-mr" style="font-size: 2rem">widgets</i>
      </div>
    </a>
  </div>
  <div class="col-xl-3 col-md-6 col-sm-6">
    <a href="<?=Url::to('article')?>">
      <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
        <div class="ms-card-body media">
          <div class="media-body">
            <h6 class="bold"><?=Lx::t('backend', 'Articles')?></h6>
            <p class="ms-card-change"><?=$art?></p>
          </div>
        </div>
        <i class="fas fa-newspaper ms-icon-mr"></i>
      </div>
    </a>
  </div>
  <div class="col-xl-9 col-md-12">
    <div class="ms-panel">
      <div class="ms-panel-header">
        <h6><?=Lx::t('backend', "Appointments")?></h6>
      </div>
      <div class="ms-panel-body">
        <div class="table-responsive">
          <table class="table table-hover thead-primary">
            <thead>
              <tr>
                <th scope="col"><?=Lx::t('backend', 'Patient')?></th>            
                <th scope="col"><?=Lx::t('backend', 'Department')?></th>
                <th scope="col"><?=Lx::t('backend', 'Date')?></th>
                  <th scope="col"><?=Lx::t('backend', 'Contact')?></th>
                <th scope="col"><?=Lx::t('backend', 'Status')?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($ap as $a):?>
                <tr>
                  <td class="ms-table-f-w"><?=$a->fullname?></td>     
                  <td><?=$a->department->{"name_$lang"}?></td>
                    <td><?=Yii::$app->formatter->asDate($a->date)?></td>
                  <td><?=$a->phone?></td>
                  <td><label class="ms-switch">
                      <input type="checkbox" disabled <?=$a->status==1?'checked':''?>>
                      <span class="ms-switch-slider ms-switch-success round"></span>
                    </label>
                    <?php if ($a->status==0):?><button class='btn btn-success done' data-id='<?=$a->id?>' style='padding:4px; min-width: auto; margin-top:0'><?=Lx::t('backend', 'Done')?></button><?php endif?>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-lg-6 col-md-12">
    <div class="ms-panel ms-panel-fh">
      <div class="ms-panel-body calendar-wedgit">
        <div id="calendar"></div>
      </div>

    </div>
  </div>
</div>

<?php
$js='
$(".done").click(function(){
  id = $(this).data("id");
  if (confirm("'.Lx::t('backend', 'Are you sure?').'")) 
  $.get("'.Yii::$app->request->hostInfo.'/admin/site/appointment-change?id="+id, function( data ) {
    location.reload();
  });
});
';

$this->registerJS($js, \yii\web\View::POS_END);
?>