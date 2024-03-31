<?php

namespace Up\USM\Manager;

use Up\USM\Model\ActorTable;

class Actor
{
<<<<<<< HEAD
	public function getListByUserStoryMapId(int $userStoryMapId): array
	{
		return ActorTable::query()->where(['USER_STORY_MAP_ID', $userStoryMapId])->fetchCollection();
=======
	public function getListByUserStoryMapId(int $userStoryMapId)
	{
		return ActorTable::query()->setSelect(['USER_STORY_MAP_ID'])->where('USER_STORY_MAP_ID', $userStoryMapId)
						 ->fetchCollection();
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
	}
}