<?php

namespace Up\USM\Controller;

use Up\USM\Manager;

class Option
{
	private Manager\Option $optionManager;

	public function __construct()
	{
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