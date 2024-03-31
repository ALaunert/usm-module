<?php

namespace Up\USM\Controller;

use Up\USM\Manager;

<<<<<<< HEAD
class Actor
=======
class Actor extends \Bitrix\Main\Engine\Controller
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
{
	private Manager\Actor $actorManager;

	public function __construct()
	{
<<<<<<< HEAD
=======
		parent::__construct();
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
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