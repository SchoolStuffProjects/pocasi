<?php

use App\Controllers\Kontroler;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Kontroler::getbundesland');

$routes->get('kartaSpolkZeme/(:num)','Kontroler::getIndividualBundesland/$1');

$routes->get('individualniStanice/(:num)', 'Kontroler::getIndividualStation/$1');

$routes->get('kartaSpolkZemeObr/(:num)','Kontroler::getIndividualBundeslandObr/$1');