<?php
class Intervencion extends AppModel {
	var $name = 'Intervencion';
	var $displayField = 'nombre';
	/*var $validate = array(
		'id' => array(
			'blank' => array(
				'rule' => array('blank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);*/

	var $validate = array(
        'nombre' => array(
			'rule' => 'notEmpty',
			'allowEmpty' => false,
			'message' => 'Dato invalido.'
		));


/*

	var $belongsTo = array(
		'Organo' => array(
			'className' => 'Organo',
			'foreignKey' => 'organo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

*/


}
