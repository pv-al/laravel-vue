<?php
use Illuminate\Http\Request;

Route::resource('/tickets', 'TicketController',[
    'expect' => ['create, show, edit, delete'],
]);

Route::get('/user', function (){
   return [
       'user' => [
           'first_name' => 'Pavel',
           'last_name' => 'Alexeev',
       ]
    ];
});