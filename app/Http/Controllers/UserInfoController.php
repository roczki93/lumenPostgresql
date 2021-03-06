<?php
  
namespace App\Http\Controllers;
  
use App\UserInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class UserInfoController extends Controller{
  
  
    public function index(){
  
        // $UserInfo  = \App\UserInfo::all()->take(10);
        $UserInfo  = \App\UserInfo::orderBy('id','DESC')->take(10)->get();
        return response()->json($UserInfo);
  
    }
  
    public function getUserInfo($id){
  
        $UserInfo  = \App\UserInfo::find($id);
  
        return response()->json($UserInfo);
    }
  
    public function createUserInfo(Request $request){
  
        $UserInfo = \App\UserInfo::create($request->all());
        $UserInfo->timestamp = false;
        return response()->json($UserInfo);
  
    }
  
    public function deleteUserInfo($id){
        $UserInfo = \App\UserInfo::find($id);
        $UserInfo->delete();
 
        return response()->json('deleted');
    }
 
    public function updateUserInfo(Request $request,$id){
        $UserInfo  = \App\UserInfo::find($id);
        $UserInfo->first_name = $request->input('first_name');
        $UserInfo->last_name = $request->input('last_name');
        $UserInfo->email = $request->input('email');
        $UserInfo->gender = $request->input('gender');
        $UserInfo->city = $request->input('city');
        $UserInfo->street = $request->input('street');
        $UserInfo->latitude = $request->input('latitude');
        $UserInfo->longitude = $request->input('longitude');

        $UserInfo->save(['timestamps' => false]);
  
        return response()->json($UserInfo);
    }
  
}
?>