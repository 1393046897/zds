<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/8
 * Time: 10:44
 */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<style>
    .for{
        border: 1px solid #660066;
        margin-top: 10px;
    }
</style>

<script src="./static/jquery-3.2.1.min.js"></script>
<script>
    function add(){
        data={};
        data.user_id=<?=Html::encode($user_id)?>;
        data.con=$("#con").val();

        $.post("<?=Url::to(['add'])?>",data,function(r){
            console.log(r);
            if(r.error==0){
                console.log(r.data);
                window.location.reload();
            }else{
                alert(r.message);
            }
        });
        return false;
    }

</script>





<form  method="post" onsubmit="return add()">
    内容: <textarea name="con" id="con" cols="30" rows="10" >

    </textarea><br><br>
    <input type="submit" value="发布" >
</form><br><br>


<?php foreach($data as $v):?>
    <div class="for">
        <p>
            <span class="span1"><?=Html::encode($v['user_id'])?></span>
            <span><?=Html::encode($v['create_time'])?></span>
        </p>
        <p><?=Html::encode($v['con'])?></p>
        <a href="<?=Url::to(['delete','id'=>$v['id']])?>">删除</a>
    </div>
<?php endforeach;?>

<?php
echo LinkPager::widget([
    'pagination' => $pages,
    'nextPageLabel' => '下一页',
    'prevPageLabel' => '上一页',
])
?>