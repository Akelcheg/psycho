<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EducationalInstitution */

$this->title = 'Create Educational Institution';
$this->params['breadcrumbs'][] = ['label' => 'Educational Institutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="span8">
    <div class="profile-box editing form">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
