<?php

/**
 * @var array $arResult
 * @var array $arParams
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}
// \Bitrix\Main\UI\Extension::load('task.list');
\Bitrix\Main\UI\Extension::load('up.task');

?>
<div id="application"></div>
<script type="text/javascript">
	const taskList = new BX.Up.Tasks.TaskList('#application');
	taskList.start();
</script>

<!--<div class="columns">-->
<!--	<div class="column is-6 is-offset-3">-->
<!--		<form action="/tasks/add" id="add-task-form" method="post">-->
<!--			<div class="field has-addons">-->
<!--				<div class="control task-input">-->
<!--					<input class="input" id="add-task-field" type="text" placeholder="Введите новую задачу" name="name" required>-->
<!--				</div>-->
<!--				<div class="control">-->
<!--					<button class="button is-info">-->
<!--						Добавить-->
<!--					</button>-->
<!--				</div>-->
<!--			</div>-->
<!--		</form>-->
<!--	</div>-->
<!---->
<!--</div>-->
<!---->
<!--<nav class="panel">-->
<!--	<p class="panel-heading">Задачи</p>-->
<!--	--><?php //if (!empty($arResult['TASKS'])): ?>
<!--		--><?php //foreach ($arResult['TASKS'] as $task): ?>
<!--			<div class="panel-block is-active">-->
<!--				--><?php //= htmlspecialcharsEx($task['NAME']) ?>
<!--				<form action="/tasks/delete/--><?php //= $task['ID'] ?><!--" class="delete-task-form" method="post">-->
<!--					<button type="submit" class="icon has-text-danger delete-btn">-->
<!--						<i style="font-size:24px" class="fa">&#xf05e;</i>-->
<!--					</button>-->
<!--				</form>-->
<!--			</div>-->
<!--		--><?php //endforeach; ?>
<!--	--><?php //else: ?>
<!--		<div class="panel-block is-active">-->
<!--			<p>Нет задач. Пожалуйста, добавьте новую задачу с помощью формы выше ⬆️</p>-->
<!--		</div>-->
<!--	--><?php //endif; ?>
<!--</nav>-->
<!---->
<!--<script>-->
<!--	const addTaskForm = document.getElementById('add-task-form');-->
<!--	const addTaskField = document.getElementById('add-task-field');-->
<!--	addTaskForm.addEventListener('submit', (e) => {-->
<!--		if (addTaskField.value.trim().length === 0)-->
<!--		{-->
<!--			e.preventDefault();-->
<!--			addTaskField.classList.add('alert-danger');-->
<!--			addTaskField.placeholder = 'Заполните данное поле!';-->
<!--		}-->
<!--	});-->
<!--	addTaskField.addEventListener('keypress', () => {-->
<!--		if (addTaskField.classList.contains('alert-danger'))-->
<!--		{-->
<!--			addTaskField.classList.remove('alert-danger');-->
<!--			addTaskField.placeholder = 'Введите новую задачу';-->
<!--		}-->
<!--	});-->
<!--</script>-->