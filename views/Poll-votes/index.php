<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PollVotesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Poll Votes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poll-votes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Poll Votes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'poll_id',
            'poll_option_id',
            'vote_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
