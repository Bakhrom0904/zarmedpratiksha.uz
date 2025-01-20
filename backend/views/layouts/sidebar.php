<?php
use yii\helpers\Url;
use lajax\translatemanager\helpers\Language as Lx;

?>

<!-- Setting Panel -->
  <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
    <i class="flaticon-gear"></i>
  </div>
  <div class="ms-settings-panel ms-d-block-lg">
    <div class="row">
      <div class="col-xl-4 col-md-4">
        <h4 class="section-title">Customize</h4>
        <div>
          <label class="ms-switch">
            <input type="checkbox" id="dark-mode">
            <span class="ms-switch-slider round"></span>
          </label>
          <span> Dark Mode </span>
        </div>

      </div>
      <div class="col-xl-4 col-md-4">
        <h4 class="section-title">Keyboard Shortcuts</h4>
        <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
        <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
        <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>
      </div>
    </div>
  </div>
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight">
  </div>
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="/admin"> <img src="/admin/img/logo.svg" alt="logo">
      </a>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <li class="menu-item <?=Yii::$app->controller->id == 'admin' ? 'menu-active' : ''?>">
        <a href="<?=Url::to(['/'])?>" aria-expanded="false" aria-controls="department">
          <span><i class="material-icons fs-16">dashboard</i><?=Lx::t('backend', 'Home')?></span>
        </a>
      </li>
      <li class="menu-item <?=Yii::$app->controller->id == 'department' ? 'menu-active' : ''?>">
        <a href="<?=Url::to(['/department'])?>" aria-expanded="false" aria-controls="department">
          <span><i class="fas fa-sitemap"></i><?=Lx::t('backend', 'Departments')?></span>
        </a>
      </li>
        <li class="menu-item <?=Yii::$app->controller->id == 'doctor' ? 'menu-active' : ''?>">
            <a href="<?=Url::to(['/doctor'])?>" aria-expanded="false" aria-controls="doctor">
                <span><i class="fas fa-stethoscope"></i><?=Lx::t('backend', 'Doctors')?></span>
            </a>
        </li>
        <li class="menu-item <?=Yii::$app->controller->id == 'event' ? 'menu-active' : ''?>">
            <a href="<?=Url::to(['/discount'])?>" aria-expanded="false" aria-controls="event">
                <span><i class="fas fa-calendar"></i><?=Lx::t('backend', 'Акции и скидки')?></span>
            </a>
        </li>
        <li class="menu-item <?=Yii::$app->controller->id == 'service' ? 'menu-active' : ''?>">
        <a href="<?=Url::to(['/service'])?>" aria-expanded="false" aria-controls="service">
          <span><i class="material-icons fs-16">widgets</i><?=Lx::t('backend', 'Services')?></span>
        </a>
      </li>
        <li class="menu-item <?=Yii::$app->controller->id == 'contact' ? 'menu-active' : ''?>">
            <a href="<?=Url::to(['/contact'])?>" aria-expanded="false" aria-controls="contact">
                <span><i class="far fa-comment-dots"></i><?=Lx::t('backend', 'Contacts')?></span>
            </a>
        </li>
       <li class="menu-item <?=Yii::$app->controller->id == 'gallery' ? 'menu-active' : ''?>">
        <a href="<?=Url::to(['/gallery'])?>" aria-expanded="false" aria-controls="gallery">
          <span><i class="fas fa-camera"></i><?=Lx::t('backend', 'Galleries')?></span>
        </a>
      </li>
      <li class="menu-item <?=Yii::$app->controller->id == 'menu' ? 'menu-active' : ''?>">
        <a href="<?=Url::to(['/menu'])?>" aria-expanded="false" aria-controls="menus">
          <span><i class="material-icons fs-16">widgets</i><?=Lx::t('backend', 'Menus')?></span>
        </a>
      </li>
      <li class="menu-item <?=Yii::$app->controller->id == 'insurance' ? 'menu-active' : ''?>">
        <a href="<?=Url::to(['/insurance'])?>" aria-expanded="false" aria-controls="insurance">
          <span><i class="fas fa-shield-alt"></i><?=Lx::t('backend', 'Insurances')?></span>
        </a>
      </li>
      <li class="menu-item <?=Yii::$app->controller->id == 'article' ? 'menu-active' : ''?>">
        <a href="<?=Url::to(['/article'])?>" aria-expanded="false" aria-controls="article">
          <span><i class="fas fa-newspaper"></i><?=Lx::t('backend', 'Articles')?></span>
        </a>
      </li>
      <li class="menu-item <?=Yii::$app->controller->id == 'pages' ? 'menu-active' : ''?>">
        <a href="<?=Url::to(['/pages'])?>" aria-expanded="false" aria-controls="pages">
          <span><i class="fas fa-file"></i><?=Lx::t('backend', 'Pages')?></span>
        </a>
      </li>
      <li class="menu-item <?=Yii::$app->controller->id == 'pages' ? 'menu-active' : ''?>">
        <a href="<?=Url::to(['/job'])?>" aria-expanded="false" aria-controls="pages">
          <span><i class="fas fa-file"></i><?=Lx::t('backend', 'Jobs')?></span>
        </a>
      </li>
      <li class="menu-item ">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#other" aria-expanded="false"
          aria-controls="other">
          <span><i class="fas fa-credit-card"></i><?=Lx::t('backend', 'Additional')?></span>
        </a>
        <ul id="other" class="collapse" aria-labelledby="other" data-parent="#side-nav-accordion">
          <li>
        <a href="<?=Url::to(['/media-coverage'])?>">
          <?=Lx::t('backend', 'Media Coverages')?>
        </a>
      </li>
      <li>
        <a href="<?=Url::to(['/slider'])?>">
          <?=Lx::t('backend', 'Sliders')?>
        </a>
      </li>
      <li>
        <a href="<?=Url::to(['/social'])?>">
          <?=Lx::t('backend', 'Social')?>
        </a>
      </li>
      <li>
        <a href="<?=Url::to(['/google-ads'])?>">
          <?=Lx::t('backend', 'Google ads')?>
        </a>
      </li>
      <li>
        <a href="<?=Url::to(['/branch'])?>">
          <?=Lx::t('backend', 'Branches')?>
        </a>
      </li>
      <li>
        <a href="<?=Url::to(['/certificates'])?>">
          <?=Lx::t('backend', 'Certificates')?>
        </a>
      </li>
      <li>
        <a href="<?=Url::to(['/about'])?>">
          <?=Lx::t('backend', 'About page')?>
        </a>
      </li>
      <li>
        <a href="<?=Url::to(['/seo'])?>">
          <?=Lx::t('backend', 'SEO')?>
        </a>
      </li>
        </ul>
      </li>
    </ul>
  </aside>
  <!-- Sidebar Right -->
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active"
            role="tab" data-toggle="tab"> Activity Log</a></li>
        <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab"
            data-toggle="tab"> Settings </a></li>
        <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity"
            data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
      </ul>
    </div>
    <div class="ms-aside-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
          <ul class="ms-activity-log">
            <li>
              <div class="ms-btn-icon btn-pill icon btn-light">
                <i class="flaticon-gear"></i>
              </div>
              <h6>Update 1.0.0 Pushed</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non
                nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-success">
                <i class="flaticon-tick-inside-circle"></i>
              </div>
              <h6>Profile Updated</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque
                felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-warning">
                <i class="flaticon-alert-1"></i>
              </div>
              <h6>Your payment is due</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non
                nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-danger">
                <i class="flaticon-alert"></i>
              </div>
              <h6>Database Error</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque
                felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-info">
                <i class="flaticon-information"></i>
              </div>
              <h6>Checkout what's Trending</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non
                nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-secondary">
                <i class="flaticon-diamond"></i>
              </div>
              <h6>Your Dashboard is ready</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque
                felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
          </ul>
          <a href="#" class="btn btn-primary d-block"> View All </a>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="recentPosts">
          <h6>General Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Location Tracking</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Notifications</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Popups</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Log Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Advanced Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </aside>