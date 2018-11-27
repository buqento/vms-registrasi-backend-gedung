<?php

namespace app\controllers;

use Yii;
use app\models\VmsTenant;
use app\models\VmstenantSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * VmstenantController implements the CRUD actions for VmsTenant model.
 */
class VmstenantController extends Controller
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
     * Lists all VmsTenant models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VmstenantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VmsTenant model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new VmsTenant model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VmsTenant();
        $rand = rand(1,999).'-';
        $post = Yii::$app->request->post('VmsTenant');
        
        if(Yii::$app->request->isPost){
            $model->name = $post['name'];
            $model->open = $post['open'];
            $model->close = $post['close'];
            $model->phone = $post['phone'];
            $model->email = $post['email'];
            $model->profile = $post['profile'];
            $model->picture = UploadedFile::getInstance($model, 'picture');
            $model->picture_file = $rand.$this->seoTitle($post['name']).'.'.$model->picture->extension;
            $model->address = $post['address'];
            $model->upload($rand.$this->seoTitle($post['name']));
            $model->picture = $this->generateBase64($model->picture_file);
            if($model->save()){
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing VmsTenant model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $rand = rand(1,999).'-';
        $post = Yii::$app->request->post('VmsTenant');
        
        if(Yii::$app->request->isPost){
            $model->name = $post['name'];
            $model->open = $post['open'];
            $model->close = $post['close'];
            $model->phone = $post['phone'];
            $model->email = $post['email'];
            $model->profile = $post['profile'];
            $model->picture = UploadedFile::getInstance($model, 'picture');
            $model->picture_file = $rand.$this->seoTitle($post['name']).'.'.$model->picture->extension;
            $model->address = $post['address'];
            $model->upload($rand.$this->seoTitle($post['name']));
            $model->picture = $this->generateBase64($model->picture_file);
            if($model->save()){
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing VmsTenant model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the VmsTenant model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return VmsTenant the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = VmsTenant::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function generateBase64($image)
    {
        $path = 'images/'.$image;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/'.$type.';base64,'.base64_encode($data);
        return $base64;
    }

    public function seoTitle($s) {
        $c = array (' ');
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

        $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
        
        $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $s;
    }

}
