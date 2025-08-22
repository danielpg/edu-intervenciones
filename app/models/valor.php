<?php
class Valor extends AppModel {
	var $name = 'Valor';

	var $belongsTo = array(
		'DetalleCentrosEducativo' => array(
			'className' => 'DetalleCentrosEducativo',
			'foreignKey' => 'detalle_centro_educativo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),  'Intervencion' => array(
			'className' => 'Intervencion',
			'foreignKey' => 'intervencion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TiposPeriodo' => array(
			'className' => 'TiposPeriodo',
			'foreignKey' => 'tipo_periodo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $validate = array(
		'intervencion_id' => array(
			'rule' => 'notEmpty',
			'allowEmpty' => false,
			'message' => 'Dato invalido.'
		),
		'fecha_inicio' => array(
		'rule' => 'notEmpty',
		'allowEmpty' => false,
		'message' => 'Dato invalido.'
		),
		
		'fecha_fin' => array(
		'rule' => 'notEmpty',
		'allowEmpty' => false,
		'message' => 'Dato invalido.'
		));

}
