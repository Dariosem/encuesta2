<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PollVotes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poll-votes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'poll_id')->textInput() ?>

    <?= $form->field($model, 'poll_option_id')->textInput() ?>

    <?= $form->field($model, 'vote_count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
