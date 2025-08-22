<?php if(!empty($error)): ?>
<div class="box_error">
Los siguientes valores son invalidos (Fila => Valor): 
<?php foreach ($error as $row => $value){
	echo $row."=>".$value.", ";
 } ?>
</div>
<?php endif; ?>

<?php $this->Form->create('Indicador');?>
<form method="post"   enctype="multipart/form-data" >
<fieldset style="width:400px">
	<legend>Importar Centros Educativos</legend>

	<?php
		echo $this->Form->input('archivo',array('type'=>'file'));
		//echo $this->Form->input('headers',array("label"=>"Numero de filas cabeceras",'type'=>'select',"options"=>array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6)));
	?>

<br> </br>


</fieldset>
<?php echo $this->Form->end(__('Importar', true));?>
