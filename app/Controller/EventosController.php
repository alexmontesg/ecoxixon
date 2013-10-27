<?php
class EventosController extends AppController{
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('getAll');
	}
	public function getAll(){
		return $this->Evento->find("all");
	}
}