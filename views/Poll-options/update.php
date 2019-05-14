<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PollOptions */

$this->title = 'Update Poll Options: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Poll Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="poll-options-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
