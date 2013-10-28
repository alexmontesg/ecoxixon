<?php
class EventosController extends AppController{
	public $uses=array("Evento", "Categoria");
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(array('getAllLimit', 'view'));
	}

	public function view($id = null) {
		$this->Evento->id = $id;
		if (!$this->Evento->exists()) {
			throw new NotFoundException(__('Evento no válido'));
		}
		$this->Evento->recursive = 2;
		$evento = $this->Evento->read(null, $id);
		$this->set('evento', $evento);
		$this->set("title_for_layout", "ecoxixón - Evento ".utf8_encode($evento['Evento']['name']));
	}
	
	public function getAll(){
		return $this->Evento->find("all");
	}
	
	public function getAllLimit($limite){
		$q="SELECT Evento . * , Categoria . *
FROM eventos AS Evento
INNER JOIN eventos_categorias AS j ON ( Evento.id = j.evento_id )
INNER JOIN categorias AS Categoria ON ( Categoria.id = j.categoria_id )
LIMIT 0 , $limite";
		//return $this->Evento->query($q);
		

		$this->Evento->recursive = 2;
		$eventos=$this->Evento->find("all", array("limit"=>$limite));
		if(!empty($eventos)){
			foreach($eventos as &$e){
				if($e['EventosCategoria'][0]['Categoria']){
					$e['Categoria'][]=$e['EventosCategoria'][0]['Categoria'];
				}
				unset($e['EventosCategoria']);
			}
		}
		return $eventos;
	}
}