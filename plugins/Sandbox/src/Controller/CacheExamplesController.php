<?php
namespace Sandbox\Controller;

/**
 */
class CacheExamplesController extends SandboxAppController {

	/**
	 * @return void
	 */
	public function initialize() {
		$this->loadComponent('Cache.Cache', [
			'actions' => [
				'minute' => MINUTE,
				'hour' => HOUR,
				'someJson' => MINUTE
			]
		]);
	}

	/**
	 * @return \Cake\Network\Response|null
	 */
	public function index() {
		$actions = $this->_getActions($this);
		$actions = array_diff($actions, ['someJson']);

		$this->set(compact('actions'));
	}

	/**
	 * @return \Cake\Network\Response|null
	 */
	public function minute() {
		$this->Flash->info('Will be cached for a minute!');
	}

	/**
	 * @return \Cake\Network\Response|null
	 */
	public function hour() {
		$this->Flash->info('Will be cached for an hour!');

		$this->autoRender = false;
		$this->render('minute');
	}

	/**
	 * @return void
	 */
	public function someJson() {
		$something = [
			'json' => 'this ddata is changed for 1 min',
			'generated' => date(FORMAT_DB_DATETIME),
		];

		$this->set(compact('something'));
		$this->set('_serialize', ['something']);
	}

}
