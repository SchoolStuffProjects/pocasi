<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Kontroler::getbundesland');

$routes->get('kartaSpolkZeme/(:num)','Kontroler::getIndividualBundesland/$1');
