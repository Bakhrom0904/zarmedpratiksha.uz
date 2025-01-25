<?php
use mihaildev\ckeditor\CKEditor;

?>
<div class="row">
    <div class="col-md-4 mt-3">
        <div class="form-group required">
            <?=$form->field($model, "last_name_$lang")->textInput(['required' => true])?>
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="form-group required">
            <?=$form->field($model, "first_name_$lang")->textInput(['required' => true])?>
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="form-group required">
            <?=$form->field($model, "middle_name_$lang")->textInput(['required' => true])?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-8">
        <div class="form-group">
            <?=$form->field($model, "specialty_$lang")->textInput(['required' => false])?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group required">
            <?=$form->field($model, "about_$lang")->widget(CKEditor::className(),[
                'editorOptions' => [
                    'preset' => 'standart', 
                    'inline' => false, 
                ],
            ])?>
        </div>
    </div>
</div>