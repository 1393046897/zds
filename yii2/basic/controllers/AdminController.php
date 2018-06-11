<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/7
 * Time: 15:08
 */

namespace app\controllers;


use app\models\Admin;
use yii\web\Controller;
use yii\web\ErrorHandler;
class AdminController extends Controller
{

   /* function actionIndex(){
        $data = \Yii::$app->db->createCommand("select * from `admin`")->queryAll();
       return $this->render('index',['data'=>$data]);
    }

    function actionAdd(){
        return $this->render('add');
    }
    function actionSaveadd(){
        $admin=new Admin();
        $admin->username = \Yii::$app->request->post('username');
        $admin->pwd = \Yii::$app->request->post('pwd');
        $admin->create_time = time();
        $admin->update_time = time();

        if($admin->save()){
            $this->redirect(array('index'));
        }
    }
    function actionEdit(){
        $id=\Yii::$app->request->get('id');
        $sql='select * from admin where id=:id';
        $data = \Yii::$app->db->createCommand($sql,[':id'=>$id])->queryOne();
        return $this->render('edit',['data'=>$data]);
    }

    function actionSave(){
        $id=\Yii::$app->request->post('id');
        $admin=Admin::findOne($id);
        $admin->username=\Yii::$app->request->post('username');
        $admin->pwd=\Yii::$app->request->post('pwd');
        $admin->create_time=$admin['create_time'];
        $admin->update_time=time();
        if($admin->save()){
            $this->redirect(array('index'));
        }
    }

    function actionDelete(){
        $id=\Yii::$app->request->get('id');
        \Yii::$app->db->createCommand()->delete('admin','id='.$id)->execute();
        $this->redirect(array('index'));
    }*/


   /*
    * 跳转登录页面
    * */
   function actionIndex(){
       return $this->render('index');
   }
    /*
     *  进行登录验证
     * */
    function actionLogin(){
        $model=new Admin();
        if($model->login(\Yii::$app->request->post())){
          return  $this->redirect(['ping/index']);
        }else{

        }
    }
}