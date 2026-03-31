<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\db_controller;
use App\Models\Appt;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [db_controller::class, 'index'])
->name('index');




Route::get('/pages/create', function () {
return view('pages.create');
})->name('pages.create');

// edit this  [already done]


Route::post('/pages/create', function(){ 
Appt::create([

'Patient_LN' => request('lname'),
'Patient_FN' => request('fname'),

'phone_number' => request('pnumber'),
'email' => request('email'),
'HomeAddress' => request('address'),
'Doctor_Assigned' => request('doctor'),
'Date' => request('date'),
'Time_slot' => request('time'),
'Status' => request('status')
]);
return redirect()->route('index');
}); 

// EDIT FORM 
Route::get('/appts/{id}/edit', function ($id) {
    $appt = Appt::findOrFail($id);
    return view('pages.edit', ['appt' => $appt]);
});

// UPDATE DATA
Route::put('/appts/{id}', function ($id) {
    $appt = Appt::findOrFail($id);

    $appt->update([
        'Patient_LN' => request('lname'),
        'Patient_FN' => request('fname'),
        'phone_number' => request('pnumber'),
        'email' => request('email'),
        'HomeAddress' => request('address'),
        'Doctor_Assigned' => request('doctor'),
        'Date' => request('date'),
        'Time_slot' => request('time'),
        'Status' => request('status'),
    ]);

    return redirect('/')->with('success', 'Updated!');
});

// for the delete page
Route::delete('/appts/{id}', function ($id) {
    Appt::destroy($id);
    return back();


    
});

