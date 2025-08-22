<?php
/**
 * This file is loaded automatically by the app/webroot/index.php file after the core bootstrap.php
 *
 * This is an application wide file to load any function that is not used within a class
 * define. You can also use this to include or require any files in your application.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 * This is related to Ticket #470 (https://trac.cakephp.org/ticket/470)
 *
 * App::build(array(
 *     'plugins' => array('/full/path/to/plugins/', '/next/full/path/to/plugins/'),
 *     'models' =>  array('/full/path/to/models/', '/next/full/path/to/models/'),
 *     'views' => array('/full/path/to/views/', '/next/full/path/to/views/'),
 *     'controllers' => array('/full/path/to/controllers/', '/next/full/path/to/controllers/'),
 *     'datasources' => array('/full/path/to/datasources/', '/next/full/path/to/datasources/'),
 *     'behaviors' => array('/full/path/to/behaviors/', '/next/full/path/to/behaviors/'),
 *     'components' => array('/full/path/to/components/', '/next/full/path/to/components/'),
 *     'helpers' => array('/full/path/to/helpers/', '/next/full/path/to/helpers/'),
 *     'vendors' => array('/full/path/to/vendors/', '/next/full/path/to/vendors/'),
 *     'shells' => array('/full/path/to/shells/', '/next/full/path/to/shells/'),
 *     'locales' => array('/full/path/to/locale/', '/next/full/path/to/locale/')
 * ));
 *
 */

/**
 * As of 1.3, additional rules for the inflector are added below
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 *
 */

date_default_timezone_set('America/Lima');

Inflector::rules('plural', array('irregular' => 
	array(
		'trabajador'=> 'trabajadores',
		'cargo'   => 'cargos',
		'dre'     => 'dres',
		'provincia'=> 'provincias',
		'valor'    => 'valores',
		'indicador'=> 'indicadores',
		'opcion'  => 'opciones',
		'lengua'  => 'lenguas',
		'forma'   => 'formas',
		'centro'   => 'centros',
		'codigo'   => 'codigos',
		'unidad'   => 'unidades',
		'poblado'   => 'poblados',
		'educativo'   => 'educativos',
		'local'   => 'locales',
		'dependencia'=> 'dependencias',
		'gestion'  => 'gestiones',
		'modalidad'=> 'modalidades',
		'nivel'   => 'niveles',
		/*'centro_educativo'=> 'centros_educativos',
		'centros_educativo'=> 'centros_educativos',
		'trabajador_unidad'=> 'trabajadores_unidades',
		'trabajadores_unidad'=> 'trabajadores_unidades',
		'centro_poblado'  => 'centros_poblados',
		'centros_poblado'  => 'centros_poblados',
		'codigo_local'    => 'codigos_locales',
		'codigos_local'    => 'codigos_locales'*/
	)
));

$pluralRules = array('/(.*)dre$/i' => '\1dres',  '/(.*)or$/i' => '\1ores','/(.*)n$/i' => '\1nes', '/(.*)d$/i' => '\1des','/(.*)o$/i' => '\1os', '/(.*)l$/i' => '\1les');
$singularRules = array('/(.*)_dres$/i' => '\1_dre', '/(.*)ores$/i' => '\1or', '/(.*)nes$/i' => '\1n', '/(.*)des$/i' => '\1d',  '/(.*)les$/i' => '\1l','/(.*)os$/i' => '\1o');

/*
$pluralRules = array('/(.*)r$/i' => '\1res','/(.*)n$/i' => '\1nes', '/(.*)d$/i' => '\1des','/(.*)o$/i' => '\1os', '/(.*)l$/i' => '\1les');
$singularRules = array('/(.*)res$/i' => '\1r', '/(.*)nes$/i' => '\1n', '/(.*)des$/i' => '\1d',  '/(.*)les$/i' => '\1l','/(.*)os$/i' => '\1o');
*/
Inflector::rules('plural', array('rules' => $pluralRules ));
Inflector::rules('singular', array('rules' => $singularRules ));

Inflector::rules('singular', array('irregular' => 
	array(
		'trabajadores'=> 'trabajador',
		'centros'   => 'centro',
		'codigos'   => 'codigo',
		'unidades'   => 'unidad',
		'poblados'   => 'poblado',
		'educativos'   => 'educativo',
		'locales'   => 'local',
		/*'centros_educativos'=> 'centro_educativo',
		'trabajadores_unidades'=> 'trabajador_unidad',
		'centros_poblados'  => 'centro_poblado',
		'codigos_locales'    => 'codigo_local'*/
	)
));

