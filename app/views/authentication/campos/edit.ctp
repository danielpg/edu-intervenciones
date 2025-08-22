<div class="campos form">
<?php echo $this->Form->create('Campo');?>
	<fieldset>
		<legend><?php __('Editararar Campo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tabla',array("disabled"=>"disabled"));
		echo $this->Form->input('original',array("disabled"=>"disabled"));
		echo $this->Form->input('campo_alias');
		echo $this->Form->input('estado',array("options"=>array(1=>"Activo",0 => "Inactivo")));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Campo.id')), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $this->Form->value('Campo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Campos', true), array('action' => 'index'));?></li>
	</ul>
</div>
