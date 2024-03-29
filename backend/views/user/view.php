<?php

/* @var $this yii\web\View */
/* @var $model common\models\User */

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'View User: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->username;
?>
<div class="user-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'userProfile.firstname',
            'userProfile.lastname',
            'email:email',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'validation_token',
            'userStatus',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
