<?php
class EventosCategoria extends AppModel{
	public $belongsTo=array("Evento", "Categoria");
}