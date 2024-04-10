<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    $books = [
        [
            'name'=>'Black Butler',
            'content'=>'คนลึกไขปริศนาลับ',
            'price'=>123,
        ],
        [
            'name'=>'Madoka',
            'content'=>'สาวน้อยเวทมนตร์',
            'price'=>99,
        ],
    ];
    return view('home', compact('books'));
});

Route::get('/about', function () {
    $name = "Raiden Shogun";
    $date = "10/4/2567";
    return view('about', compact('name' , 'date'));
})->name('about');





// Route::get('/', function () {
//     return "<a href='".route('users')."'>Login</a>";
// });

Route::get('/blog/{name}', function ($name) {
    return "<h1>บทความชื่อ ${name} </h1>";
});

Route::get('admin/users/fallback', function () {
    return "<h1> Hi users </h1>";
})->name('users');
// ->name('') เป็นการตั้งชื่อ route , วิธีเรียกใช้ = ".route('users')."


// กรณี route ไม่มีอยู่ใน Project จะให้เกิดการทำงานยังไง เรียกว่า "Route Fallback"
Route::fallback(function(){
    return "<h1>ไม่พบหน้าเว็บ</h1>";
});
