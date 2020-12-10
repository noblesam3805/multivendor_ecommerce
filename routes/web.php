<?php

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

Route::get('/', 'post_controller@front')->name('front');

Route::get('/shop', 'post_controller@shop');

Route::get('/about', function () {
    return view('about');
});
    
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/show/{id}', 'post_controller@show');
Route::post('/comment/{comment}', 'CommentController@update')->name('comment.update');
Route::post('/reply/{reply}', 'CommentController@rupdate')->name('reply.update');
Route::post('/store/{post}', 'CommentController@store');
Route::post('/u/{id}', 'post_controller@update');

Auth::routes();
Route::post('/uabout', function(){
    if (isset($_POST['update'])){
$mysqli= new mysqli('localhost', 'krixuaut_krix', 'pass@krix001', 'krixuaut_krix');

  $first_t = $_POST['first_t'];
  $first = $_POST['first'];
  $first_s = $_POST['first_s'];
  $third_t = $_POST['third_t'];
  $third = $_POST['third'];
  $fourth_t = $_POST['fourth_t'];
  $fourth = $_POST['fourth'];
  $second_t= $_POST['second_t'];
  $second = $_POST['second'];

  $new = "UPDATE abouts
SET first_t = '$first_t', first ='$first', first_s = '$first_s', second_t = '$second_t', second = '$second', 
third_t = '$third_t', third = '$third', fourth_t = '$fourth_t', fourth = '$fourth'
WHERE id = '1' ";
mysqli_query($mysqli, $new);
    
    if (!mysqli_query($mysqli, $new)){
    print_r(mysqli_error($mysqli));
   }
 else{
echo"
<div class='alert alert-success alert-dismissible'>
  <a href='/ePages' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong><center>Content Updated</center></strong>.<a href='/ePages'>Go Back</a>
</div>";}
    }
});



Route::get('/delete/{id}', 'post_controller@delete');
Route::get('/edit/{id}', 'post_controller@edit');
Route::get('/approve/{id}', 'post_controller@approve');

Route::post('/comment/{comment}', 'CommentController@update')->name('comment.update');
Route::post('/reply/{reply}', 'CommentController@rupdate')->name('reply.update');
Route::post('/store/{post}', 'CommentController@store');
Route::post('/update/{id}', 'HomeController@update');

Route::post('/p', 'post_controller@store');
Route::post('/repl/{commen}', 'CommentController@reply')->name('commen.reply');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ePages', 'HomeController@ePages');
Route::get('/signout', 'HomeController@signout')->name('signout');

