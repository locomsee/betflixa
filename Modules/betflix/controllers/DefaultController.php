<?php

namespace app\Modules\betflix\controllers;

use app\models\EplFixtures;
use yii\filters\ContentNegotiator;
use yii\web\Controller;
use yii\web\Response;

/**
 * Default controller for the `betflix` module
 */
class DefaultController extends Controller
{

    public static function allowedDomains() {
        return ['http://localhost:8100'];
    }

    function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator'] = [
            'class' => ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ],
        ];
        return array_merge($behaviors, [
            'corsFilter'  => [
                'class' => \yii\filters\Cors::className(),
                'cors'  => [
                    // restrict access to domains:
                    'Origin'                           => static::allowedDomains(),
                    'Access-Control-Request-Method'    => ['GET', 'POST', 'OPTIONS'],
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Max-Age'           => 3600,                 // Cache (seconds)
                    'Access-Control-Allow-Headers' => ['Origin', 'X-Requested-With', 'Content-Type', 'Accept',]
                ],
            ],
        ]);
        return $behaviors;
    }


    /**
     * Renders the index view for the module
     * @return string
     */
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        return "test";
    }


    public function actionEplfixtures()
    {
        $model=new EplFixtures();

        $result=$model::find()->asArray()->all();
        if($result){
            $response['code']=00;
            $response['fixtures']=$result;
            return $this->asJson($response);
        }else{
         return $this->asJson($response['code']=1);
        }

    }
}
