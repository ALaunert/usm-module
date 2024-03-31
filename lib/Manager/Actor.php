<?php

namespace Up\USM\Manager;

use Up\USM\Model\ActorTable;

class Actor
{
	public function getListByUserStoryMapId(int $userStoryMapId): array
	{
		return ActorTable::query()->where(['USER_STORY_MAP_ID', $userStoryMapId])->fetchCollection();
	}
}