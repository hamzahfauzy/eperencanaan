<?php

namespace eperencanaan\controllers;

use Yii;
use common\models\TaMisi;
use eperencanaan\models\search\TaMisiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;
use userlevel\models\TaUserUnit;
use common\models\RefUrusan;
use yii\helpers\ArrayHelper;
use common\models\RefBidang;
use common\models\RefUnit;
use common\models\TaSubUnit;

/**
 * TaMisiController implements the CRUD actions for TaMisi model.
 */
class TaMisiController extends Controller
{
    /**
     * @inheritdoc
     */

    public function NASarraymap($data) {
        $NASarray = [
            'Kd_Urusan' => $data['Kd_Urusan'],
            'Kd_Bidang' => $data['Kd_Bidang'],
            'Kd_Unit' => $data['Kd_Unit'],
            'Kd_Sub' => $data['Kd_Sub_Unit']
                //'Kd_Lingkungan' => $data['Kd_Lingkungan'],
        ];

        return $NASarray;
    }

      public function Unit() {
        $unitskpd = Yii::$app->levelcomponent->getUnit();
        $unit = [
            'Kd_Urusan' => $unitskpd['Kd_Urusan'],
            'Kd_Bidang' => $unitskpd['Kd_Bidang'],
            'Kd_Unit' => $unitskpd['Kd_Unit'],
            'Kd_Sub' => $unitskpd['Kd_Sub_Unit'],
        ];
        return $unit;
    }


    // public function Kd_User() {
    //     $user = Yii::$app->user->identity->id;
    //     return $user;
    // }

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'bulk-delete' => ['post'],
                ],
            ],
        ];
    }

    public function Kd_User() {
    $user = Yii::$app->user->identity->id;
    return $user;
    }

    /**
     * Lists all TaMisi models.
     * @return mixed
     */
    public function actionIndex()
    {    

        // $searchModel = new TaMisiSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        // $NASSkpdModel = $this->NASarraymap(Yii::$app->levelcomponent->getUnit());
        // $Unit = $this->Unit();
        // $Jlh_Misi = TaMisi::find()->where($Unit)->count();
        //  return $this->render('misiskpd', [
        //             'NASSkpdModel' => $NASSkpdModel,
        //             'Jlh_Misi' => $Jlh_Misi,
        // ]);

        $searchModel = new TaMisiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single TaMisi model.
     * @param string $Tahun
     * @param integer $Kd_Urusan
     * @param integer $Kd_Bidang
     * @param integer $Kd_Unit
     * @param integer $Kd_Sub
     * @param integer $No_Misi
     * @return mixed
     */
    public function actionView($Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi)
    {   
        $request = Yii::$app->request;
        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                    'title'=> "TaMisi #".$Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi,
                    'content'=>$this->renderAjax('view', [
                        'model' => $this->findModel($Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi),
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi'=>$Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
        }else{
            return $this->render('view', [
                'model' => $this->findModel($Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi),
            ]);
        }
    }

    /**
     * Creates a new TaMisi model.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new TaMisi();
        
        $NASSkpdModel = $this->NASarraymap(Yii::$app->levelcomponent->getUnit());
        $Unit = $this->Unit();

        // $dataUrusan = ArrayHelper::map(RefUrusan::find()
        //                 ->all()
        //                 ,'Kd_Urusan', 'Nm_Urusan');

        $dataUrusan = ArrayHelper::map(RefUrusan::find()->where(['Kd_Urusan'=>$Unit])
                        ->all()
                        ,'Kd_Urusan', 'Nm_Urusan');
               
        $dataBidang = ArrayHelper::map(RefBidang::find()->where(['Kd_Urusan'=>$Unit, 'Kd_Bidang'=>$Unit]) ->all()
                        ,'Kd_Bidang', 'Nm_Bidang');

        $dataUnit = ArrayHelper::map(RefUnit::find()->where(['Kd_Urusan'=>$Unit, 'Kd_Bidang'=>$Unit, 'Kd_Unit'=>$Unit]) ->all()
                        ,'Kd_Unit', 'Nm_Unit');

         $dataSub = ArrayHelper::map(TaSubUnit::find()->where(['Kd_Urusan'=>$Unit, 'Kd_Bidang'=>$Unit, 'Kd_Unit'=>$Unit, 'Kd_Sub'=>$Unit]) ->all()
                        ,'Kd_Sub', 'Nm_Pimpinan');

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Create new TaMisi",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                        'dataUrusan' => $dataUrusan,
                        'dataBidang' => $dataBidang,
                        'dataUnit' => $dataUnit,
                        'dataSub' => $dataSub,

                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }else if($model->load($request->post()) && $model->save()){
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "Create new TaMisi",
                    'content'=>'<span class="text-success">Create TaMisi success</span>',
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Create More',['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
        
                ];         
            }else{           
                return [
                    'title'=> "Create new TaMisi",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                        'dataUrusan' => $dataUrusan,
                        'dataBidang' => $dataBidang,
                         'dataUnit' => $dataUnit,
                         'dataSub' => $dataSub,

                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'Tahun' => $model->Tahun, 'Kd_Urusan' => $model->Kd_Urusan, 'Kd_Bidang' => $model->Kd_Bidang, 'Kd_Unit' => $model->Kd_Unit, 'Kd_Sub' => $model->Kd_Sub, 'No_Misi' => $model->No_Misi]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                    'dataUrusan' => $dataUrusan,
                    'dataBidang' => $dataBidang,
                     'dataUnit' => $dataUnit,
                     'dataSub' => $dataSub,

                ]);
            }
        }
       
    }

    /**
     * Updates an existing TaMisi model.
     * For ajax request will return json object
     * and for non-ajax request if update is successful, the browser will be redirected to the 'view' page.
     * @param string $Tahun
     * @param integer $Kd_Urusan
     * @param integer $Kd_Bidang
     * @param integer $Kd_Unit
     * @param integer $Kd_Sub
     * @param integer $No_Misi
     * @return mixed
     */
    public function actionUpdate($Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi)
    {
        $request = Yii::$app->request;
        $model = $this->findModel($Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi); 

         $NASSkpdModel = $this->NASarraymap(Yii::$app->levelcomponent->getUnit());
        $Unit = $this->Unit();

        // $dataUrusan = ArrayHelper::map(RefUrusan::find()
        //                 ->all()
        //                 ,'Kd_Urusan', 'Nm_Urusan');

        $dataUrusan = ArrayHelper::map(RefUrusan::find()->where(['Kd_Urusan'=>$Unit])
                        ->all()
                        ,'Kd_Urusan', 'Nm_Urusan');
               
        $dataBidang = ArrayHelper::map(RefBidang::find()->where(['Kd_Urusan'=>$Unit, 'Kd_Bidang'=>$Unit]) ->all()
                        ,'Kd_Bidang', 'Nm_Bidang');

        $dataUnit = ArrayHelper::map(RefUnit::find()->where(['Kd_Urusan'=>$Unit, 'Kd_Bidang'=>$Unit, 'Kd_Unit'=>$Unit]) ->all()
                        ,'Kd_Unit', 'Nm_Unit');

         $dataSub = ArrayHelper::map(TaSubUnit::find()->where(['Kd_Urusan'=>$Unit, 'Kd_Bidang'=>$Unit, 'Kd_Unit'=>$Unit, 'Kd_Sub'=>$Unit]) ->all()
                        ,'Kd_Sub', 'Nm_Pimpinan');
   

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Update TaMisi #".$Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                        'dataUrusan' => $dataUrusan,
                        'dataBidang' => $dataBidang,
                        'dataUnit' => $dataUnit,
                        'dataSub' => $dataSub,

                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];         
            }else if($model->load($request->post()) && $model->save()){
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "TaMisi #".$Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi,
                    'content'=>$this->renderAjax('view', [
                        'model' => $model,
                        'dataUrusan' => $dataUrusan,
                        'dataBidang' => $dataBidang,
                        'dataUnit' => $dataUnit,
                        'dataSub' => $dataSub,

                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi'=>$Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
            }else{
                 return [
                    'title'=> "Update TaMisi #".$Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                        'dataUrusan' => $dataUrusan,
                        'dataBidang' => $dataBidang,
                        'dataUnit' => $dataUnit,
                        'dataSub' => $dataSub,

                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];        
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'Tahun' => $model->Tahun, 'Kd_Urusan' => $model->Kd_Urusan, 'Kd_Bidang' => $model->Kd_Bidang, 'Kd_Unit' => $model->Kd_Unit, 'Kd_Sub' => $model->Kd_Sub, 'No_Misi' => $model->No_Misi]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                    'dataUrusan' => $dataUrusan,
                        'dataBidang' => $dataBidang,
                        'dataUnit' => $dataUnit,
                        'dataSub' => $dataSub,

                ]);
            }
        }
    }

    /**
     * Delete an existing TaMisi model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Tahun
     * @param integer $Kd_Urusan
     * @param integer $Kd_Bidang
     * @param integer $Kd_Unit
     * @param integer $Kd_Sub
     * @param integer $No_Misi
     * @return mixed
     */
    public function actionDelete($Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi)
    {
        $request = Yii::$app->request;
        $this->findModel($Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi)->delete();

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }


    }

     /**
     * Delete multiple existing TaMisi model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Tahun
     * @param integer $Kd_Urusan
     * @param integer $Kd_Bidang
     * @param integer $Kd_Unit
     * @param integer $Kd_Sub
     * @param integer $No_Misi
     * @return mixed
     */
    public function actionBulkDelete()
    {        
        $request = Yii::$app->request;
        $pks = explode(',', $request->post( 'pks' )); // Array or selected records primary keys
        foreach ( $pks as $pk ) {
            $model = $this->findModel($pk);
            $model->delete();
        }

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
       
    }

    /**
     * Finds the TaMisi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Tahun
     * @param integer $Kd_Urusan
     * @param integer $Kd_Bidang
     * @param integer $Kd_Unit
     * @param integer $Kd_Sub
     * @param integer $No_Misi
     * @return TaMisi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Tahun, $Kd_Urusan, $Kd_Bidang, $Kd_Unit, $Kd_Sub, $No_Misi)
    {
        if (($model = TaMisi::findOne(['Tahun' => $Tahun, 'Kd_Urusan' => $Kd_Urusan, 'Kd_Bidang' => $Kd_Bidang, 'Kd_Unit' => $Kd_Unit, 'Kd_Sub' => $Kd_Sub, 'No_Misi' => $No_Misi])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
