<?php
namespace ProcessWire;

require_once wire('config')->paths->AppApi . "vendor/autoload.php";
require_once wire('config')->paths->AppApi . "classes/AppApiHelper.php";

require_once __DIR__ . "/CreateUser.php";
require_once __DIR__ . "/Clients.php";
require_once __DIR__ . "/Notes.php";
require_once __DIR__ . "/Package.php";

$routes = [
  	['OPTIONS', 'test', ['POST']], // this is needed for CORS Requests
	  ['POST', 'add-user', CreateUser::class, 'addUser', ['auth' => false]],
	  
	'clients' => [
		['OPTIONS', '', ['GET']],
		['GET', '', Clients::class, 'getClients'],
		['GET', '{id:\d+}', Clients::class, 'getClients']
	],
	'notes' => [
		['OPTIONS', '', ['GET']],
		['GET', '', Notes::class, 'getNotes'],
		['GET', '{id:\d+}', Notes::class, 'getNotes']
	],

	'package' => [
		['OPTIONS', 'update-package', ['GET', 'POST']],
		['POST', 'update-package', Package::class, 'updatePackage'],
		['GET', 'get-package', Package::class, 'getPackage'],
	],
];