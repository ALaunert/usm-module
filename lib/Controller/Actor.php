<?php

namespace Up\USM\Controller;

use Up\USM\Manager;

class Actor
{
	private Manager\Actor $actorManager;

	public function __construct()
	{
		$this->actorManager = new Manager\Actor();
	}

	public function getListAction(int $userStoryMapId): array
	{
		$actors = $this->actorManager->getListByUserStoryMapId($userStoryMapId);

		$actorsJson = [];
		foreach ($actors as $actor)
		{
			$actorsJson[] = [
				'id' => $actor->getId(),
				'userStoryMapId' => $actor->getUserStoryMapId(),
			];
		}

		return $actorsJson;
	}
}