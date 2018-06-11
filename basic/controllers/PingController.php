<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/8
 * Time: 10:33
 */

namespace app\controllers;


use app\models\Ping;
use Psy\Util\Json;
use yii\web\Controller;
use yii\data\Pagination;
class PingController extends Controller
{
    function actionIndex(){
       /* $data=\Yii::$app->db->createCommand("select * from ping")->queryAll();
        $session = \Yii::$app->session;
        $user=$session->get('user');
        return $this->render('index',['data'=>$data,'user_id'=>$user['id']]);*/
        $query = Ping::find();
        $countQuery = clone $query;
        $session = \Yii::$app->session;
        $user=$session->get('user');

        $pages = new Pagination(['totalCount' => $countQuery->count(),
            'defaultPageSize' => 3,
            ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'data' => $models,
            'pages' => $pages,
            'user_id'=>$user['id']
        ]);
    }

    function actionAdd(){
        \Yii::$app->response->format
            = \yii\web\Response::FORMAT_JSON;

        $data=\Yii::$app->request->post();
        $model=new Ping();
        $model->user_id=$data['user_id'];
        $model->con=$data['con'];
        $model->create_time=time();
        $model->update_time=time();
        if($model->save()){
            return [
                'error'=>0,
                'data'=>\Yii::$app->db->createCommand("select * from ping where create_time='$model->create_time'")->queryOne()
            ];
        }else{
            return [
                'error'=>1,
                'message'=>'添加错误'
            ];
        }
    }

    function actionDelete(){
        $id=\Yii::$app->request->get('id');
        \Yii::$app->db->createCommand()->delete('ping','id='.$id)->execute();
        $this->redirect(array('index'));
    }

}