<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------

| Web Routes
| :--- |
| Here is where you can register web routes for your application.

*/
// مسار تغيير اللغة
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});
// الصفحة الرئيسية
Route::get('/', function () {
    App::setLocale(Session::get('locale', 'ar'));
    return view('welcome');
});
// صفحة من نحن
Route::get('/about', function () {
    App::setLocale(Session::get('locale', 'ar'));
    return view('about');
});
// صفحة الرؤية
Route::get('/vision', function () {
    App::setLocale(Session::get('locale', 'ar'));
    return view('vision');
});
// صفحة الرسالة
Route::get('/mission', function () {
    App::setLocale(Session::get('locale', 'ar'));
    return view('mission');
});
// صفحة الأهداف
Route::get('/goals', function () {
    App::setLocale(Session::get('locale', 'ar'));
    return view('goals');
});
// صفحة لماذا نحن
Route::get('/why', function () {
    App::setLocale(Session::get('locale', 'ar'));
    return view('why');
});
// صفحة أنواع العسل الملكي (التي أضفناها حديثاً)
Route::get('/honey-types', function () {
    App::setLocale(Session::get('locale', 'ar'));
    return view('honey-types');
});