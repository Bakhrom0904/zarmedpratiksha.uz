<?php

?>

<?php if (count($certificates) > 0) { ?>
    <section class="partners bg-sfgrey p-5">
        <div class="container">
            <div class="partner-slider">
                <?php foreach ($certificates as $certificate) { ?>
                    <div class="partner-list p-2">
                        <img src="<?= $certificate->img ?>" alt=""/>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>