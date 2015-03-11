<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        //echo 'ทดสอบ 1';
        $a = 3;
        $b = 5;
        $sum = $a + $b;
        $view = ['sum' => $sum,'a'=>$a,'bb'=>$b];

        return $this->render('test1',$view );
    }
    
    public function actionTest2($name=NULL,$lname=NULL) {
        $info = "Your name is $name $lname";
        return $this->render('test2',["info"=>$info] );
        
    }

}
