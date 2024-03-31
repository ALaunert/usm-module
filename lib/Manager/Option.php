<?php

namespace Up\USM\Manager;

use Up\USM\Model\OptionTable;

class Option
{
	public function getListByStepId(int $stepId): array
	{
		return OptionTable::query()->where(['STEP_ID', $stepId])->fetchCollection();
	}
}