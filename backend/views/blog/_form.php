<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'short_desp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'draft' => 'Draft', 'published' => 'Published', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cat_id')->dropDownList($cats,['prompt' => 'Select Category']) ?>

    <div class="form-group">
        <label class="control-label" for="blog-status">Image</label>
        <input type="file" name="blog_image">
    </div>

    <?php if(!$model->isNewRecord) : ?>
        <label>Current Image:</label>
        <image src="<?= $img_src ?>" width="150" height="100">
    <?php endif ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
    /*
    <?= $form->field($model, 'published_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>
    */
?>