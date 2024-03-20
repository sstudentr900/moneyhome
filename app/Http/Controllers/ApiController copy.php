<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; //加密
use App\Models\Jwt1;
use App\Models\Jwt2;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Models\Manager AS data_bamanager;
class ApiController extends Controller
{
  public function jwt1(Request $request)
  {
    // $jwt = Jwt1::find(10);
    // dd('jwt1',$jwt);
    // $token = JWTSubject::fromUser($jwt);
    // dd('jwt1',$token);
    // dd(auth('jwt1')->attempt(['account'=>'1@1.1','password'=>'1']));
    $value = ['account'=>'2@2.2','password'=>'1'];
    // $value = ['account'=>'jwt1','password'=>'jwt1'];
    $token = auth('jwt1')->attempt($value);
    // dd('jwt1',$token);
    return response()->json(['token'=>$token]);
  }
  public function jwt2(Request $request)
  {
    $value = ['account'=>'1@1.1','password'=>'1'];
    // $value = ['account'=>'jwt1','password'=>'jwt1'];
    $token = auth('jwt2')->attempt($value);
    // $token = auth('jwt2')->login($value);
    // dd('jwt1',$token);
    return response()->json(['token'=>$token]);
  }
  public function forEveryone () {
    return '不需要token';
  }
  public function forEveryone1 () {
    // return '必要API';
    return response()->json('需要token1');
  }
  public function forEveryone2 () {
    // return '必要API';
    return response()->json('需要token2');
  }
  public function balogin(Request $request)
  {
    $input = $request->validate([
      'email' => 'required',
      'password' => 'required',
    ]);
    //驗證帳號
    $User = data_bamanager::where(['account'=>'1@1.1','releases'=>'y'])->first();
    if(!$User || $User && !Hash::check('1', $User->password))
    {
      return response()->json([
        'error'=>[
          'email' => [
              '帳號或密碼錯誤',
          ],
          'password' => [
              '帳號或密碼錯誤',
          ],
        ]
      ]);
    }
    $token = auth('jwt1')->attempt($input);
    return response()->json(['token'=>$token]);
  }
}
