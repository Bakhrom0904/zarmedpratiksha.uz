<?php

use lajax\translatemanager\helpers\Language as Lx;

?>

<div class="side-social mb-3">
    <h3 class="bg-sfgrey-2 border-bottom bc-green p-3 mb-3"><?= Lx::t('frontend', 'Social Media') ?></h3>
    <ul class="social-links-a square-link">
        <li>
            <a target="_blank" href="<?= $social['facebook']['value'] ?? '' ?>" class="bg-twitter cl-white rounded-0 p-4"><i class="<?= $social['facebook']['icon'] ?? '' ?>"></i></a>
        </li>
        <li>
            <a target="_blank" href="<?= $social['linkedin']['value'] ?? '' ?>" class="bg-twitter cl-white rounded-0 p-4"><i class="<?= $social['linkedin']['icon'] ?? '' ?>"></i></a>
        </li>
        <li>
            <a target="_blank" href="<?= $social['twitter']['value'] ?? '' ?>" class="bg-twitter cl-white rounded-0 p-4"><i class="<?= $social['twitter']['icon'] ?? '' ?>"></i></a>
        </li>
        <li>
            <a target="_blank" href="<?= $social['youtube']['value'] ?? '' ?>" class="bg-twitter cl-white rounded-0 p-4"><i class="<?= $social['youtube']['icon'] ?? '' ?>"></i></a>
        </li>
    </ul>
</div>