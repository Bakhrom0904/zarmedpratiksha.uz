
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group required">
            <?=$form->field($model, "name_$lang")->textInput()?>
        </div>
    </div>
    <div class="col-md-12 mt-3">
        <div class="form-group required">
            <?=$form->field($model, "description_$lang")->textArea(['rows'=>10])?>
        </div>
    </div>
</div>