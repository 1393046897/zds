<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/9
 * Time: 15:47
 */
?>

<form action="addsave" method="post">
    <input type="hidden" name="_token" value="{{CSRF_token()}}"/>
    用户名:<input type="text" name="username"><br><br>
    <input type="submit" value="添加">
</form>