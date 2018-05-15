<?php
namespace frontend\controllers;


use yii\web\Controller;
use common\models\Ad;
use common\models\Advice;
use yii\data\Pagination;



class AdviceController extends Controller {

    public function actionAdvice() {
        $query = Ad::find();


        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $adviceName = $query->distinct('name')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
<<<<<<< HEAD
        
   
        

=======
>>>>>>> d622dc82aeb9d14b23fa76846b6098f3bd42a44a

        return $this->render('advice', [
                    'getImage' => $getImage,
                    'adviceName' => $adviceName,
                    'pagination' => $pagination,
        ]);
    }
 
    public function actionView($url) {
        $advice = Ad::find()->andWhere(['url'=>$url])->one();
        if($advice){}
        return $this->redirect("site/error");
    }
    
}
