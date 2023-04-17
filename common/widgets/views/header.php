<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;

?>
<header class="main_header_area">
    <div class="topbar-wrap bg-dblue pt-5">
        <div class="container container-custom">
            <div class="top-info d-flex justify-content-between align-items-center">
                <ul class="t-addres">
                    <li class="pr-2"><i class="far fa-clock"></i> <?= Lx::t('frontend', 'Open Hours: 24/7') ?></li>
                    <li><span style="color: white"><i class="fa-sharp fa-solid fa-phone-volume"></i>  </span>&nbsp;<a class="m-0 cl-white" href="tel:<?= $social['phone']['value'] ?? '' ?>"><?= $social['phone']['value'] ?? '' ?></a></li>
                    <li><span style="color: white">&nbsp; </span>&nbsp;<a class="m-0 cl-white" href="tel:<?= $social['phone1']['value'] ?? '' ?>"><?= $social['phone1']['value'] ?? '' ?></a></li>
                </ul>
                <ul class="t-social">
                    <?= \lajax\languagepicker\widgets\LanguagePicker::widget([
                        'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_DROPDOWN,
                        'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_SMALL,
                        'itemTemplate' => '<li class="d-block"><a href="{link}" title="{language}" class="text-muted"><i class="{language}"  id="{language}"></i> {name}</a></li>',
                        'activeItemTemplate' => '<a href="{link}" title="{language}" class="text-white"><i class="{language}" id="{language}"></i> {name}</a>',
                        'languageAsset' => 'lajax\languagepicker\bundles\LanguageLargeIconsAsset',      // StyleSheets
                        'languagePluginAsset' => 'lajax\languagepicker\bundles\LanguagePluginAsset',    // JavaScripts
                    ]); ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="header_menu">
        <nav class="navbar navbar-default">
            <div class="container container-custom">
                <div class="navbar-flex d-flex align-items-center justify-content-between w-100">

                    <div class="navbar-header">
                        <a class="navbar-brand text-center" style="min-width: 200px" href="/">
                            <img src="/backend/web/img/logo.svg" alt="image"/>
                        </a>
                    </div>

                    <div class="navbar-collapse1" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav align-items-center" id="responsive-menu">
                            <?php foreach($menu as $item) { ?>
                                <?php if (empty($item['submenu'])) { ?>
                                    <li class="px-3"><a href="<?= Url::to($item['route']) ?>"><?= $item['name'] ?></a></li>
                                <?php } else if (!empty($item['submenu'])) { ?>
                                    <li class="dropdown submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false"><?= $item['name'] ?></a>
                                        <ul class="dropdown-menu">
                                            <?php foreach($item['submenu'] as $subitem) { ?>
                                                <li><a href="<?= Url::to($subitem['route']) ?>"><?= $subitem['name'] ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                            <li class="px-3">
                                <a href="<?= Url::to('appointment') ?>" class="btn bg-blue text-white p-3"><?= Lx::t('frontend', 'Book Appointment') ?></a>
                            </li>
                        </ul>
                    </div>
                    <div id="slicknav-mobile">
                    </div>
                </div>
            </div>

        </nav>
    </div>

</header>

<form action="#" class="ct-searchForm">
    <div class="inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="form-group">
                        <input id="cf-search-form" type="text" placeholder="<?= Lx::t('frontend', 'Search') ?> ..." required class="form-control"/>
                        <button type="submit" class="ct-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="form-group">
                        <a href="#" class="ct-searchForm-close">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div id="back-to-top">
    <a href="#"></a>
</div>