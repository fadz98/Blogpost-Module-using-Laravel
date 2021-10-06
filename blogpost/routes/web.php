<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


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
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $date = date('d-M-Y H:i:s');
    $day = date('l');

    $location = 'Kuala Lumpur';
    $apiKey = config('services.openweather.key');
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$location&appid=$apiKey&units=metric");
    $responseFuture = Http::get("https://api.openweathermap.org/data/2.5/forecast/daily?q=$location&cnt=7&appid=$apiKey&units=metric");

    // dump($responseFuture->json());
    // dump($response->json());

    $currentWeather = $response->json();
    $futureWeather = $responseFuture->json();

    return view('welcome', compact('currentWeather', 'futureWeather'))->with('date', $date)->with('day', $day);
    // return view('welcome')->with(compact('currentWeather'))->with(compact('futureWeather'));

    // return view('welcome', [
    //     'currentWeather' -> $response->json(),
    //     'futureWeather' -> $responseFuture->json(),
    // ]);
});

Route::get('/home', 'App\Http\Controllers\HomeController@index')->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Controller Resources*/
Route::resources([
    'posts' => PostsController::class,
]);

Route::post('/comment/store', 'App\Http\Controllers\CommentController@store')->name('comment.add');
Route::post('/reply/store', 'App\Http\Controllers\CommentController@replyStore')->name('reply.add');
