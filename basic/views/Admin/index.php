<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/7
 * Time: 18:03
 */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

?>

    <form action="<?=Url::to(['login'])?>" method="post">
        用户名: <input type="text" name="username"><br><br>
        密码: <input type="text" name="pwd"><br><br>
        <input type="submit" value="登录">
    </form>

