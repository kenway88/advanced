<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2017/8/23
 * Time: 11:25
 */

namespace frontend\models;

use yii\base\Behavior;
class Mybehavior extends Behavior
{
    public $propertyTest='this is MyBehavior propertyTest';
    public function methodTest()
    {
        echo 'this is MyBehavior methodTest';
    }
}