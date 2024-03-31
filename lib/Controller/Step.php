<?php

namespace Up\USM\Controller;

use Up\USM\Manager;

<<<<<<< HEAD
class Step
=======
class Step extends \Bitrix\Main\Engine\Controller
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
{
	private Manager\Step $stepManager;

	public function __construct()
	{
<<<<<<< HEAD
=======
		parent::__construct();
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
		$this->stepManager = new Manager\Step();
	}

	public function getListAction(int $actorId): array
	{
		$steps = $this->stepManager->getListByActorId($actorId);

		$stepsJson = [];
		foreach ($steps as $step)
		{
			$stepsJson[] = [
				'id' => $step->getId(),
				'actorId' => $step->getName(),
			];
		}

		return $stepsJson;
	}
}