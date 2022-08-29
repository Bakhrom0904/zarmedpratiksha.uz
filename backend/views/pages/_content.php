<?php
use mihaildev\ckeditor\CKEditor;
?>

<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group required">
            <?=$form->field($model, "title_$lang");?>
        </div>
    </div>
    <div class="col-md-12 mt-3">
        <div class="form-group required">
            <?=$form->field($model, "content_$lang")->widget(CKEditor::className(),[
                'editorOptions' => [
                    'preset' => 'standart', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                    'inline' => false, //по умолчанию false
                ],
            ]);?>
        </div>
    </div>
</div>
