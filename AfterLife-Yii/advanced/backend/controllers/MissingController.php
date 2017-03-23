<?php

namespace backend\controllers;

use Yii;
use backend\models\Missing;
use backend\models\MissingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MissingController implements the CRUD actions for Missing model.
 */
class MissingController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Missing models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MissingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Missing model.
     * @param integer $id
     * @param integer $post_id
     * @param integer $post_user_id
     * @return mixed
     */
    public function actionView($id, $post_id, $post_user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $post_id, $post_user_id),
        ]);
    }

    /**
     * Creates a new Missing model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Missing();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'post_id' => $model->post_id, 'post_user_id' => $model->post_user_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Missing model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $post_id
     * @param integer $post_user_id
     * @return mixed
     */
    public function actionUpdate($id, $post_id, $post_user_id)
    {
        $model = $this->findModel($id, $post_id, $post_user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'post_id' => $model->post_id, 'post_user_id' => $model->post_user_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Missing model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $post_id
     * @param integer $post_user_id
     * @return mixed
     */
    public function actionDelete($id, $post_id, $post_user_id)
    {
        $this->findModel($id, $post_id, $post_user_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Missing model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $post_id
     * @param integer $post_user_id
     * @return Missing the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $post_id, $post_user_id)
    {
        if (($model = Missing::findOne(['id' => $id, 'post_id' => $post_id, 'post_user_id' => $post_user_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
