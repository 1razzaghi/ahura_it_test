<?php

use Illuminate\Support\Facades\Route;
use Salarmehr\Cosmopolitan\Cosmo;

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

/*Route::get('/', function () {
    //dd(\Salarmehr\Cosmopolitan\Cosmo::create('pl')->spellout(5000000));
    try
    {
        $response = 'Result for ' . "\r\n";
        $cosmo    = new Cosmo('fa');
        $language = $cosmo->language();
        $country  = $cosmo->country();
        $flag     = $cosmo->flag(); // emoji flag of the country

        $response .= "$flag $country - $language" . "\r\n";

        $response .= $cosmo->spellout(1000);
    }
    catch (\Exception $e)
    {
        return response()->json($e->getMessage());
    }

    //return response()->json(Cosmo::create($request->language)->spellout($request->number));
    return response()->json($response);

    return view('welcome');
});*/

Route::get('/', function () {
    return view('test_api');
});

Route::get('/test', function () {
    return view('test_api');
});

Route::get('/tt', [\App\Http\Controllers\HomeController::class, 'converts'])->name('convert');

