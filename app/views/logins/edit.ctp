<span class="lbutton"><a href="#" onclick="javascript:history.back(1);return false;">Regresar</a></span>

<div class="logins form">
<form method="post">
<?php $this->Form->create('Login');?>
	<fieldset style="width:500px" >
		<legend><?php __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('role_id');
		//echo $this->Form->input('nucleo_id',array("type"=>"hidden","id" => "FormAutoNucleoId"));
		//echo $this->Form->input('nucleo',array("type"=>"text","id"=>"FormAutoNucleo"));
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('dni');
		echo $this->Form->input('correo');
		echo $this->Form->input('usuario',array("autocomplete"=>"off","style"=>"ime-mode: disabled;"));
		echo $this->Form->input('contrasena',array("type"=>"password","autocomplete"=>"off","style"=>"ime-mode: disabled;" ));
		echo $this->Form->input('confirm_contrasena',array("type"=>"password","autocomplete"=>"off","style"=>"ime-mode: disabled;" ));
		echo $this->Form->input('estado',array("label"=>"Estado","type"=>"select","options"=>array(1 => "Activo",0 => "Inactivo")));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Login.id')), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $this->Form->value('Login.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado Logins', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listado Registros', true), array('controller' => 'registros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Registro', true), array('controller' => 'registros', 'action' => 'add')); ?> </li>
	</ul>
</div>

<script>


</script>
