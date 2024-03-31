<?php

namespace Up\USM\Manager;

use Up\USM\Model\UserStoryMapTable;

class UserStoryMap
{
	public function getList(): array
	{
		return UserStoryMapTable::query()->fetchCollection();
	}
}
