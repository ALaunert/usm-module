<?php

namespace Up\USM\Model;

use Bitrix\Main\Localization\Loc, Bitrix\Main\ORM\Data\DataManager, Bitrix\Main\ORM\Fields\IntegerField;

Loc::loadMessages(__FILE__);

/**
 * Class StepTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ACTOR_ID int mandatory
 * </ul>
 *
 * @package Bitrix\Step
 **/
class StepTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'up_step';
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
						'title' => Loc::getMessage('STEP_ENTITY_ID_FIELD'),
					]
			),
			new IntegerField(
				'ACTOR_ID', [
							  'required' => true,
							  'title' => Loc::getMessage('STEP_ENTITY_ACTOR_ID_FIELD'),
						  ]
			),
		];
	}
}