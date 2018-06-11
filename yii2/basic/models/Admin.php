<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/7
 * Time: 15:40
 */

namespace app\models;



use yii\db\ActiveRecord;
use yii\web\ErrorHandler;
class Admin extends ActiveRecord
{
    function login($data){
        if(empty($data['username'])||empty($data['pwd'])){
           echo "用户名和密码不能为空";
           return false;
        }else{
            $user=$this->user($data['username']);
            if($user){
                if($user['pwd']==md5($data['pwd'])){
                    $session = \Yii::$app->session;
                    $session->set('user',$user);
                    return true;
                }else{
                    echo "密码不正确";
                    return false;
                }
            }else{
                echo "用户名不存在";
                return false;
            }
        }
    }

    public function user($username){
        $sql="select * from admin where username=:username";
        return \Yii::$app->db->createCommand($sql,[':username'=>$username])->queryOne();
    }

}