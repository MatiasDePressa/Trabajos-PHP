<?php
$miarray_assoc=array('alemania'=>'berlin', 
	'francia'=>'paris',
'italia'=>'roma',
'brasil'=>'brasilia',
'uruguay'=>'montevideo'
);
print_r($miarray_assoc);

?>

<form method="post">
	<select name="combo">
		<?php 
foreach ($miarray_assoc as $pais => $capi){
	echo '<option value="'.$pais.'">'.$capi.'</option>';
}
?>
	</select>
	<button>ver pais</button>
</form>