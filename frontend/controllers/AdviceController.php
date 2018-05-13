<?php
namespace frontend\controllers;


use yii\web\Controller;
use common\models\Ad;
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
        
        $getImage;
        
        


        return $this->render('advice', [
                    'adviceName' => $adviceName,
                    'pagination' => $pagination,
        ]);
    }
    
    

}
