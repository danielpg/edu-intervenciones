<div class="organos form">
<?php echo $this->Form->create('Organo');?>
	<fieldset>
		<legend>Fuente Financiamiento</legend>
	<?php
		echo $this->Form->input('nombre',array("label"=>"Nombre de Fuente de Financiamiento"));
		echo $this->Form->input('resumen');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Organos', true), array('action' => 'index'));?></li>
	</ul>
</div>
