
## routes/web.php

```php
Route::get('/', function () {
    return view('welcome');
});
```

```php
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
```

```php
Route::get('/', function () {
     return "<a href='".route('users')."'>Login</a>";
});
Route::get('admin/users/fallback', function () {
    return "<h1> Hi users </h1>";
})->name('users');
// ->name('') เป็นการตั้งชื่อ route , วิธีเรียกใช้ = ".route('users')."
```

```php
Route::get('/blog/{name}', function ($name) {
    return "<h1>บทความชื่อ ${name} </h1>";
});
```

```php
// กรณี route ไม่มีอยู่ใน Project จะให้เกิดการทำงานยังไง เรียกว่า "Route Fallback"
Route::fallback(function(){
    return "<h1>ไม่พบหน้าเว็บ</h1>";
});
```


