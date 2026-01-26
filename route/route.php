<?php

//后台域名
Route::domain('192.168.1.3', 'admin');/*填写你的后台域名*/

//前台域名或ip
Route::domain('192.168.1.3', function () {/*填写你的域名*/
    Route::domain('192.168.1.3', 'index');/*填写你的域名*/
    Route::rule('404', 'index/e404');
    //接口
    Route::rule('doapi', 'index/api');
    Route::rule('api', 'index/api');
    //静态页面
    Route::rule('ip/:ip', 'index/index?act=ip')->pattern(['ip' => '.*']);
    Route::rule(':act','index/index');
});



//Route::get('static', response()->code(404));
