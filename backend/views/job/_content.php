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
            <?=$form->field($model, "description_$lang")->widget(CKEditor::className(),[
                'editorOptions' => [
                    'preset' => 'standart', 
                    'inline' => false, 
                ],
            ]);?>
        </div>
    </div>
</div>
