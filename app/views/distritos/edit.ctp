<div class="distritos form">
<?php echo $this->Form->create('Distrito');?>
	<fieldset>
		<legend><?php __('Editar Distrito'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombre');
		echo $this->Form->input('provincia_id');
		echo $this->Form->input('gggg',array('type'=>'hidden'));
		echo $this->Form->input('hhhhh',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Distrito.id')), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $this->Form->value('Distrito.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Distritos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Provincias', true), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia', true), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
	</ul>
</div>