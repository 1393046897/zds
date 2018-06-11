<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/11
 * Time: 7:48
 */

namespace App\Http\Controllers\Ping;


use App\Http\Controllers\Controller;
use App\Models\Ping;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
class PingController extends Controller
{
    function index(){
       $list = DB::table('ping')->paginate(2);
       dd(Cache::get('user'));
       return view('Ping.index',['list'=>$list,'user'=>1]);
    }
    function addsave(){
        unset($_POST['_token']);
        $_POST['user_id']=1;
        $_POST['create_time']=time();
        $_POST['update_time']=time();
        $arr=DB::table('ping')->insert($_POST);
        if($arr){
            return [
                'error'=>0,
                'data'=>$arr
            ];
        }else{
            return [
                'error'=>1,
                'mes'=>'错误'
            ];
        }
    }
    function delete(){
        DB::table('ping')->where(['id'=>$_GET['id']])->delete();
        return redirect('Ping/index');
    }
}