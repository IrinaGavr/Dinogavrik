<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Ad;
use yii\data\Pagination;



class AdviceController extends Controller {

    public function actionAdvice() {
        $adviceQuery = \common\models\Advice::find();
        $adviceProvider = new \yii\data\ActiveDataProvider([
            'query'=> $adviceQuery,
            'pagination'=>[
                'pageSize'=>10,
                'totalCount' => $adviceQuery->count(),
            ]
        ]);

        return $this->render('advice', [
                    'provider' => $adviceProvider
        ]);
    }
 
    public function actionView($url) {
        $advice = Ad::find()->andWhere(['url'=>$url])->one();
        if($advice){}
        return $this->redirect("site/error");
    }
    
}
