<?php
//ini_set('max_execution_time',9000);
$date=get_date();
/*
 @mysql_query("SET NAMES 'utf8'");
*/
//$cn=mysql_connect("localhost","insanet_digete","d1g3t3");
//mysql_select_db("insanet_digete", $cn);
// "padron_EB_2010_nuevo.csv" 

$fp = fopen ( $file, "r" );
$error=array();
$i_row=1;
while (( $data = fgetcsv ( $fp , 1000 , "," )) !== FALSE ) { // Mientras hay lí­neas que leer..
	if($i_row>1){
		try{
			/*DRES*/
			$dre_name=trim($data[1]);
			$dre_id=validate($cn,"dres","nombre='$dre_name'",1);
			/*UNIDADES*/
			$unidad_name=trim($data[2]);
			$unidad_id=validate($cn,"unidades","nombre='$unidad_name' AND dre_id=$dre_id",2);
			
			/*codigo_modular, anexo, codigo_local*/
			$codigo_modular=validate_digits("codigo_modular",trim($data[3]));
			$anexo=$data[4];
			$codigo_local=validate_digits("codigo_local",trim($data[5]));
			
			/*FORMAS*/
			/*$forma_name=trim($data[6]);
			$forma_id=validate($cn,"formas","nombre='$forma_name'",6);
				*/
			/*NIVELES*/
			$nivel_name=trim($data[6]);
			$nivel_id=validate($cn,"niveles","nombre='$nivel_name'",6);
			
			/*DEPARTAMENTOS*/
			$departamento_name=trim($data[7]);
			$departamento_id=validate($cn,"departamentos","nombre='$departamento_name'",7);
				
			/*PROVINCIAS*/
			$provincia_name=trim($data[8]);
			$provincia_id=validate($cn,"provincias","nombre='$provincia_name' AND departamento_id=$departamento_id",8);
				
			/*DISTRITOS*/
			$distrito_name=trim(str_replace(array("/","1","2","3","4","5"), "", trim($data[9])));
			$distrito_id=validate($cn,"distritos","nombre='$distrito_name' AND provincia_id=$provincia_id",9);
			
			/*CENTROS POBLADOS*/
			$centro_poblado_name=trim($data[10]);
			$centro_poblado_id=validate($cn,"centros_poblados","nombre='$centro_poblado_name' AND distrito_id=$distrito_id",10);
				/*
			//AREAS
			$area_name=trim($data[13]);
			$area_id=validate($cn,"areas","nombre='$area_name'",13);
			
			//FUENTES AREAS
			$fuente_area_name=trim($data[14]);
			$fuente_area_id=validate($cn,"fuentes_areas","nombre='$fuente_area_name'",14);
				
			//VALIDACIONES
			$validacion_name=trim($data[15]);
			$validacion_id=validate($cn,"validaciones","nombre='$validacion_name'",15);
				*/
			/*direccion*/
			$direccion=trim($data[11]);
				
			//CARACTERISTICAS
		/*	$caracteristica_name=trim($data[17]);
			$caracteristica_id=validate($cn,"caracteristicas","nombre='$caracteristica_name'",17);
				*/
			/*TURNOS*/
			/*$turno_name=trim($data[18]);
			$turno_id=validate($cn,"turnos","nombre='$turno_name'",18);
				*/
			/*GESTIONES*/
			/*$gestion_name=trim($data[19]);
			$gestion_id=validate($cn,"gestiones","nombre='$gestion_name'",19);
				*/
			/*ESTADOS*/
			$estado_id=1;
			
			/*CENTROS EDUCATIVOS*/
			$centro_educativo_name=trim($data[8]);
			$centro_educativo_id=related_tables($cn,"centros_educativos",
					"codigo_local='$codigo_local' ",
					"(codigo_local,nombre,direccion,anexo,fecha_creacion,fecha_modificacion,centro_poblado_id) VALUES
					 ('$codigo_local','".mysql_real_escape_string($centro_educativo_name)."','".mysql_real_escape_string($direccion)."',$anexo,'$date','$date',$centro_poblado_id)",8);
				
			/*DETALLE CENTROS EDUCATIVOS*/
			$detalle_centro_educativo_id=related_tables($cn,"detalle_centros_educativos",
					"codigo_modular='$codigo_modular' AND 
					centro_educativo_id=$centro_educativo_id AND 
					nivel_id=$nivel_id ",
					"(codigo_modular,fecha_creacion,fecha_modificacion,centro_educativo_id,nivel_id,
					estado_id) VALUES 
					('$codigo_modular','$date','$date',$centro_educativo_id,$nivel_id,
					,$estado_id)",8);

			/*DETALLE CENTROS EDUCATIVOS*/
			/*$detalle_centro_educativo_id=related_tables($cn,"detalle_centros_educativos",
					"codigo_modular='$codigo_modular' AND 
					centro_educativo_id=$centro_educativo_id AND 
					nivel_id=$nivel_id AND 
					unidad_id=$unidad_id",
					"(codigo_modular,fecha_creacion,fecha_modificacion,centro_educativo_id,nivel_id,
					estado_id,unidad_id) VALUES 
					('$codigo_modular','$date','$date',$centro_educativo_id,$nivel_id,
					,$estado_id,$unidad_id)",8);*/


		}catch (Exception $e){
			$error[$i_row]=$e->getMessage();
		}
	}
	$i_row++;
	//echo "<br>";
}
//var_dump($error);

function validate($cn,$table,$where,$i_col){
	$id=null;
	$sql_select="SELECT * FROM $table WHERE $where LIMIT 1";
	//echo "$sql_select<br>";
	$rs_select=mysql_query($sql_select,$cn);
	if($rs_select){
		$number_select=mysql_num_rows($rs_select);
		if($number_select>0){
			$row_select=mysql_fetch_assoc($rs_select);
			$id=$row_select["id"];
			return $id;
		}else{
			throw new Exception($i_col);
		}
	}else{
		throw new Exception($i_col);
	}
}

function related_tables($cn,$table,$where,$insert,$i_col){
	$id=null;
	$sql_select="SELECT * FROM $table WHERE $where LIMIT 1";
	//echo "$sql_select<br>";
	$rs_select=mysql_query($sql_select,$cn);
	if($rs_select){
		$number_select=mysql_num_rows($rs_select);
		if($number_select>0){
			throw new Exception($i_col);
		}else{
			$rs_insert="INSERT INTO $table $insert";
			//echo $rs_insert."<br>";
			mysql_query($rs_insert,$cn);
			$id=mysql_insert_id($cn);
			return $id;
		}
	}else{
		throw new Exception($i_col);
	}
}

function validate_digits($type,$value){
	switch($type){
		case "codigo_modular":
			$digits=7;
			$count=strlen($value);
			$difference=$digits-$count;
			for($i=1;$i<=$difference;$i++){
				$value="0".$value;
			}
		break;
		default:
			$digits=6;
			$count=strlen($value);
			$difference=$digits-$count;
			for($i=1;$i<=$difference;$i++){
				$value="0".$value;
			}
	}
	return $value;
}

function get_date(){
	$time=time();
	$date=date("Y-m-d H:i:s",$time);
	return $date;
}
?>
