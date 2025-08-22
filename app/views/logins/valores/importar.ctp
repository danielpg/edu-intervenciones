


<?php $this->Form->create('Indicador');?>
<form method="post"   enctype="multipart/form-data" >
<fieldset style="width:400px">
	<legend>Importar Indicadores</legend>

	<?php
		echo $this->Form->input('archivo',array('type'=>'file'));

		//echo $this->Form->input('periodo_id',array('type'=>'select',"options"=>$periodos))
		echo $this->Form->input('organo',array("label" => "Tipo de Codigo",'type'=>'select',"options"=>array("CM" => "Codigo Modular","DRE" => "DRE" , "UGEL" => "UGEL" )));
		echo $this->Form->input('modulo_id',array('type'=>'select',"options"=>$modulos));
		echo $this->Form->input('preview',array("label"=>"Previsualizar",'type'=>'select',"options"=>array(0 => "NO", 1 => "SI")));

		echo $this->Form->input('ano',array("label"=>"Año",'type'=>'select','options' => array_combine(range(date("Y"),date("Y") - 50),range(date("Y"),date("Y") - 50))));
		echo $this->Form->input('periodo_id',array("label"=>"Tipo",'type'=>'select',"options"=>$tipo_periodos));
		echo $this->Form->input('periodo',array("label"=>"Valor",'type'=>'select',"options"=>array(0 => "-")));
		//echo $this->Form->input('headers',array("label"=>"Numero de filas cabeceras",'type'=>'select',"options"=>array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6)));
	?>

<br> </br>


</fieldset>
<?php echo $this->Form->end(__('Continuar', true));?>


<script>
    $("#IndicadorPeriodoId").jCombo("<?php echo Router::url("/valores/select_periodo_tipo") ?>?id=", { 		
		parent: "#IndicadorAno" 
	});	
    $("#IndicadorPeriodo").jCombo("<?php echo Router::url("/valores/select_periodo") ?>?id=", { 		
		parent: "#IndicadorPeriodoId" 
	});	
</script>

