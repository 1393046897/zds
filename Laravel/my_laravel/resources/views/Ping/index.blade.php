<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/11
 * Time: 7:54
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    .box{
        border: 1px solid #660066;
        margin-top: 10px;
    }
</style>

<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    function add(){
        data={};
        data.user_id=1;
        data.con=$("#con").val();
        data._token=$("#token").val();
        $.post("addsave",data,function(r){
            console.log(r);
            window.location.reload();
        });
        return false;
    }

</script>

<form  method="post" onsubmit="return add()">
    <input type="hidden" name="_token" value="{{CSRF_token()}}" id="token"/>
    内容: <textarea name="con" id="con" cols="30" rows="10" >

    </textarea><br><br>
    <input type="submit" value="发布" >
</form><br><br>
</body>
</html>


@foreach($list as $v)
    <div class="box">
        <p><span class="one">{{$v->user_id}}</span><span class="two">{{$v->create_time}}</span></p>
        <p>{{$v->con}}</p>
        <a href="delete?id=<?php echo $v->id?>"><button>删除</button></a>
    </div>
@endforeach

{{ $list->links()}}
