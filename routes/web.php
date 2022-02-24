<?php


use App\Http\Controllers\NewproductController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/catalog', function () {
    $products = DB::table('products')->orderBy('title')->get();
    return view('catalog', ['products' => $products]);
});
Route::get('/menu', function () {
    return view('menu');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/reset', function () {
    return view('reset');
});

Route::get('/logout', [LogoutController::class, 'logout']);

Route::post('/register', [RegisterController::class, 'store']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/newproduct', [NewproductController::class, 'store']);

Route::post('/product', [NewproductController::class, 'stock']);

Route::get('/productpage/{id}', [ProductController::class, 'productpage']);

Route::post('/addtocart', [CartController::class, 'addtocart']);

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::post('/updatecart', [CartController::class, 'updatecart'])->name('updatecart');

Route::post('/deletecart', [CartController::class, 'deletecart'])->name('deletecart');

Route::get('/emptycart', [CartController::class, 'emptycart'])->name('emptycart');

Route::get('/purchase', [CartController::class, 'purchase'])->name('purchase');

//Route::get('/validatecart', [CartController::class, 'validatecart'])->name('validatecart');

Route::post('/validatecart', [CartController::class, 'validatecart']);

Route::post('/addcart', [CartController::class, 'emptycart']);
