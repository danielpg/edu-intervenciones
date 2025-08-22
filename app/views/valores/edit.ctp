<div class="valores form">
<?php echo $this->Form->create('Valor');?>
	<fieldset>
		<legend><?php __('Editar Código Modular en la Intervención'); ?></legend>
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('intervencion_id',array("label"=>"Intervención"));
		
		echo $this->Form->input('intervencion_id',array('options' => $intervenciones,'empty' => __('Seleccionar',true),"label"=>"Intervención"));

		echo $this->Form->input('fecha_inicio',array("type"=>"date","label"=>"Fecha de Inicio de la Intervención"));
		echo $this->Form->input('fecha_fin',array("type"=>"date","label"=>"Fecha de Fin de la Intervención"));
		
		echo $this->Form->input('detalle_centro_educativo',array("label"=>"Código Modular"));
		echo $this->Form->input('detalle_centro_educativo_id',array("type"=>"hidden"));
		
		//echo $this->Form->input('detalle_centro_educativo_id',array("label"=>"Codigo Modular", "type"=>"text"));
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
        //$( "#ValorDetalleCentroEducativo" ).val( ui.item.nombre );
        text=ui.item.DetalleCentrosEducativo.codigo_modular + " - " + ui.item.CentrosEducativo.nombre + " - " + ui.item.Distrito.nombre + " - " + ui.item.Provincia.nombre + " - " + ui.item.Departamento.nombre;
        	$( "#ValorDetalleCentroEducativo" ).val( text );
        return false;
      },
      select: function( event, ui ) {
    	  text=ui.item.DetalleCentrosEducativo.codigo_modular + " - " + ui.item.CentrosEducativo.nombre;
      	$( "#ValorDetalleCentroEducativo" ).val( text );
      	$( "#ValorDetalleCentroEducativoId" ).val( ui.item.DetalleCentrosEducativo.id );
        //$( "#ValorDetalleCentroEducativo" ).val( ui.item.nombre );
        //$( "#ValorDetalleCentroEducativoId" ).val( ui.item.id );
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
        //.append( "<a>" + item.nombre + "</a>" )
        .append( "<a>" + item.DetalleCentrosEducativo.codigo_modular + " - " + item.CentrosEducativo.nombre + " - " + item.Distrito.nombre + " - " + item.Provincia.nombre + " - " + item.Departamento.nombre + "</a>" )
        .appendTo( ul );
    };


  });
</script>


