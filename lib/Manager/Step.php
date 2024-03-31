<?php

namespace Up\USM\Manager;

use Up\USM\Model\StepTable;

class Step
{
	public function getListByActorId(int $actorId): array
	{
		return StepTable::query()->where(['ACTOR_ID', $actorId])->fetchCollection();
	}
}