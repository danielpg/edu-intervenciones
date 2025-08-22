<div class="valores form">
<?php echo $this->Form->create('Valor');?>
	<fieldset>
		<legend><?php __('Agregar Centro Educativo'); ?></legend>
	<?php
		echo $this->Form->input('intervencion_id');
		//echo $this->Form->input('detalle_centro_educativo_id',array("label"=>"Codigo Modular", "type"=>"text"));

		echo $this->Form->input('fecha_inicio',array("type"=>"date"));
		echo $this->Form->input('fecha_fin',array("type"=>"date"));

		echo $this->Form->input('detalle_centro_educativo',array("label"=>"Codigo Modular"));
		echo $this->Form->input('detalle_centro_educativo_id',array("type"=>"hidden"));

		echo $this->Form->input('tipo_periodo_id',array("type"=>"hidden","value"=>1));
		echo $this->Form->input('periodo',array("type"=>"hidden","value"=>0));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>

<script>
  $(function() {

    $( "#ValorDetalleCentroEducativo" ).autocomplete({
      minLength: 0,
      source: "<?php echo Router::url('/detalle_centros_educativos/autocomplete') ?>",
      focus: function( event, ui ) {
        $( "#ValorDetalleCentroEducativo" ).val( ui.item.nombre );
        return false;
      },
      select: function( event, ui ) {
        $( "#ValorDetalleCentroEducativo" ).val( ui.item.nombre );
        $( "#ValorDetalleCentroEducativoId" ).val( ui.item.id );
       // $( "#check" ).val( ui.item.id );
        //$( "#project-description" ).html( ui.item.desc );
        //$( "#project-icon" ).attr( "src", "images/" + ui.item.icon );
 
        return false;
      },
       change: function( event, ui ) {
              if ( !ui.item ){
       			 $( "#ValorDetalleCentroEducativo" ).val("" );
       			 $( "#ValorDetalleCentroEducativoId" ).val( "" );
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


