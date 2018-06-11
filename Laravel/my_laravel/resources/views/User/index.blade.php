<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/9
 * Time: 15:46
 */

?>
<a href="add">添加</a>
<table border="1">
    <tr>
        <td>id</td>
        <td>username</td>
        <td>create_time</td>
        <td>update_time</td>
        <td>操作</td>
    </tr>
    @foreach($list as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->username}}</td>
            <td>{{$v->create_time}}</td>
            <td>{{$v->update_time}}</td>
            <td><a href="delete?id=<?php echo $v->id?>">删除</a>
                <a href="edit?id=<?php echo $v->id?>">修改</a>
            </td>
        </tr>
    @endforeach
</table>
