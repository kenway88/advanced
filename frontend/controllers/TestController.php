<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Mybehavior;

/**
 * Site controller
 */
class TestController extends Controller
{
    const EVENT_HELLO = 'hello';
    public function actionFirst()
    {
        $this->on(self::EVENT_HELLO,function (){
            echo 'hello';
        });
        $this->on(self::EVENT_HELLO,function (){
            echo 'hello';
        });
        $this->trigger(self::EVENT_HELLO);
    }

    public function actionSecond()
    {
        $MyBehavior=new MyBehavior;
        $this->attachBehavior('MyBehavior',$MyBehavior);
        echo $this->propertyTest;
        echo $this->methodTest();
    }
}
