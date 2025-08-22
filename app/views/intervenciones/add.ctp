<div class="intervenciones form">
<?php echo $this->Form->create('Intervencion');?>
	<fieldset>
		<legend><?php __('Agregar Intervención'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array("label"=>"Nombre de Intervención"));
		echo $this->Form->input('resumen');
		//echo $this->Form->input('costo');
		//echo $this->Form->input('categoria_id',array("label"=>"Tematica de la Intervención","type"=>"checkbox"));
		//echo $this->Form->input('organo_id',array("label"=>"Fuente de Financiamiento de la Intervención"));
	?>

<table border=0 cellspacing=0>
<tr><td valign="top" width="50%">
<fieldset><legend>Tematica de la Intervención</legend>
	<?php
		foreach($categorias as $int => $label){
			echo $this->Form->input('categoria.'.$int,array("label"=> $label,"type"=>"checkbox"));
		}
?>
</fieldset>
</td><td>
<fieldset><legend>Fuente de Financiamiento de la Intervención</legend>
	<?php
		foreach($organos as $int => $label){
			echo $this->Form->input('organo.'.$int,array("label"=> $label,"type"=>"checkbox"));
		}
?>
</fieldset>
</td></tr></table>

	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

