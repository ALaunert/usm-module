<?php

namespace Up\USM\Model;

use Bitrix\Main\Localization\Loc, Bitrix\Main\ORM\Data\DataManager, Bitrix\Main\ORM\Fields\IntegerField;

Loc::loadMessages(__FILE__);

/**
 * Class OptionTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> STEP_ID int mandatory
 * <li> CHILD_USER_STORY_MAP_ID int mandatory
 * <li> RELEASE_ID int mandatory
 * </ul>
 *
 * @package Bitrix\Option
 **/
class OptionTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'up_option';
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
						'title' => Loc::getMessage('OPTION_ENTITY_ID_FIELD'),
					]
			),
			new IntegerField(
				'STEP_ID', [
							 'required' => true,
							 'title' => Loc::getMessage('OPTION_ENTITY_STEP_ID_FIELD'),
						 ]
			),
			new IntegerField(
				'CHILD_USER_STORY_MAP_ID', [
											 'required' => true,
											 'title' => Loc::getMessage('OPTION_ENTITY_CHILD_USER_STORY_MAP_ID_FIELD'),
										 ]
			),
			new IntegerField(
				'RELEASE_ID', [
								'required' => true,
								'title' => Loc::getMessage('OPTION_ENTITY_RELEASE_ID_FIELD'),
							]
			),
		];
	}
}