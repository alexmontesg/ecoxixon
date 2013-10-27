<?php
class Evento extends AppModel{
// 	public $hasAndBelongsToMany = array(
// 			'Evento' =>
// 			array(
// 					'className' => 'Evento',
// 					'joinTable' => 'eventos_categorias',
// 					'foreignKey' => 'categoria_id',
// 					'associationForeignKey' => 'evento_id',
// 					'unique' => true,
// 					'conditions' => '',
// 					'fields' => '',
// 					'order' => '',
// 					'limit' => '',
// 					'offset' => '',
// 					'finderQuery' => '',
// 					'with' => ''
// 			)
// 	);

	public $hasMany=array(
			'EventosCategoria'
			);
}