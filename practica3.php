	<?php
			$recibe =  $_get["recibe"];
			$entrega = $_get["entrega"];
			$persona = $_get["persona"];
			$concepto = $_get["concepto"];

		print '<h1>Datos Ingresados</h2>';
			echo  'El deudor es .$recibe';
			echo '<br>';
			echo 'El Acreedor es: .$entrega';
			echo '<br>';
			echo 'El responsable es: .$persona';
			echo '<br>';
			echo 'El motivo es .$concepto';
		
	?>