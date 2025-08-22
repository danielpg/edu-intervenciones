<?php 
	$numbercols = count($data[1]);
	$numbercols = $numbercols - 1;
	$letters = range("A","Z");
	$opciones = array("Si","No","Incompleto");
	$valid = array("/img/allow.png","/img/deny.png");

	$bigletters = createColumnsArray("GZ");

	//var_dump(PHPExcel_Cell::stringFromColumnIndex(2));
?>
<style>
.de{width:16px;padding-left:16px;padding-top:4px;font-size:10px;background:url('<?php echo Router::url($valid[1]) ?>') no-repeat;}
</style>
<div class="indicadores index">
<form method="post" id="FormImportar">
<fieldset>
		<legend>Importar Indicadores</legend>

<?php if(empty($invalidcods)): ?>
	<div class="box_success">Todos los codigos fueron validados.</div>
<?php else: ?>
<div class="box_error">Codigos Invalidos: 
<?php
	foreach($invalidcods as $cod => $tmp){
		echo $cod.", ";
	}
?>
</div>
<?php endif; ?>


<?php if($preview == 1): ?>
<style>
	select{width:150px}
</style>
<div style="width:900px;overflow-x:scroll">
	<table border=0 cellpadding=0 cellspacing=0>
	<tr>
		<th>&nbsp;</th>
		<?php for($i = 0; $i < $numbercols; $i++){ ?>
				<th><select id="iiselect<?php echo $i ?>" name="data[selects][<?php echo $bigletters[$i+1] ?>]">
					<option value="0">NO IMPORTAR</option>
					<?php foreach($indicadores as $int => $label){
						echo "<option value='".$int."'>".$label."</option>";
					} ?>
					</select>
				</th>
		<?php } ?>
	</tr>
	<tr>
		<?php
		foreach ($data as $item){
			$y = -1;
			foreach($item as $name){
				echo "<th id='iilabel".$y."'>".$name."</th>";
				$y++;
			}
			break;
		}	?>
	</tr>
<?php
	$i = 0;

	foreach ($data as $item):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		if($i <= 1)continue;
?>
<tr<?php echo $class;?>>
<?php
		//<?php echo Router::url($valid[rand(0,2)])
		foreach($item as $label => $name){
			if($label == "A"){
				echo "<td>".$name.(isset($invalidcods[$name]) ? "<b class='de'>&nbsp;</b>" :"" )."</td>";
			} else {
				echo "<td>".$name."</td>";
			}
		}
?></tr>

<?php 
		if($i == 20) break;
	endforeach; 
?>
	</table>
</div>
<?php else: ?>
<table border=0 cellpadding=0 cellspacing=0>
	<?php
		foreach ($data as $item){
			$y = 0;
			foreach($item as $label => $name){
				if($label == "A")continue;			
				echo "<tr><td id='iilabel".$y."' >".$name.'</td><td><select id="iiselect'.$y.'" name="data[selects]['.$label.']">
					<option value="0">NO IMPORTAR</option>';
					foreach($indicadores as $int => $ilabel){
						echo "<option value='".$int."'>".$ilabel."</option>";
					} 
				echo '</select></td></tr>'."\n";
				$y++;
			}
			break;
		}
	?>
</table>
<?php endif; ?>

<div style="font-size:14px;">Numero de Filas encontradas: <?php echo count($data) ?></div>

		<!--td class="actions">
			<?php //echo $a = null;#a = null;#this->Html->link(__('View', true), array('action' => 'view', $indicador['Indicador']['id'])); ?>
			<?php //echo $this->Html->link(__('Editarar', true), array('action' => 'edit', $indicador['Indicador']['id'])); ?>
			<?php //echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $indicador['Indicador']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $indicador['Indicador']['id'])); ?>
		</td-->
<div style="margin-left:780px;text-align:right">

<div class="submit">
	<!--input type="submit" value="Importar" onclick="return confirm('Esta seguro de importar?');" /--> 
	<input type="submit" value="Importar" onclick="return confirm_importar();" /> 
	<span class="lbutton"><?php echo $this->Html->link(__('Regresar', true), array('action' => 'importar')); ?></span>
</div>

</div>

</fieldset>
</form>
</div>





<div id="dialog-confirm" style="display:none" title="Confirmar">
	<table cellspacing="0" cellpadding="4">
	</table>
</div>

<script type="text/javascript">

function confirm_importar(){
	recoger_datos();
	$( "#dialog-confirm" ).dialog("open");
	return false;
}
	
function recoger_datos(){
	$("#dialog-confirm table").html("");

	for(i = 0; i < <?php echo $numbercols ?> ; i++){
		cssclass = "";
		label = $("#iilabel" + i).html();
		value = $("#iiselect" + i + " option:selected").text();
		if(i % 2)cssclass = "class='altrow'";
		$("#dialog-confirm table").append("<tr " + cssclass + "><td>" + label+ "</td><td>&raquo;</td><td>" +value+ "</td></tr>");
	}
}
	

$( "#dialog-confirm" ).dialog({
      resizable: false,
      height:640,
      width:840,
	  autoOpen: false,
      modal: true,
      buttons: {
        "Confirmar": function() {
			document.getElementById("FormImportar").submit();
          $( this ).dialog( "close" );
        },
        "Regresar": function() {
          $( this ).dialog( "close" );
        }
      }
});

</script>

<style>
#dialog-confirm span {color:darkblue;font-weight:bold;font-size:12px}

#dialog-confirm td {color:darkblue;padding:4px;font-weight:bold;font-size:12px}
</style>
