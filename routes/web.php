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

use Illuminate\Support\Facades\Route;

Route::get('/login', function(){
   return view('login');
})->name('login');

Route::get('/login/create', function(\Illuminate\Http\Request $request){
    $request->session()->put('is_login','login');
    return redirect("/");
})->name('login.create');

Route::get('/logout', function(\Illuminate\Http\Request $request){
    $request->session()->forget('is_login');
    return redirect('/login');
});

Route::get('/dashboard', function (){
   return view('welcome');
})->where('dashboard', '[\/\w\.-]*')->name('dashboard');


Route::get('/', function () {
    return view('welcome');
})->middleware('sessionLogin');

Route::group(['prefix'=>'roles', 'as' => 'roles.'], function(){
    Route::get('/', function(){
        return view('welcome');
    })->where('role', '[\/\w\.-]*')->name('index');
    Route::get('/edit/{id}', function(){
        return view('welcome');
    })->where('role-edit', '[\/\w\.-]*')->name('edit');
   Route::get('create', function(){
      return view('welcome');
   })->where('role-create', '[\/\w\.-]*')->name('create');
});


Route::group(['prefix'=>'permissions', 'as' => 'permissions.'], function(){
   Route::get('/', function(){
      return view('welcome');
   })->where('permission', '[\/\w\.-]*')->name('index');
    Route::get('/edit/{id}', function(){
        return view('welcome');
    })->where('edit-permission', '[\/\w\.-]*')->name('edit');
   Route::get('/create', function(){
      return view('welcome');
   })->where('create-permission', '[\/\w\.-]*')->name('create');
});

Route::group(['prefix' => 'listcustomer', 'as' => 'listcustomer.'], function(){
    Route::get('/', function(){
        return view('welcome');
    })->where('list-customers', '[\/\w\.-]*')->name('index');
    Route::get('/edit/{id}', function(){
        return view('welcome');
    })->where('edit-list-customers', '[\/\w\.-]*')->name('edit');
    Route::get('/create', function(){
        return view('welcome');
    })->where('create-list-customers', '[\/\w\.-]*')->name('create');
});

Route::group(['prefix' => 'loyalty', 'as' => 'loyalty.'], function(){
    Route::get('/', function(){
        return view('welcome');
    })->where('list-loyalty', '[\/\w\.-]*')->name('index');
    Route::get('/edit/{id}', function(){
        return view('welcome');
    })->where('edit-list-loyalty', '[\/\w\.-]*')->name('edit');
    Route::get('/create', function(){
        return view('welcome');
    })->where('create-list-loyalty', '[\/\w\.-]*')->name('create');
});

Route::group(['prefix' => 'location', 'as' => 'location.'], function(){
    Route::get('/', function(){
        return view('welcome');
    })->where('list-location', '[\/\w\.-]*')->name('index');
    Route::get('/edit/{id}', function(){
        return view('welcome');
    })->where('edit-list-location', '[\/\w\.-]*')->name('edit');
    Route::get('/create', function(){
        return view('welcome');
    })->where('create-list-location', '[\/\w\.-]*')->name('create');
});
Route::group(['prefix' => 'category', 'as' => 'category.'], function(){
    Route::get('/', function(){
        return view('welcome');
    })->where('list-category', '[\/\w\.-]*')->name('index');
    Route::get('/edit/{id}', function(){
        return view('welcome');
    })->where('edit-list-category', '[\/\w\.-]*')->name('edit');
    Route::get('/create', function(){
        return view('welcome');
    })->where('create-list-category', '[\/\w\.-]*')->name('create');
});
Route::group(['prefix' => 'classes', 'as' => 'classes.'], function(){
    Route::get('/', function(){
        return view('welcome');
    })->where('list-classes', '[\/\w\.-]*')->name('index');
    Route::get('/edit/{id}', function(){
        return view('welcome');
    })->where('edit-list-classes', '[\/\w\.-]*')->name('edit');
    Route::get('/create', function(){
        return view('welcome');
    })->where('create-list-classes', '[\/\w\.-]*')->name('create');
});
Route::group(['prefix' => 'building', 'as' => 'building.'], function(){
    Route::get('/', function(){
        return view('welcome');
    })->where('list-building', '[\/\w\.-]*')->name('index');
    Route::get('/edit/{id}', function(){
        return view('welcome');
    })->where('edit-list-building', '[\/\w\.-]*')->name('edit');
    Route::get('/create', function(){
        return view('welcome');
    })->where('create-list-building', '[\/\w\.-]*')->name('create');
});
Route::group(['prefix' => 'vehicletypes', 'as' => 'vehicletypes.'], function(){
    Route::get('/', function(){
        return view('welcome');
    })->where('list-vehicle-types', '[\/\w\.-]*')->name('index');
    Route::get('/edit/{id}', function(){
        return view('welcome');
    })->where('edit-vehicle-types', '[\/\w\.-]*')->name('edit');
    Route::get('/create', function(){
        return view('welcome');
    })->where('create-vehicle-types', '[\/\w\.-]*')->name('create');
});
Route::group(['prefix' => 'vehiclebrands', 'as' => 'vehiclebrands.'], function(){
    Route::get('/', function(){
        return view('welcome');
    })->where('list-vehicle-brands', '[\/\w\.-]*')->name('index');
    Route::get('/edit/{id}', function(){
        return view('welcome');
    })->where('edit-vehicle-brands', '[\/\w\.-]*')->name('edit');
    Route::get('/create', function(){
        return view('welcome');
    })->where('create-vehicle-brands', '[\/\w\.-]*')->name('create');
});

Route::get('/delete', function(){

    $roles = \App\Role::find(20);

    $roles->permission()->detach([14]);
    return 'sukses';
});

