<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function () {
    return [1, 2, 3];
});

Route::get('/test2', function () {
    return view('a.test2',['name' => '이름이름']);
});






// auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





//layout
Route::get('/aa', function () { //uri가 /aa 일 때,
    $Languages = [
        'PHP',
        'Java',
        'C',
        'Python'
    ];
    return view('aa',[  //views/aa를 보여라
        'Languages' => $Languages
    ]);
});


Route::get('/bb', function () { //uri가 /bb 일 때,
    $alert = [
        'Hello',
        '<script>alert("Hello22")</script>'
    ];
    return view('bb',[  //views/bb 보여라
        'alert' => $alert
    ]);
});


Route::get('/cc',[AppHttp\Controllers\TestController::class,'index']);
//uri가 /cc 일 때, App/Http/Controllers/TestController의 'index' 클래스를 실행해라





//projects
Route::get('/projects',[App\Http\Controllers\ProjectController::class,'index']);


//tasks
Route::group(['middleware' => 'auth'], function(){ //로그인 해야 이 안의 페이지들에 접근할 수 있음

    Route::get('/tasks',[App\Http\Controllers\TaskController::class,'index']);  //목록보기(전체출력)

    Route::get('/tasks/create',[App\Http\Controllers\TaskController::class,'create']); //create(작성) 페이지로 이동

    Route::post('/tasks',[App\Http\Controllers\TaskController::class,'store']); //작성하기(insert)

    Route::get('/tasks/{task}',[App\Http\Controllers\TaskController::class,'show']); //상세보기(select)

    Route::get('/tasks/{task}/edit',[App\Http\Controllers\TaskController::class,'edit']); //edit(수정) 페이지로 이동

    Route::put('/tasks/{task}',[App\Http\Controllers\TaskController::class,'update']); //수정하기(update)

    Route::delete('/tasks/{task}',[App\Http\Controllers\TaskController::class,'destroy']); //삭제하기(delete)

    Route::get('/mytasks',[App\Http\Controllers\TaskController::class,'my_list']);  //목록보기(내가 쓴 글만 출력)

    Route::get('/mypage',[App\Http\Controllers\Auth\MypageController::class,'my_page']);  //마이페이지

    Route::get('/users',[App\Http\Controllers\Auth\MypageController::class,'Users']);  //유저목록보기


});



//관리자 모드
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//메일 보내기
Route::get('/send-mail', [MailController::class, 'sendEmail']);






Route::get('/test',[App\Http\Controllers\TaskController::class,'agg']);
Route::get('/ddd',[App\Http\Controllers\TaskController::class,'ddd']);


