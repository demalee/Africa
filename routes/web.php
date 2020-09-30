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
Route::middleware(['auth'])->group(function () {
Route::get('/', function () {
    return view('welcome');
});

Route::get('sms/inbox', function () {
    return view('sms/inbox');
});

    Route::get('users/group', function () {
        return view('users/group');
    });
    Route::get('users/bulk-group', function () {
        return view('users/bulk-group');
    });
    Route::get('users/users', function () {
        return view('users/users');
    });
    Route::get('users/report', function () {
        return view('users/report');

    });  Route::get('users/usercreate', function () {
        return view('users/usercreate');
    });
Route::get('sms/outbox', function () {

    return view('sms/outbox');

});
    Route::get('billing/index', function () {

        return view('billing/index');

    });
    Route::get('users/upload-contact', function () {

        return view('users/upload-contact');

    });
});

Route::post('post-bulk','App\Http\Controllers\OutboxController@postBulk')->name('postbulk');

Route::post('message-members','App\Http\Controllers\OutboxController@SendAllMembers')->name('messagemembers');




Route::get('coming-soon', function () {
    return view('coming-soon');
});
Route::get('sms/analytics', function () {
    return view('sms/analytics');
});
Route::get('pre-outbox', function () {
    return view('pre-outbox');
});
Route::get('pre-subscription', function () {
    return view('pre-subscription');
});
Route::get('pre-create', function () {
    return view('pre-create');
});
Route::get('analytics', function () {
    return view('analytics');
});
Route::get('create-codes', function () {
    return view('create-codes');
});
Route::get('alphanumeric', function () {
    return view('alphanumeric');
});
Route::get('create-alphanumeric', function () {
    return view('create-alphanumeric');
});
Route::get('create-alphanumeric', function () {
    return view('create-alphanumeric');
});
Route::get('delivery-report', function () {
    return view('delivery-report');
});
Route::get('incoming-msg', function () {
    return view('incoming-msg');
});
Route::get('bulk-sms', function () {
    return view('bulk-sms');
});
Route::get('subscription', function () {
    return view('bulk-sms');
});
Route::get('voice-phone', function () {
    return view('voice-phone');
});
Route::get('voice-number', function () {
    return view('voice-number');
});
Route::get('voice-sessions', function () {
    return view('voice-sessions');
});
Route::get('voice-analytics', function () {
    return view('voice-analytics');
});
Route::get('ussd-code', function () {
    return view('ussd-code');
});
Route::get('ussd-channel', function () {
    return view('ussd-channel');
});
Route::get('ussd-sessions', function () {
    return view('ussd-sessions');
});
Route::get('ussd-analytics', function () {
    return view('ussd-analytics');
});
Route::get('airtime-callback', function () {
    return view('airtime-callback');
});
Route::get('airtime-transaction', function () {
    return view('airtime-transaction');
});
Route::get('airtime-transaction', function () {
    return view('airtime-analytics');
});
Route::get('airtime-validation', function () {
    return view('airtime-validation');
});
Route::get('products', function () {
    return view('products');
});
Route::get('top-up', function () {
    return view('top-up');
});

Route::get('wallet', function () {
    return view('wallet');
});

Route::get('setting-products', function () {
    return view('setting-products');
});
Route::get('api', function () {
    return view('api');
});
Route::get('launch', function () {
    return view('launch');
});
Route::get('slack', function () {
    return view('slack');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
