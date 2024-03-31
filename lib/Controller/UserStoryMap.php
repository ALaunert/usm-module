<?php

namespace Up\USM\Controller;

use Up\USM\Manager;

class Step
{
	private Manager\UserStoryMap $userStoryMapManager;

	public function __construct()
	{
		$this->userStoryMapManager = new Manager\UserStoryMap();
	}

	public function getListAction(): array
	{
		$userStoryMaps = $this->userStoryMapManager->getList();

		$userStoryMapsJson = [];
		foreach ($userStoryMaps as $userStoryMap)
		{
			$userStoryMapsJson[] = [
				'id' => $userStoryMap->getId(),
			];
		}

		return $userStoryMapsJson;
	}
}