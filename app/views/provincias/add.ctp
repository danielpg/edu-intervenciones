<div class="provincias form">
<?php echo $this->Form->create('Provincia');?>
	<fieldset>
		<legend><?php __('Agregar Provincia'); ?></legend>
	<?php
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombre');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('gggg',array('type'=>'hidden'));
		echo $this->Form->input('hhhhh',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Provincias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Departamentos', true), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento', true), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>