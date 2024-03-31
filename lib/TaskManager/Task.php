<?php

namespace Up\Tasks\TaskManager;

use Up\Tasks\Model;

class Task
{
	/**
	 * @throws \Exception
	 */
	public static function deleteTask(int $taskId): void
	{

		$result = Model\TaskTable::delete($taskId);
		if ($result->isSuccess())
		{
			LocalRedirect("/");
		}
	}

	public static function addTask(string $taskName): void
	{
		$task = new Model\EO_Task();
		$task->setName($taskName);
		$result = $task->save();
		if ($result->isSuccess())
		{
			LocalRedirect("/");
		}
	}

	public static function getTasksList(): ?Model\EO_Task_Collection
	{
		return Model\TaskTable::query()->setSelect(['ID', 'NAME'])->fetchCollection();
	}
}