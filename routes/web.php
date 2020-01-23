<?php

Auth::routes();
Route::get('/home', 'HomeController@index')
    ->name('home');

// employees' routes
Route::get('/employees-index', 'EmployeeController@index')
    ->name('employees-index');
Route::get('/emplyoee/{id}', 'EmployeeController@show')
    ->name('employee-show')
    ->middleware('auth');
Route::delete('/emplyoee/{id}', 'EmployeeController@delete')
    ->name('employee-delete')
    ->middleware('auth');

// tasks' routes
Route::get('/tasks', 'TaskController@index');
