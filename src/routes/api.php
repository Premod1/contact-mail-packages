<?php
use Lopzy\Contact\Http\Controllers\ContactController;



Route::get('contact', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'send']);
