<?php

namespace backend\controllers;

use Yii;
use backend\models\Dead;
use backend\models\DeadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DeadController implements the CRUD actions for Dead model.
 */
class DeadController extends Controller
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
     * Lists all Dead models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DeadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dead model.
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
     * Creates a new Dead model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dead();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'post_id' => $model->post_id, 'post_user_id' => $model->post_user_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Dead model.
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
     * Deletes an existing Dead model.
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
     * Finds the Dead model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $post_id
     * @param integer $post_user_id
     * @return Dead the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $post_id, $post_user_id)
    {
        if (($model = Dead::findOne(['id' => $id, 'post_id' => $post_id, 'post_user_id' => $post_user_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
