<?php

use Illuminate\Support\Facades\Route;

//追加するコード
Route::get('/building', function () {
    return '建物です';
});

Route::get('/{room?}', function ($room="部屋番号") {
    return $room . "部屋番号はです";
});

