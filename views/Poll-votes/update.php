<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PollVotes */

$this->title = 'Update Poll Votes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Poll Votes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="poll-votes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
