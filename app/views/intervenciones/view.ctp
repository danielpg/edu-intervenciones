<fieldset><legend> <?php  __('Intervencion');?></legend>
<div class="intervenciones view">

	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $intervencion['Intervencion']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $intervencion['Intervencion']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Resumen'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $intervencion['Intervencion']['resumen']; ?>
			&nbsp;
		</dd>


	</dl>
</div>



	<table border=0 cellspacing=0>
<tr><td valign="top" width="50%">
<fieldset><legend>Tematicas de la Intervención</legend>
	<?php
//var_dump($cats_list,$orgs_list);

		foreach($categorias as $int => $label){
			$flag = false;
			if(in_array($int,$cats_list)){
				echo $label."<br>";
			} 

		}
?>
</fieldset>
</td><td>
<fieldset><legend>Fuentes de Financiamiento de la Intervención</legend>
	<?php
		foreach($organos as $int => $label){
			$flag = false;
			if(in_array($int,$orgs_list)){
				echo  $label."<br>";
			}
		}
?>
</fieldset>
</td></tr></table>

	</fieldset>


</fieldset>




<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Intervencion', true), array('action' => 'edit', $intervencion['Intervencion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Intervencion', true), array('action' => 'delete', $intervencion['Intervencion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $intervencion['Intervencion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Intervenciones', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervencion', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organos', true), array('controller' => 'organos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organo', true), array('controller' => 'organos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias', true), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria', true), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
