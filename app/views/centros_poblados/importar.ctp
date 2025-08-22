<?php $this->Form->create('Importar Centros Educativos');?>
<form method="post"   enctype="multipart/form-data" >
<fieldset style="width:400px">
	<legend>Importar Indicadores</legend>

	<?php
		echo $this->Form->input('archivo',array('type'=>'file'));
		//echo $this->Form->input('headers',array("label"=>"Numero de filas cabeceras",'type'=>'select',"options"=>array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6)));
	?>

<br> </br>


</fieldset>
<?php echo $this->Form->end(__('Importar', true));?>
