<?php 
use kartik\grid\GridView;

$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['report/index']];
$this->params['breadcrumbs'][] = 'รายงานฝากครรภ์ 12 weeks';
?>
<?=

    GridView::widget([
        'dataProvider' => $dataProvider,
        
        'panel'=>[
            'before'=>'รายงาน',
            'after'=>'ประมวลผล ณ'.date("Y-m-d H:i:s")
        ]
        
        
        
    ]);

