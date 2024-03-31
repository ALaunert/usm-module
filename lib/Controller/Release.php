<?php

namespace Up\USM\Controller;

use Up\USM\Manager;

<<<<<<< HEAD
class Release
=======
class Release extends \Bitrix\Main\Engine\Controller
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
{
	private Manager\Release $releaseManager;

	public function __construct()
	{
<<<<<<< HEAD
=======
		parent::__construct();
>>>>>>> 48e2275 (fixed extends problem with controller classes, added .settings.php)
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