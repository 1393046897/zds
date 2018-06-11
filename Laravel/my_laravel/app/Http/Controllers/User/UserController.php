<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/9
 * Time: 15:42
 */

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
        function index(){
           /* $arr=DB::table('user')->get();*/
          $arr = User::all();
            return view('user.index',['list'=>$arr]);
        }
        function add(){
            return view('user.add');
        }
        function addsave(){
            unset($_POST['_token']);
            $_POST['create_time']=time();
            $_POST['update_time']=time();
            $arr=DB::table('user')->insert($_POST);
           return redirect('User/index');
        }
        function edit(){
            $find=DB::table('user')->where(['id'=>$_GET['id']])->get()->toarray();
            return view('user.edit',['list'=>$find]);
        }
        function save(){
            unset($_POST['_token']);
            $_POST['update_time']=time();
            DB::table('user')->where(['id'=>$_POST['id']])->update($_POST);
            return redirect('User/index');
        }
        function delete(){
            DB::table('user')->where(['id'=>$_GET['id']])->delete();
            return redirect('User/index');
        }
}