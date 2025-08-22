<div class="organos form">
<?php echo $this->Form->create('Organo');?>
	<fieldset>
		<legend>Editar Fuente Financiamiento</legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre',array("label"=>"Nombre de Fuente de Financiamiento"));
		echo $this->Form->input('resumen');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Organo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Organo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Organos', true), array('action' => 'index'));?></li>
	</ul>
</div>
