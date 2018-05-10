<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use common\models\Attribute;

/**
 * Description of AttributeController
 *
 * @author irina
 */
class AttributeController extends Controller {

    public function actionIndex() {

        $query = Attribute::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
//            'totalCount' => $query->count(),
        ]);

        $attribute = $query->orderBy('name')
                        ->offset($pagination->offset)
                        ->limit($pagination->limit);
//                ->all;

        return $this->render('index', [
                    'attribute' => $attribute,
                    'pagination' => $pagination,
        ]);
    }

}
