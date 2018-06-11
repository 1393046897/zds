<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/9
 * Time: 15:47
 */

?>
<form action="save" method="post">
    <input type="hidden" name="_token" value="{{CSRF_token()}}"/>
    <input type="hidden" name="id" value="<?php echo $list[0]->id?>">
    <input type="text" name="username" value="<?php echo $list[0]->username?>">
    <input type="submit" value="修改">
</form>
