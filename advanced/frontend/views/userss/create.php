<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userss */

$this->title = 'Create Userss';
$this->params['breadcrumbs'][] = ['label' => 'Usersses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userss-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
