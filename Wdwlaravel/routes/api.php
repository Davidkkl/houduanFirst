<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WdwController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//wdw学生注册
Route::post('/user/register',[WdwController::class,'WdwUserRegister']);
//wdw学生登录
Route::post('/user/login',[WdwController::class,'WdwUserLogin']);
//wdw学生登出
//Route::post('/user/logout',[WdwController::class,'UserLogout']);

Route::middleware('jwt.role:student')->prefix('student')->group(function () {
    //Route::post('/user/login',[WdwController::class,'WdwUserLogin']);
    Route::post('/user/logout',[WdwController::class,'UserLogout']);//登出用户
    //Route::post('/user/increase',[WdwController::class,'WdwUserProjectIncrease']);
});
////wdw学生报名比赛
//Route::post('/user/increase',[WdwController::class,'WdwUserProjectIncrease']);
//wdw学生报名项目删除
Route::post('/user/project/delete',[WdwController::class,'WdwUserProjectDelete']);

//wdw老师注册
Route::post('/admin/register',[WdwController::class,'WdwAdminRegister']);
//wdw老师登录
Route::post('/administrator/login',[WdwController::class,'WdwAdminLogin']);

//老师增加比赛项目接口
Route::post('/project/increase',[WdwController::class,'WdwProjectIncrease']);
//老师删除比赛项目接口
Route::post('/project/delete',[WdwController::class,'WdwProjectDelete']);
//老师查询单个学生报名信息
Route::post('/admin/inquire',[WdwController::class,'WdwAdminInquire']);
//老师登接口
Route::post('/admin/logout',[WdwController::class,'AdminLogout']);
//老师删除学生账号(还没实现)
Route::post('/admin/user/account/delete',[WdwController::class,'WdwAccountDelete']);







