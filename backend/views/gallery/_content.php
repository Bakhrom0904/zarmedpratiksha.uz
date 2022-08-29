<div class="row mt-3">
    <div class="col-md-12">
        <div class="form-group required">
            <?=$form->field($model, "title_$lang")->textInput(['required' => true])?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group required">
            <?=$form->field($model, "description_$lang")->textarea(['rows' => 10, 'required' => true])?>
        </div>
    </div>
</div>