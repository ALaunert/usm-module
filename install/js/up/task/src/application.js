import { BitrixVue } from 'ui.vue3';
import { Dom, Loc } from 'main.core';

import { Cards } from './components/cards';

export class TaskList
{
	#application;

	constructor(rootNode)
	{
		this.rootNode = document.querySelector(rootNode);
	}

	start()
	{
		const button = Dom.create('button', {
			text: Loc.getMessage('TASK_MANAGER_OPEN'),
			events: {
				click: () => this.attachTemplate(),
			},
		});
		Dom.append(button, this.rootNode);
	}

	attachTemplate()
	{
		const context = this;

		this.#application = BitrixVue.createApp({
			name: 'TaskList',
			components: {
				Cards,
			},
			beforeCreate()
			{
				this.$bitrix.Application.set(context);
			},
			template: '<Cards/>',
		});
		this.#application.mount(this.rootNode);
	}

	detachTemplate()
	{
		if (this.#application)
		{
			this.#application.unmount();
		}

		this.start();
	}
}