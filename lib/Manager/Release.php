<?php

namespace Up\USM\Manager;

use Up\USM\Model\ReleaseTable;

class Release
{
	public function getListByIds(array $ids): array
	{
		return ReleaseTable::query()->where(['ID', $ids])->fetchCollection();
	}
}