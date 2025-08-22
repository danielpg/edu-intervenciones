<?php
class CategoriasPadre extends AppModel {

	var $name = 'CategoriasPadre';
	var $displayField = "nombre";
	var $order = "CategoriasPadre.nombre ASC";

	var $validate = array(
        'nombre' => array(
			'rule' => 'notEmpty',
			'allowEmpty' => false,
			'message' => 'Dato invalido.'
		));

}


?>
