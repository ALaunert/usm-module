<?php

namespace Up\USM\Model;

use Bitrix\Main\Localization\Loc, Bitrix\Main\ORM\Data\DataManager, Bitrix\Main\ORM\Fields\IntegerField;

Loc::loadMessages(__FILE__);

/**
 * Class UserStoryMapTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * </ul>
 *
 * @package Bitrix\User
 **/
class UserStoryMapTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'up_user_story_map';
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
						'title' => Loc::getMessage('STORY_MAP_ENTITY_ID_FIELD'),
					]
			),
		];
	}
}