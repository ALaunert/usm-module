<?php

class TaskListComponent extends CBitrixComponent
{
	public static function addTask(): void
	{
		$taskName = \Bitrix\Main\Context::getCurrent()->getRequest()->getPost('name');
		if (!trim($taskName))
		{
			LocalRedirect("/");
		}
		\Up\Tasks\TaskManager\Task::addTask($taskName);
	}

	public static function deleteTask(int $id): void
	{
		\Up\Tasks\TaskManager\Task::deleteTask($id);
	}

	public function executeComponent()
	{
		$this->fetchTaskList();
		$this->includeComponentTemplate();
	}

	protected function fetchTaskList(): void
	{
		$data = \Up\Tasks\TaskManager\Task::getTasksList();
		$this->arResult['TASKS'] = $data;
	}

}