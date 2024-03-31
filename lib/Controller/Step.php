<?php

namespace Up\USM\Controller;

use Up\USM\Manager;

class Step
{
	private Manager\Step $stepManager;

	public function __construct()
	{
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