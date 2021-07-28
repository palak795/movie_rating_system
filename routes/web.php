<?php

use Illuminate\Support\Facades\Route;

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



Route::Resource('movie','MovieController');






Route::post('movie_details/post','MovieController@getPageResult')->
name('get.movie_details');




Route::get('edit_profile','MovieController@editprofile')->name('movie.editprofile');



Route::post('edit_profile','MovieController@editprofile')->name('movie.editprofile');



Route::get('update_profile','MovieController@updateprofile')->name('movie.updateprofile');


Route::post('update_profile','MovieController@updateprofile')->name('movie.updateprofile');



// Route::post('store1','MovieController@store1')->name('movie.store1');

// Route::view('/test','profiles.create');


Route::Resource('/test','ImageController');

Route::get('/test','ImageController@getImage')->name('getImage');

// Route::get('/test','ImageController@show')->name('show');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->
name('home');

























// echo"<pre>";

// echo "<h1>string function</h1>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "hello to all !!!";

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> strlen</h2>";

// echo strlen("Its String function");

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> str_word_count </h2>";

// echo str_word_count("hiiiiiiiiiiiiiii,how r u,i am fine");

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> strrev </h2>";

// echo strrev(" Palak Talwar ");

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> strpos </h2>";

// echo strpos("This is a file","f");

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> str_replace </h2>";

// echo str_replace("Its","replace","Array and Its Functions");

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> ucwords </h2>";

// echo ucwords("Dreams always comes true when we work hard properly");

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> ucfirst </h2>";

// echo ucfirst("prevention is better than cure");

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> strtoupper </h2>";

// echo strtoupper(" chair is made of wood ");

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> strtolower </h2>";

// echo strtolower(" table and Chair are made of wood ");

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> str_repeat </h2>";

// echo str_repeat("^^^^PAYAL^^^^",8);

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> substr </h2>";

// echo substr("welcome to my home",2);

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<h2> substr with 3 arguments </h2>";

// echo substr("welcome to my house",1,17);

// echo "<br>";

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2> trim </h2>";

// $str = "Sundar Ashiana House is very sweet home";

// echo $str."<br>";

// echo trim("$str","Sunme");

// echo "<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>";

// echo "<br>";

// echo "<h2>  Continue Statement  </h2>";

// for ($i=1; $i <=10; $i++) { 

// 	if($i == 5)

// 	{

// 		continue;

// 	}

// echo "The value of i is =".$i . "<br>";

// echo "<br>";

// }

// echo "<br>";

// echo"!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";

// echo"<br>";

// echo "<h2>  Break Statement  </h2>";


// for ($x=1; $x <=10; $x++) { 

// 	if($x == 7)

// 	{

// 		break;

// 	}

// echo "The value of x is =".$x . "<br>";

// echo "<br>";

// }

// echo "<br>";

// echo"!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";

// echo"<br>";

// echo "<h2>  Break Statement </h2>";

// $z=0;

// while ($z < 10) {

// 	if($z == 8)

// 	{

// 	break;

//     }

// echo "The value of z is =".$z . "<br>";

// $z++;

// echo "<br>";

// }

// echo "<br>";


// echo"!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";

// echo"<br>";


// echo "</pre>";



















































































