<?php
class Categoria extends AppModel {
	var $name = 'Categoria';
	var $displayField = 'nombre';

	var $validate = array(
        'nombre' => array(
					"rule1" => array('rule' => 'notEmpty','allowEmpty' => false,'message' => 'Dato invalido.'),
 		  		    'isUnique' => array('rule' => array('isUnique'),'message' => 'Tematica ya existe.')
		) ,
		'categoria_padre_id' => array(
			'rule' => 'notEmpty',
			'allowEmpty' => false,
			'message' => 'Dato invalido.'
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
	);


	var $belongsTo = array(
		'CategoriasPadre' => array(
			'className' => 'CategoriasPadre',
			'foreignKey' => 'categoria_padre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
