<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

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
}
