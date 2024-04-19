<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductsController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\BuyerConroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'showProduct']);
Route::get('/details/{id}', [HomeController::class, 'detailsProduct']);

Route::middleware('IsAuth')->group(function (){
    Route::get('dashboard',[ProductsController::class, 'dashboard'])->name('dashboard');
    Route::get('products',[ProductsController::class, 'showProducts'])->name('products');
    Route::delete('/products/{id}', [ProductsController::class, 'delete'])->name('delete');
    Route::post('/products', [ProductsController::class, 'store'])->name('addProduct');
    Route::put('/products/{id}', [ProductsController::class, 'update'])->name('updateProduct');
    //admin Conroller
    Route::get('/bids', [BidController::class, 'show']);
    Route::get('products', [AdminController::class, 'show']);
    Route::post('/refuse/{id}',[AdminController::class, 'refuseProduct'])->name('refuse');
    Route::post('/accept/{id}',[AdminController::class, 'acceptProduct'])->name('accept');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/details/{id}', [ProductsController::class, 'bidNow'])->name('bidnow');
    //Bid Controller
    Route::get('/bidDetails/{id}', [BidController::class, 'productAuction'])->name('bidDetails');
    Route::post('/bidDetails/{id}/accept', [BidController::class, 'acceptBid'])->name('acceptBid');
    Route::post('/bidDetails/{id}/refuse', [BidController::class, 'refuseBid'])->name('refuseBid');



    Route::post('/bids/{id}/accept', [BidController::class, 'acceptBids'])->name('acceptBids');
    Route::post('/bids/{id}/refuse', [BidController::class, 'refuseBids'])->name('refuseBids');

    //accepted bids

    Route::get('/Acceptedbids', [BidController::class, 'Acceptedbids']);

    Route::post('/cancelAcceptedBids/{id}', [BidController::class, 'cancelAcceptedBids'])->name('cancelAcceptedBids');


    Route::get('/manageUsers', [AdminController::class, 'manageUser'])->name('manageUsers');


    Route::post('changeRole/{id}', [AdminController::class, 'ChangeRole'])->name('changeRole');

    //delete user

    Route::delete('manageUsers/{id}', [AdminController::class, 'DeleteUser'])->name('DeleteUser');
    Route::put('manageUsers/{id}', [AdminController::class , 'undoDeletion'])->name('undoDeletion');

    Route::get('Mybids', [BuyerConroller::class, 'MyBids']);

    Route::post('Mybids/{id}', [BuyerConroller::class, 'CancelBid'])->name('CancelBid');
    Route::post('Mybids/BuyProduct/{id}', [PaymentController::class, 'BuyProduct'])->name('BuyProduct');


    Route::get('MyAcceptedBid', [BuyerConroller::class, 'MyAcceptedBid']);



    Route::get('payment/{id}', [PaymentController::class, 'payment'])->name('payment');
    Route::post('payment/{id}', [PaymentController::class, 'mollie'])->name('stripePost');
    Route::get('success', [PaymentController::class, 'success'])->name('success');
    Route::get('cancel', [PaymentController::class, 'cancel'])->name('cancel');


    //profile
    Route::get('profile/{id}',[ProfileController::class, 'Profile'])->name('profile');
//    Route::put('profile/{id}',[ProfileController::class, 'UpdateProfile'])->name('UpdateProfile');
    Route::put('profile/{id}', [ProfileController::class, 'UpdateProfile'])->name('UpdateProfile');

});

//Auth

Route::get('register', [AuthController::class, 'showRegister']);
Route::get('login', [AuthController::class, 'showLogin']);



Route::controller(AuthController::class)->group(function()
{
    Route::post('login','login')->name('login');
    Route::post('register','register')->name('register');
});






//Route::middleware('auth:sanctum')->group(function()
//{
//    Route::get('/products', [ProductsController::class, 'index']);
//
//});




