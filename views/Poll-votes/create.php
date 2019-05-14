<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PollVotes */

$this->title = 'Create Poll Votes';
$this->params['breadcrumbs'][] = ['label' => 'Poll Votes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poll-votes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
