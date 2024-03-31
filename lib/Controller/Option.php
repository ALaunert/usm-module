<?php

namespace Up\USM\Controller;

use Up\USM\Manager;

<<<<<<< HEAD
class Option
=======
class Option extends \Bitrix\Main\Engine\Controller
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
{
	private Manager\Option $optionManager;

	public function __construct()
	{
<<<<<<< HEAD
=======
		parent::__construct();
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
		$this->optionManager = new Manager\Option();
	}

	public function getListAction(int $stepId): array
	{
		$options = $this->optionManager->getListByStepId($stepId);

		$optionsJson = [];
		foreach ($options as $option)
		{
			$optionsJson[] = [
				'id' => $option->getId(),
				'stepId' => $option->getStepId(),
				'childUserStoryMapId' => $option->getChildUserStoryMapId(),
				'releaseId' => $option->getReleaseId(),
			];
		}

		return $optionsJson;
	}
}