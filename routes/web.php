<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShippedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PhotoController;

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/product/phone', function () {
    echo "Welcome Phone";
});

Route::get(
    'categories/update/{id}',
    function ($id) {
        return "Category $id updated";
    }
);

Route::get('/greeting/{name}', function ($name) {
    return "Welcome $name";
});

// Route::get('/product/{id}', function($id){
//     return "Product $id test";
// })->whereNumber('id');

Route::get('/product/{id}', function ($id) {
    return "Product $id test";
})->where(['id' => '[0-9]+']);    //regular expression

Route::get('/dashboard/admin/{name}', function () {
    return "Test admin";
})->whereIn('name', ['Fatma', 'Peter']);


Route::prefix('cars')->group(function () {

    Route::get('bmw', function () {
        return "Test Bmw";
    });
    Route::get('merc', function () {
        return "Test Mercedes";
    });
});

Route::prefix('customers')->group(function () {

    Route::get('Insert', function () {
        return "Test Insert Customer";
    });
    Route::get('Update', function () {
        return "Test Update";
    });
    Route::get('Delete/{id}', function () {
        return "Test Mercedes";
    });
});

Route::fallback(function () {
    return redirect('/');
});

Route::get('/home', function () {
    return view('welcome');
});

//Form Route 
Route::view('/testForm', 'form');           //return form view

Route::post('/receive', function () {       //return form action
    return "Data Recived";
})->name('receivedata');        //named route

//Customer Controller
Route::get('/custIndex', [CustomerController::class, 'index']);
Route::get('/custShow', [CustomerController::class, 'show']);


//Contact Controller
Route::get('/contact_us/{age}', [ContactController::class, 'show'])->middleware('checkAge');
Route::post('/contact_data', [ContactController::class, 'data'])->name('contact_data');


//User Profile Controller
Route::get('/user_profile', UserProfileController::class);

//Category Controller 
// Route::get('categories',[CategoryController::class,'index']);
// Route::get('categories_create',[CategoryController::class,'create']);
Route::resource('categories', CategoryController::class);


Route::get('/admin_panel/{typeofuser}', function () {
    return "Admin Panel here...";
})->middleware('isAdmin');


//Customer Controller
Route::get('customer/create', [CustomerController::class, 'create']);
Route::post('customer/store', [CustomerController::class, 'store'])->name('store');
Route::get('customer/All', [CustomerController::class, 'all_data']);
Route::get('/editCust/{id}', [CustomerController::class, 'edit']);
Route::put('updateCust/{id}', [CustomerController::class, 'update'])->name('updateCust');
Route::get('/showCust/{id}', [CustomerController::class, 'show']);
Route::delete('/deleteCust', [CustomerController::class, 'destroy'])->name('deleteCust');
Route::get("deleted", [CustomerController::class, "showDeleted"])->name('showDeleted');
Route::post("restore", [CustomerController::class, "restore"])->name('restore');


Route::view('/about', 'about');

//Admin Routes
Route::get('admin/users', [UserController::class, 'index'])->name('allusers');
Route::get('admin/users/add', [UserController::class, 'create'])->name('adduser');
Route::post('admin/users/add', [UserController::class, 'store'])->name('storeUser');
Route::get('admin/users/edit/{id}', [UserController::class, 'edit']);
Route::put('admin/users/update/{id}', [UserController::class, 'update'])->name('updateUser');
Route::get('admin/users/delete/{id}', [UserController::class, 'destroy']);
Route::get('/user/phone', [UserController::class, 'user_phone']);

//Phone
Route::get('phone', [PhoneController::class, 'phone']);

//Orders
Route::get('/customer/orders', [OrderController::class, 'cust_orders']);
Route::get('/customer/data', [OrderController::class, 'cust_data']);



//Posts
Route::get('post/all', [PostController::class, 'index'])->name('allposts');
Route::get('admin/posts/edit/{id}', [PostController::class, 'edit']);
Route::put('admin/posts/update/{id}', [PostController::class, 'update'])->name('updatePost');
Route::get('admin/posts/delete/{id}', [PostController::class, 'destroy']);
Route::get('/admin/posts/show/{id}', [PostController::class, 'show']);
Route::get('/user/posts/{id}', [PostController::class, 'user_posts']);


//Mail
Route::get('/sendEmail', [ShippedController::class, 'send_mail']);
Route::get('/contactMail', [ContactController::class, 'send_mail']);


//Upload File

Route::get('/upload/photo', [PhotoController::class, 'photo']);

Route::post('/upload/photo', [PhotoController::class, 'upload'])->name('upload.photo');
