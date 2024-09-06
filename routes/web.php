<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
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

//Praktikum 1 PWL

// Route::get('/hello', function () { 
//     return 'Hello World'; 
//     })
Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () { 
    return 'World'; 
    });

Route::get('/', function () { 
    return 'Selamat Datang'; 
    });
Route::get('/',[WelcomeController::class, '/']);

Route::get('/about', function () { 
    return '2241760089|Hilmy Zaky Mustakim'; 
    });

Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name; 
    }); 

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name; 
});


//Praktikum 2
Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/index', [PageController::class, 'index']);
Route::get('/about',[PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);