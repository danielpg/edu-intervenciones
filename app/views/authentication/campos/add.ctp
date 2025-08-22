<div class="campos form">
<?php echo $this->Form->create('Campo');?>
	<fieldset>
		<legend><?php __('Agregar Campo'); ?></legend>
	<?php
		echo $this->Form->input('original');
		echo $this->Form->input('campo_alias');
		echo $this->Form->input('tabla');
		echo $this->Form->input('estado',array("options"=>array(1=>"Activo",0 => "Inactivo")));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Campos', true), array('action' => 'index'));?></li>
	</ul>
</div>
