<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use fedemotta\datatables\DataTables;
$this->title = 'List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-list">
    <h1><?= Html::encode($this->title) ?></h1>
    <div>
        <?php
        //echo GridView::widget([
        echo DataTables::widget([
            'dataProvider' => $rMmID,
            'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '0'],
            'summary' => '',
            'columns' => [
                [
                    'attribute' => 'MssID',
                    'label' => 'MmID'
                ],
                [
                   'attribute' => 'Title',
                    'label' => 'Title' 
                ],
                [
                    'attribute' => 'Link',
                    'label' => 'Link'
                ],
                [
                    'attribute' => 'Target',
                    'label' => 'Target'
                ],
                [
                    'attribute' => 'Type',
                    'label' => 'Type'
                ],
                [
                    'attribute' => 'Status',
                    'label' => 'Status'
                ],
                [
                    'attribute' => 'Sort',
                    'label' => 'Sort'
                ],
                ]
                
        ]);
        ?>
    </div>
    <code><?= __FILE__ ?></code>
</div>