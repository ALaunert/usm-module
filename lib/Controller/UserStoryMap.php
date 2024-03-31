<?php

namespace Up\USM\Controller;

use Up\USM\Manager;

<<<<<<< HEAD
class Step
=======
class Step extends \Bitrix\Main\Engine\Controller
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
{
	private Manager\UserStoryMap $userStoryMapManager;

	public function __construct()
	{
<<<<<<< HEAD
=======
		parent::__construct();
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
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