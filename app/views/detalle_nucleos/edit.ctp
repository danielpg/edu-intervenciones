<div class="detalleNucleos form">
<?php echo $this->Form->create('DetalleNucleo');?>
	<fieldset>
		<legend><?php __('Editar Detalle Nucleo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hhhhh',array('type'=>'hidden'));
		echo $this->Form->input('gggg',array('type'=>'hidden'));

		echo $this->Form->input('detalle_centro_educativo',array("label"=>"Codigo Modular"));
		echo $this->Form->input('nucleo',array("id"=>"FormAutoNucleo"));

		echo $this->Form->input('detalle_centro_educativo_id',array("type"=>"hidden"));
		echo $this->Form->input('nucleo_id',array("type"=>"hidden","id"=>"FormAutoNucleoId"));

		echo $this->Form->input('nucleo_rol_id',array("options"=>$nucleosRoles));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>


<script>
  $(function() {

    $( "#DetalleNucleoDetalleCentroEducativo" ).autocomplete({
      minLength: 0,
      source: "<?php echo Router::url('/detalle_centros_educativos/autocomplete') ?>",
      focus: function( event, ui ) {
        $( "#DetalleNucleoDetalleCentroEducativo" ).val( ui.item.nombre );
        return false;
      },
      select: function( event, ui ) {
        $( "#DetalleNucleoDetalleCentroEducativo" ).val( ui.item.nombre );
        $( "#DetalleNucleoDetalleCentroEducativoId" ).val( ui.item.id );
       // $( "#check" ).val( ui.item.id );
        //$( "#project-description" ).html( ui.item.desc );
        //$( "#project-icon" ).attr( "src", "images/" + ui.item.icon );
 
        return false;
      },
       change: function( event, ui ) {
              if ( !ui.item ){
       			 $( "#DetalleNucleoDetalleCentroEducativo" ).val("" );
       			 $( "#DetalleNucleoDetalleCentroEducativoId" ).val( "" );
				// $( "#check" ).val( "");
                //return removeIfInvalid( this );
			}
       }
    })
    .data( "autocomplete" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .data( "item.autocomplete", item )
        .append( "<a>" + item.nombre + "</a>" )
        .appendTo( ul );
    };


  });
</script>

