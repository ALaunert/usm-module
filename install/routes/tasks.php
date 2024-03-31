<?php

use Bitrix\Main\Routing\Controllers\PublicPageController;
use Bitrix\Main\Routing\RoutingConfigurator;

return function(RoutingConfigurator $routes) {
	$routes->get('/', new PublicPageController('/local/modules/up.tasks/views/task-list.php'));
	$routes->get('/tasks/', new PublicPageController('/local/modules/up.tasks/views/task-list.php'));

	$routes->post('/tasks/add', function() {
		TaskListComponent::addTask();
	});

	$routes->post('/tasks/delete/{id}', function($id) {
		TaskListComponent::deleteTask($id);
	});
	$routes->get('/1', new PublicPageController('/local/example.php'));
};