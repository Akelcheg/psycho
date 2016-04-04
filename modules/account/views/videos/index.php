<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VideosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videos';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-md-8">
    <div class="profile-box editing">


        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?php $widget = GridView::begin([
            'dataProvider' => $dataProvider,

            'tableOptions' => [
                'class' => 'table editing_table'
            ],

            'summary' => '',
            'columns' => [

                [
                    'header' => 'Название видео',
                    'attribute' => 'link',
                ],

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {update} {delete} {link}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                            return Html::a(
                                '<span class="fa fa-eye"></span>',
                                $url);
                        },
                        'update' => function ($url, $model) {
                            return Html::a(
                                '<span class="fa fa-pencil-square-o"></span>',
                                $url);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a(
                                '<span class="fa fa-trash-o"></span>',
                                $url);
                        },
                        /*'link' => function ($url,$model,$key) {
                            return Html::a('Действие', $url);
                        },*/
                    ],
                ],
            ],
        ]); ?>

        <?php echo $widget->renderItems(); ?>


        <div class="pagination default">
            <?= $widget->renderPager(); ?>
        </div>

        <p>
            <?= Html::a('Добавить видео', ['create'], ['class' => 'btn-style']) ?>
        </p>


    </div>
</div>