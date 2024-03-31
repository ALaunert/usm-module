<?php

namespace Up\USM\Model;

use Bitrix\Main\Localization\Loc, Bitrix\Main\ORM\Data\DataManager, Bitrix\Main\ORM\Fields\IntegerField;

Loc::loadMessages(__FILE__);

/**
 * Class ActorTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> USER_STORY_MAP_ID int mandatory
 * </ul>
 *
 * @package Bitrix\Actor
 **/
class ActorTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'up_actor';
	}

	/**
	 * Returns entity map definition.
	 *
	 * @return array
	 */
	public static function getMap()
	{
		return [
			new IntegerField(
				'ID', [
						'primary' => true,
						'autocomplete' => true,
						'title' => Loc::getMessage('ACTOR_ENTITY_ID_FIELD'),
					]
			),
			new IntegerField(
				'USER_STORY_MAP_ID', [
									   'required' => true,
									   'title' => Loc::getMessage('ACTOR_ENTITY_USER_STORY_MAP_ID_FIELD'),
								   ]
			),
		];
	}
}