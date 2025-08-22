<div class="intervenciones form">
<?php echo $this->Form->create('Intervencion');?>
	<fieldset>
		<legend><?php __('Editar Intervencion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre',array("label"=>"Nombre de Intervención"));
		echo $this->Form->input('resumen');
	//	echo $this->Form->input('categoria_id',array("label"=>"Tematica de la Intervención"));
	//	echo $this->Form->input('organo_id',array("label"=>"Fuente de Financiamiento de la Intervención"));
	?>
	<table border=0 cellspacing=0>
<tr><td valign="top" width="50%">
<fieldset><legend>Tematica de la Intervención</legend>
	<?php
//var_dump($cats_list,$orgs_list);

		foreach($categorias as $int => $label){
			$flag = false;
			if(in_array($int,$cats_list))$flag = "checked";
			echo $this->Form->input('categoria.'.$int,array("label"=> $label,"type"=>"checkbox","checked" => $flag));
		}
?>
</fieldset>
</td><td>
<fieldset><legend>Fuente de Financiamiento de la Intervención</legend>
	<?php
		foreach($organos as $int => $label){
			$flag = false;
			if(in_array($int,$orgs_list))$flag = "checked";
			echo $this->Form->input('organo.'.$int,array("label"=> $label,"type"=>"checkbox","checked" => $flag));
		}
?>
</fieldset>
</td></tr></table>

	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

