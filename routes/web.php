<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/my_tickets', [TicketController::class, 'getTickets'])->name('tickets.get');

Route::get('/new_ticket', [TicketController::class, 'makeTicket']);

Route::get('/my_tickets/ticket/{id}', [TicketController::class, 'show'])->name('ticket.show');

Route::post('/ticket/store', [TicketController::class, 'store'])->name('ticket.store');