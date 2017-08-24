<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2017/8/24
 * Time: 17:16
 */

namespace frontend\models;


class TestEvent
{
    public static function sayHello()
    {
        echo 'hello';
    }

    public function sayHi()
    {
        echo 'hi';
    }

}