<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>&nbsp;</p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            [
                'attribute' => 'firstname',
                'value' => 'userProfile.firstname'
            ],
            [
                'attribute' => 'lastname',
                'value' => 'userProfile.lastname'
            ],
            'email:email',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'validation_token',
            [
                'attribute' => 'status',
                'label' => 'Status',
                'filter' => User::getUserStatusConst(),
                'value' => function($model, $index, $dataColumn) {
                                return $model->userStatus;
                            }
            ],

            'created_at:datetime',
            // 'updated_at:datetime',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' => function ($url, $model) {
                                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['title' => 'Update']);
                                },
                    'delete' => function ($url, $model) {
                                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, ['title' => 'Delete', 'data-confirm' => 'Are you sure to delete this user?', 'data-method' => 'post']);
                                },
                ],
            ],
        ],
    ]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
