<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/7
 * Time: 19:40
 */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
    <form action="<?=Url::to(['saveadd'])?>" method="post">
        用户名: <input type="text" name="username"><br><br>
        密码: <input type="text" name="pwd"><br><br>
        <input type="submit" value="添加">
    </form>


