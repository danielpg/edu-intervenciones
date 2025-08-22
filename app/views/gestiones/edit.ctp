<div class="gestiones form">
<?php echo $this->Form->create('Gestion');?>
	<fieldset>
		<legend><?php __('Editarar Gestion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('gggg',array('type'=>'hidden'));
		echo $this->Form->input('hhhhh',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Gestion.id')), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $this->Form->value('Gestion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Gestiones', true), array('action' => 'index'));?></li>
	</ul>
</div>