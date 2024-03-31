<?php

namespace Up\USM\Controller;

use Up\USM\Manager;

class Release
{
	private Manager\Release $releaseManager;

	public function __construct()
	{
		$this->releaseManager = new Manager\Release();
	}

	public function getListAction(array $ids): array
	{
		$releases = $this->releaseManager->getListByIds($ids);

		$releasesJson = [];
		foreach ($releases as $release)
		{
			$releasesJson[] = [
				'id' => $release->getId(),
				'name' => $release->getName(),
			];
		}

		return $releasesJson;
	}
}