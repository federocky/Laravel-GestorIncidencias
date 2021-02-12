<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Models\Ticket;
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
    return view('index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/my_tickets', [TicketController::class, 'index'])->name('ticket.index');

Route::get('/new_ticket', [TicketController::class, 'create'])->name('ticket.create');

Route::get('/my_tickets/ticket/{id}', [TicketController::class, 'show'])->name('ticket.show');

Route::post('/ticket/store', [TicketController::class, 'store'])->name('ticket.store');