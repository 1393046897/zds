<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/8
 * Time: 7:54
 */
use yii\helpers\Url;
use yii\helpers\Html;
?>

<form action="<?=Url::to(['save'])?>" method="post">
    <input type="hidden" name="id" value="<?=Html::encode($data['id'])?>">
   用户名: <input type="text" name="username" value="<?=Html::encode($data['username'])?>"><br><br>
    密码:<input type="text" name="pwd" value="<?=Html::encode($data['pwd'])?>"><br><br>
    <input type="submit" value="修改">
</form>
