<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\daterange\DateRangePicker;
use kartik\export\ExportMenu;
use dosamigos\datepicker\DatePicker;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;




/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Доставляемость';

$this->params['breadcrumbs'][] = $this->title;


?>

<div class="order-index">
    <h1>Доставляемость</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


        <?php
        $gridColumns = [
            'order_number',
            'order_createdAt',
            'country.name',
            'manager.manager_firstName',
            'status.order_status_name',
            'order_totalSumm',
            'order_statusUpdatedAt',
            'site.site_name',
            'type.delivery-types_name',
            'delivery.order_delivery_data_name',
        ];

        echo ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => $gridColumns
        ]);
        ?>



    <?= GridView::widget([
        'options' => ['width' => '70'],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
            if($model->order_status == 'later-1' or $model->order_status == 'no-call' or $model->order_status == 'no-product' or $model->order_status == 'already-buyed' or $model->order_status == 'another-door' or $model->order_status == 'cancel-other' or $model->order_status == 'stop' or $model->order_status == 'refuse' or $model->order_status == 'defect' or $model->order_status == 'refuse-to-send' or $model->order_status == 'refuse-to-receive' or $model->order_status == 'lost' or $model->order_status == 'parcel-returned' or $model->order_status == 'double' or $model->order_status == 'fake' or $model->order_status == 'logistic-fail' or $model->order_status == 'fv' or $model->order_status == 'test')
            {
                return ['class'=>'danger'];
            }
            else{
                return ['class'=>'success'];  //return ['style' => 'background-color:#FFB6C1;']; color for status
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'order_number',

//            [
//                'attribute' => 'order_countryIso',
//                'value' => 'country',
//                'filter' => Html::activeDropDownList($searchModel, 'order_countryIso', ArrayHelper::map(Order::find()->asArray()->all(), 'order_countryIso', 'alpha2'),['class'=>'form-control','prompt' => 'Select Category']),
//            ],

            [
                'attribute' => 'order_createdAt',
                'value' => 'order_createdAt',
                'format' => 'raw',
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'order_createdAt',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]),
            ],

//            'order_id',
//            'order_createdAt',
            [
                'attribute' => 'order_countryIso',
                'value' => 'country.name'
            ],
            [
                'attribute' => 'order_managerId',
                'value' => 'manager.manager_firstName'
            ],


//            'order_externalId',
//            'order_orderType',
//            'order_orderMethod',
//            [
//
//                'attribute' => 'order_statusUpdatedAt',
//                'label' => 'Последнее обновление',
//                'content' => function ($model) {
//                    return \Yii::$app->formatter->asDate($model->order_statusUpdatedAt, 'php:d-m-Y');
//                }
//            ],
            [
                'attribute' => 'order_status',
                'value' => 'status.order_status_name'
            ],
            // 'order_summ',
            'order_totalSumm',
            [
                'attribute' => 'order_statusUpdatedAt',
                'value' => 'order_statusUpdatedAt',
                'format' => 'raw',
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'order_statusUpdatedAt',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]),
            ],
//            'order_statusUpdatedAt',
//            'order_statusUpdatedAt',
            // 'order_prepaySum',
            // 'order_purchaseSumm',
            // 'order_discount',
            // 'order_discountPercent',
            // 'order_mark',
            // 'order_markDatetime',
            // 'order_lastName',
            // 'order_firstName',
            // 'order_patronymic',
            // 'order_phone',
            // 'order_additionalPhone',
            // 'order_email:email',
            // 'order_call',
            // 'order_expired',
            // 'order_customerComment',
            // 'order_managerComment',
            // 'order_paymentDetail',

            // 'order_paymentType',
            // 'order_paymentStatus',
            [
                'attribute' => 'order_site',
                'value' => 'site.site_name'
            ],
            
            [
                'attribute' => 'type',
                'label' => 'Тип доставки',
                'value' => 'type.delivery-types_name',
            ],
//            'type.delivery-types_name',
            [
                'attribute' => 'delivery',
                'label' => 'Курьер',
                'value' => 'delivery.order_delivery_data_name'

            ],
          //  'delivery.order_delivery_data_name',
//            'type.order_delivery_code', //достучаться к 3 таблице!
            // 'order_statusComment',
            // 'order_sourceId',
            // 'order_fromApi',
            // 'order_shipmentDate',
            // 'order_shipped',
            // 'order_contragentType',
            // 'order_legalName',
            // 'order_legalAddress',
            // 'order_INN',
            // 'order_OKPO',
            // 'order_KPP',
            // 'order_OGRN',
            // 'order_OGRNIP',
            // 'order_certificateNumber',
            // 'order_certificateDate',
            // 'order_BIK',
            // 'order_bank',
            // 'order_bankAddress',
            // 'order_corrAccount',
            // 'order_bankAccount',
            // 'order_shipmentStore',
            // 'order_slug',
            // 'order_deleted',
            // 'order_countryIso',
            // 'order_uploadedToExternalStoreSystem',


            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}',  'header' => 'Подробно'],
        ],
    ]); ?>
</div>
