<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Ad;
use yii\data\Pagination;



class AdviceController extends Controller {

    public function actionAdvice() {
        $query = Ad::find();
        $queryImages = \common\models\Advice::find()->distinct('image');

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $adviceName = $query->distinct('name')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();

        return $this->render('advice', [
                    'adviceName' => $adviceName,
                    'pagination' => $pagination,
//                    'getImages' => $queryImages->getImage(),
        ]);
    }
 
    public function actionView($url) {
        $advice = Ad::find()->andWhere(['url'=>$url])->one();
        if($advice){}
        return $this->redirect("site/error");
    }
    
}
