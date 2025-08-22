<?php
class Organo extends AppModel {
	var $name = 'Organo';
	var $displayField = 'nombre';


	var $validate = array(
        'nombre' => array( 'rule1' => array('rule' => 'notEmpty','allowEmpty' => false,'message' => 'Dato invalido.'),
	 		  		    'isUnique' => array('rule' => array('isUnique'),'message' => 'Fuente de Financiamiento ya existe.')
 ));



}
