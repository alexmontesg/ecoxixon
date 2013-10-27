<?php
class EventosController extends AppController{
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('getAll');
		$this->Auth->allow('getAllLimit');
	}
	public function getAll(){
		return $this->Evento->find("all");
	}
	
	public function getAllLimit($limite){
		return $this->Evento->find("all");
		
	}
}