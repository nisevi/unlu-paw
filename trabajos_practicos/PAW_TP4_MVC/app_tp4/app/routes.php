<?php

$router->get('', 'LandingPagesController@home');

$router->get('appointments', 'AppointmentsController@index');
$router->get('appointments/show', 'AppointmentsController@show');
$router->get('appointments/edit', 'AppointmentsController@edit');
$router->post('appointments/delete', 'AppointmentsController@delete');
$router->post('appointments/update', 'AppointmentsController@update');
$router->post('appointments/save', 'AppointmentsController@save');

$router->get('not_found', 'ErrorsController@not_found');
$router->get('internal_error', 'ErrorsController@internal_error');
