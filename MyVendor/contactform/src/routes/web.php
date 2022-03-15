<?php
// MyVendor\contactform\src\routes\web.php
use MyVendor\Contactform\Http\Controllers\HomeController;
Route::get('contact',[HomeController::class,'index']);
Route::post('contact',[HomeController::class,'saveForm'])->name('contact');

?>