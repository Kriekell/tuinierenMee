<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//http://localhost:8000/api/users
$router->group(['prefix' => 'api'], function () use ($router) {
    // get request
    $router->get('users',  ['uses' => 'UserController@showAllUsers']);

    $router->get('users/{id}', ['uses' => 'UserController@showOneUser']);

    $router->post('users', ['uses' => 'UserController@createUser']);

    $router->delete('users/{id}', ['uses' => 'UserController@deleteUser']);

    $router->put('users/{id}', ['uses' => 'UserController@updateUser']);

    $router->get('gardens',  ['uses' => 'GardenController@showAllUsers']);
});

//http://localhost:8000/api/gardens
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('gardens',  ['uses' => 'GardenController@showAllGardens']);

    $router->get('gardens/{id}', ['uses' => 'GardenController@showOneGarden']);

    $router->post('gardens', ['uses' => 'GardenController@createGarden']);

    $router->delete('gardens/{id}', ['uses' => 'GardenController@deleteGarden']);

    $router->put('gardens/{id}', ['uses' => 'GardenController@updateGarden']);
});

//http://localhost:8000/api/alarms
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('alarms',  ['uses' => 'AlarmController@showAllAlarms']);

    $router->get('alarms/{id}', ['uses' => 'AlarmController@showOneAlarm']);

    $router->post('alarms', ['uses' => 'AlarmController@createAlarm']);

    $router->delete('alarms/{id}', ['uses' => 'AlarmController@deleteAlarm']);

    $router->put('alarms/{id}', ['uses' => 'AlarmController@updateAlarm']);
});

//http://localhost:8000/api/notes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('notes',  ['uses' => 'NoteController@showAllNotes']);

    $router->get('notes/{id}', ['uses' => 'NoteController@showOneNote']);

    $router->post('notes', ['uses' => 'NoteController@createNote']);

    $router->delete('notes/{id}', ['uses' => 'NoteController@deleteNote']);

    $router->put('notes/{id}', ['uses' => 'NoteController@updateNote']);
});

//http://localhost:8000/api/addresses
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('addresses',  ['uses' => 'AddressController@showAllAddresses']);

    $router->get('addresses/{id}', ['uses' => 'AddressController@showOneAddress']);

    $router->post('addresses', ['uses' => 'AddressController@createAddress']);

    $router->delete('addresses/{id}', ['uses' => 'AddressController@deleteAddress']);

    $router->put('addresses/{id}', ['uses' => 'AddressController@updateAddress']);
});