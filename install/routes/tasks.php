<?php

use Bitrix\Main\Routing\Controllers\PublicPageController;
use Bitrix\Main\Routing\RoutingConfigurator;

return function(RoutingConfigurator $routes) {
<<<<<<< HEAD
	$routes->get('/', new PublicPageController('/local/modules/up.tasks/views/task-list.php'));
	$routes->get('/tasks/', new PublicPageController('/local/modules/up.tasks/views/task-list.php'));
=======
	$routes->get('/', new PublicPageController('/local/modules/up.usm/views/task-list.php'));
	$routes->get('/tasks/', new PublicPageController('/local/modules/up.usm/views/task-list.php'));
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)

	$routes->post('/tasks/add', function() {
		TaskListComponent::addTask();
	});

	$routes->post('/tasks/delete/{id}', function($id) {
		TaskListComponent::deleteTask($id);
	});
	$routes->get('/1', new PublicPageController('/local/example.php'));
};