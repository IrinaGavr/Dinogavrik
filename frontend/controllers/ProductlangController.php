<?php

namespace frontend\controllers;

use Yii;
use common\models\ProductLang;
use common\models\ProductLangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductlangController implements the CRUD actions for ProductLang model.
 */
class ProductlangController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ProductLang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductLangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductLang model.
     * @param integer $id_prod
     * @param integer $id_lang
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_prod, $id_lang)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_prod, $id_lang),
        ]);
    }

    /**
     * Creates a new ProductLang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductLang();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_prod' => $model->id_prod, 'id_lang' => $model->id_lang]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ProductLang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_prod
     * @param integer $id_lang
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_prod, $id_lang)
    {
        $model = $this->findModel($id_prod, $id_lang);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_prod' => $model->id_prod, 'id_lang' => $model->id_lang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ProductLang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_prod
     * @param integer $id_lang
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_prod, $id_lang)
    {
        $this->findModel($id_prod, $id_lang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProductLang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_prod
     * @param integer $id_lang
     * @return ProductLang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_prod, $id_lang)
    {
        if (($model = ProductLang::findOne(['id_prod' => $id_prod, 'id_lang' => $id_lang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
