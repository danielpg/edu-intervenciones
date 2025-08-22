<script language="javascript" type="text/javascript">
$(document).ready(function(){ 
	$( "#ValorLocal" ).autocomplete({
     	minLength: 0,
      	source: "<?php echo Router::url('/centros_educativos/autoComplete') ?>",
      	focus: function( event, ui ) {
        	$( "#ValorLocal" ).val( ui. item.CentrosEducativo.codigo_local +'- ' +ui.item.CentrosEducativo.nombre  );
        	return false;
      	},
      	select: function( event, ui ) {
        	$( "#ValorLocal" ).val( ui. item.CentrosEducativo.codigo_local +'- ' +ui.item.CentrosEducativo.nombre  );
        	$( "#ValorCentroEducativoId" ).val( ui.item.CentrosEducativo.id );
        	return false;
      	},
       	change: function( event, ui ) {
         	if ( !ui.item ){
           		$( "#ValorLocal" ).val("" );
           		$( "#ValorCentroEducativoId" ).val( "" );
                //return removeIfInvalid( this );
   			}
   		}
    })
    .data( "autocomplete" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .data( "item.autocomplete", item )
        .append( "<a>" + item.CentrosEducativo.codigo_local +'- ' +item.CentrosEducativo.nombre + "</a>" )
        .appendTo( ul );
    };


    $( "#ValorModular" ).autocomplete({
     	minLength: 0,
      	source: "<?php echo Router::url('/detalle_centros_educativos/autoComplete') ?>",
      	focus: function( event, ui ) {
        	$( "#ValorModular" ).val( ui. item.DetalleCentrosEducativo.codigo_modular);
        	return false;
      	},
      	select: function( event, ui ) {
        	$( "#ValorModular" ).val( ui. item.DetalleCentrosEducativo.codigo_modular);
        	$( "#ValorDetalleCentroEducativoId" ).val( ui.item.DetalleCentrosEducativo.id );
        	return false;
      	},
       	change: function( event, ui ) {
         	if ( !ui.item ){
           		$( "#ValorModular" ).val("" );
           		$( "#ValorDetalleCentroEducativoId" ).val( "" );
                //return removeIfInvalid( this );
   			}
   		}
    })
    .data( "autocomplete" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .data( "item.autocomplete", item )
        .append( "<a>" + item.DetalleCentrosEducativo.codigo_modular + "</a>" )
        .appendTo( ul );
    };
});
function select_entidad(){
	var entidad=$('#ValorEntidad').val();
	$("#div_dre").css({display:'none'});
	$("#div_unidad").css({display:'none'});
	$("#div_local").css({display:'none'});
	$("#div_modular").css({display:'none'});
	if(entidad=='dres'){
		$("#div_dre").css({display:''});
	}else if(entidad=='unidades'){
		$("#div_unidad").css({display:''});
	}else if(entidad=='centros_educativos'){
		$("#div_local").css({display:''});
	}else if(entidad=='detalle_centros_educativos'){
		$("#div_modular").css({display:''});
	}else{
	}
}
 </script>
<div class="valores form">
<?php echo $this->Form->create('Valor');?>
	<fieldset>
		<legend><?php __('Agregar Valor'); ?></legend>
	<?php
		echo $this->Form->input('valor');
		echo $this->Form->input('gggg',array('type'=>'hidden'));
		echo $this->Form->input('hhhhh',array('type'=>'hidden'));
		echo $this->Form->input('indicador_id',array("type"=>"select","options"=>$indicadores));
		echo $this->Form->input('fuente_area_id',array("type"=>"select","options"=>$fuentesAreas));
		//echo $this->Form->input('usuario_id');
		$array_entidades=array("dres"=>"DRE","unidades"=>"Unidades","centros_educativos"=>"Local","detalle_centros_educativos"=>"Centros Educativos");
		echo $this->Form->input('entidad',array("type"=>"select","options"=>$array_entidades,'empty' => '','onclick'=> 'select_entidad();'));
		echo $this->Form->input('dre_id',array("type"=>"select","options"=>$dres,'div' => array('id' => 'div_dre','style' => 'display:none')));
		echo $this->Form->input('unidad_id',array("type"=>"select","options"=>$unidades,'div' => array('id' => 'div_unidad','style' => 'display:none')));
		echo $this->Form->input('local',array('div' => array('id' => 'div_local','style' => 'display:none')));
		echo $this->Form->input('centro_educativo_id',array("type"=>"hidden"));
		echo $this->Form->input('modular',array('div' => array('id' => 'div_modular','style' => 'display:none')));
		echo $this->Form->input('detalle_centro_educativo_id',array("type"=>"hidden"));
		echo $this->Form->input('periodo_id',array("type"=>"select","options"=>$periodo));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Valores', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Centros Educativos', true), array('controller' => 'centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centros Educativo', true), array('controller' => 'centros_educativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicadores', true), array('controller' => 'indicadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicador', true), array('controller' => 'indicadores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('controller' => 'opciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opcion', true), array('controller' => 'opciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Centros Educativos', true), array('controller' => 'detalle_centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Centros Educativo', true), array('controller' => 'detalle_centros_educativos', 'action' => 'add')); ?> </li>
	</ul>
</div>