<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\DB;

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



Auth::routes();



Route::middleware(['auth'])->group(function () {
    Route::get('/adauga-anunt', [App\Http\Controllers\PropertyController::class,'add_property'])->name('add_property');
    Route::post("/adauga_anunt",[App\Http\Controllers\PropertyController::class,'save_property'])->name('save_property');
    Route::get('/admin/anunturi',[App\Http\Controllers\AdminController::class,'show_dashboard'])->name('show-table');

    Route::post('/get_properties',[App\Http\Controllers\AdminController::class,'get_properties']);

    Route::get("/importa",[App\Http\Controllers\AdminController::class,'importa']);



    Route::get("/admin/anunturi/create",[App\Http\Controllers\AdminController::class,'create_property'])->name('create_property');

    Route::post("/admin/anunturi/store",[App\Http\Controllers\AdminController::class,'store_property'])->name('store_property');

    Route::get("/admin/anunturi/{id}",[App\Http\Controllers\AdminController::class,'show_property'])->name('show_property');

    Route::get("/admin/anunturi/{id}/edit",[App\Http\Controllers\AdminController::class,'edit_property'])->name('edit_property');

    Route::post("/admin/anunturi/{id}/update",[App\Http\Controllers\AdminController::class,'update_property'])->name('update_property');

    Route::delete("/admin/anunturi/{id}/delete",[App\Http\Controllers\AdminController::class,'delete_property'])->name('delete_property');

    

    Route::get('/admin/users', [UserController::class, 'index'])

    ->name('userIndex');

    Route::post('/admin/users', [UserController::class, 'store'])->name('userStore');

    Route::put('/admin/users', [UserController::class, 'update'])->name('userUpdate');

    Route::delete('/admin/users', [UserController::class, 'destroy'])->name('userDestroy');



    Route::resource('admin/blogs', 'App\Http\Controllers\BlogController', ['except' => ['show']]);



    

    Route::get('/admin/blogs/category/create', [App\Http\Controllers\BlogCategoryController::class, 'create'])->name('blogCategoryCreate');

    Route::post('/admin/blogs/category/store', [App\Http\Controllers\BlogCategoryController::class, 'store'])->name('blogCategoryStore');

});



Route::post("/register", [App\Http\Controllers\Auth\RegisterController::class,'register']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout']);

Route::get("/",[App\Http\Controllers\SearchController::class,'welcome']);



Route::get('/curs', 'App\Http\Controllers\SearchController@curs')->name('curs');

Route::get('/cariere', 'App\Http\Controllers\SearchController@cariere')->name('cariere');

Route::get('/termeni-si-conditii', 'App\Http\Controllers\SearchController@termeni_si_conditii')->name('termeni-si-conditii');

Route::get('/informatii-utile', 'App\Http\Controllers\SearchController@informatii_utile')->name('informatii-utile');


Route::get('/despre', 'App\Http\Controllers\SearchController@despre')->name('despre');

Route::get('/contact', 'App\Http\Controllers\SearchController@contact')->name('contact');

Route::get('/blog', 'App\Http\Controllers\SearchController@blog')->name('blog');

Route::get('/blog/categorie/{propertie_types}', 'App\Http\Controllers\SearchController@blogsearch')->name('blogSearch');

Route::resource('admin/blogs', 'App\Http\Controllers\BlogController', ['only' => ['show']]);



Route::get('properties', [App\Http\Controllers\SearchController::class, 'redProperties'])->name('redProperties');



Route::get('properties/{trans_type}', [App\Http\Controllers\SearchController::class, 'get_trans_type'])->name('get_trans_type');

Route::get('properties/type/{type}', [App\Http\Controllers\SearchController::class, 'get_home_search'])->name('get_home_search');



Route::post('properties', [App\Http\Controllers\SearchController::class, 'get_data'])->name('get_data');

Route::post('properties_1', [App\Http\Controllers\SearchController::class, 'get_data_prop'])->name('get_data_prop');



Route::post("/get_properties_featured",[App\Http\Controllers\AdminController::class,'get_properties_featured']);

Route::get("/property/{slug}",[App\Http\Controllers\PropertyController::class,'show_one_property'])->name('show_one_property');






Route::group(['prefix' => 'devs'], function () {

    Voyager::routes();

});

