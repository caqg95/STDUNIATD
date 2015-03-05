<!DOCKTYPE HTML>

<html>
	



	<body>
		<?php foreach($Registros as $fila):?>
			<?php if($fila->sNombreUsuario!='unifrancouni'){ ?>
				<p><?= $fila->sNombreUsuario ?></p>
			<?php } else { echo 'es unifrancouni'; } ?>
		<?php endforeach; ?>
		<br><br>
		<a href="login">Ir a login</a>
	</body>


</html>

