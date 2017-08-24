<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Mybehavior;
use frontend\models\TestEvent;

/**
 * Site controller
 */
class TestController extends Controller
{
    const EVENT_HELLO = 'hello';
    public function actionFirst()
    {
//        $this->on(self::EVENT_HELLO, function () {
//            echo 'hello';
//        });
        //添加静态方法
        $this->on(self::EVENT_HELLO, ['frontend\models\TestEvent','sayHello']);
        $this->trigger(self::EVENT_HELLO);
        $this->off(self::EVENT_HELLO,['frontend\models\TestEvent','sayHello']);
        echo '<br>';
        $this->trigger(self::EVENT_HELLO);
    }

    public function actionSecond()
    {
        $MyBehavior=new Mybehavior();
        $this->attachBehavior('MyBehavior',$MyBehavior);
        echo $this->propertyTest;
        echo $this->methodTest();
    }
}
