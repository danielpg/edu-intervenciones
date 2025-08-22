<?php
class Login extends AppModel {
	var $useTable = "usuarios";
	var $name = 'Login';
	/*
	var $validate = array(
		'username' => array(
		'alphaNumeric'=>array('rule'=>'alphaNumeric','required'=>true,'message'=>'Username can only contains letters'),
		'between' => array('rule' => array('between', 4, 10),'message' => 'Between 4 to 10 characters')),
		'password' => array('rule'=>array('alphaNumeric'),'required'=>true,'message'=>'Password for Login the system can only contains letters and numbers'),
		'user_id' => array('numeric')
	);
*/
	
	/*
	 * 
	 * 'email' => array(
        'rule' => array('email', true),
        'message' => 'Por favor indique una dirección de correo electrónico válida.'
    )
	 */
	function _validationRules(){
		$this->validate = array(
			'nombre' => array(
					'notempty'=>array('rule'=>array('notempty'),'message'=>__('Nombre no válido.',true)),
					'between' => array('rule' => array('between', 4, 20),'message' => __('Nombre debe tener entre 2 a 20 caracteres.',true))
			),
			'apellido' => array(
					'notempty'=>array('rule'=>array('notempty'),'message'=>__('Apellido no válido.',true)),
					'between' => array('rule' => array('between', 4, 20),'message' => __('Apellido debe tener entre 2 a 20 caracteres.',true))
			),
				
			'correo' => array(
						'rule' => array('email', true),
						'message' => 'Dirección de correo electrónico inválido.'
					//)
					/*
					array(
					'email'=>array('rule'=>array('email'),'message'=>__('Correo no valido',true)),
					'between' => array('rule' => array('between', 4, 20),'message' => __('Correo debe tener entre 5 a 20 caracteres',true)),
					*/
					/*
					'rule' => array('email', true),
					'message' => 'Por favor indique una dirección de correo electrónico válida.'
					*/
			),
				
			'usuario' => array(
				'notempty'=>array('rule'=>array('notempty'),'message'=>__('Usuario no válido.',true)),
				'between' => array('rule' => array('between', 4, 20),'message' => __('Usuario debe tener entre 4 a 20 caracteres.',true)),
				'isUnique' => array('rule' => array('isUnique'),'message' => __('Usuario ya existe.',true))
			),
			'contrasena' => array(
				'notempty'=>array('rule'=>array('notempty'),'message'=>__('Contraseña no válida.',true))
			)
		);
	}
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);
	
	
	function beforeSave(){
		if(isset($this->data['Login']['contrasena']) && !empty($this->data['Login']['contrasena'])) $this->data['Login']['contrasena'] = md5($this->data['Login']['contrasena']);
		return true;
	}
	
	function authenticate($data){

		$this->data = $data;
		$this->recursive = 0;
		$result = $this->find('first',
			array('conditions'=>
				array('Login.usuario'=>$this->data['Login']['username'],
					  'Login.contrasena'=>md5($this->data['Login']['password']),
			  		  'Login.estado'=> 1
				)
			)
		);
		
		//var_dump($result);exit;

		if($result != false){
			/*
			if($data['Login']['remember_me']){
			//	$time = Login_TIMEOUT_RM;
			}else{
				//$time = Login_TIMEOUT;
			}*/
			$time = 3600;
		
			
			$this->id = $result["Login"]["id"];
			$this->saveField("fecha_ingreso",date("Y-m-d H:i:s"));
			//$this->cleanMenuCache();
	
			//$acl = new ACL($result['Login']['id']);
			//Credentials::setPerms($acl->perms,$time);
			
			//$result['Roles'] = $acl->getUserRoles();

			$is_admin = false;
			//if(in_array(ROLE_ADMIN_ID,$result['Roles']))$is_admin = true;
			$result['is_admin'] = $is_admin;
			$result['Login']["role_id"] = $result['Login']["role_id"];
			
			//var_dump($acl->perms);exit;
			Credentials::set('logged_in',1,$time);
			//Credentials::set('remember_me',$data['Login']['remember_me'],$time);
			Credentials::set('__credentials',$result,$time);



			//Credentials::set('last_activity',time(),$time);
			if($result['Login']["role_id"]==1){ //admin
			$perms = array(
				"admin_access"	=> 1
			);
			} elseif($result['Login']["role_id"]==2){//supervisor
			$perms = array(
				"estudiantes_view" => 1,
				"estudiantes_edit" => 1,
				"participantes_view" => 1,
				"participantes_edit" => 1,
				"materiales_view" => 1,
				"materiales_edit" => 1,
				"historial_nucleos_view" => 1,
				"historial_nucleos_edit" => 1,
				"formato_edit" => 1
			);
			} elseif($result['Login']["role_id"]==3){//solo consulta
			$perms = array(
				"estudiantes_view" => 1,
				"participantes_view" => 1,
				"materiales_view" => 1,
				"historial_nucleos_view" => 1,
			);

			} elseif($result['Login']["role_id"]==4){//operador de nucleo { 
			$perms = array(
				"estudiantes_view" => 1,
				"estudiantes_edit" => 1,
				"materiales_view" => 1,
				"materiales_edit" => 1,
				"participantes_view" => 1,
				"participantes_edit" => 1,
				"historial_nucleos_view" => 1,
				"historial_nucleos_edit" => 1
			);


			}

			Credentials::set('__perms',$perms,$time);
			Credentials::can(false,$perms);	

			return true;
		} else {
			
			return false;
		}
		
		
	}
	
	function cleanMenuCache(){
		if(!Credentials::hasCredentials())return false;
		
		$list = Configure::read('lang_list');
		foreach($list as $code => $tmp){
       		@unlink(Configure::read('asterisk.tmp_path').'menuuser-'.Credentials::get('__credentials.User.id').'-'.$code.'.txt');
		}
		return true;	
	}

	
	function logout(){
		Credentials::set('__credentials',false);
		Credentials::set('perms',false);
		Credentials::set('logged_in',false);
		Credentials::set('remember_me',false);
		//Credentials::set('last_activity',false);
	}

}


?>
