<?php
	include('datos.php');
	function obtenerID($estado)
	{
		switch($estado)
		{
			case 'encurso':
				return 5;
			case 'realizada':
				return 6;
			case 'cancelada':
				return 7;
			case 'proxima':
				return 8;
			default:
				return -1;
		}
	}

	if(isset($_GET['nID']) and isset($_GET['moveto']))
	{
		$link = mysql_connect($server, $user, $password)
    	or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db($database) or die('No se pudo seleccionar la base de datos');

		$query = "SELECT * FROM VISTAACTIVIDAD WHERE nID = ".$_GET['nID'];

		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		$numero_filas = mysql_num_rows($result);

		while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
		{
			$qupdate = "UPDATE Actividad SET ";

			if(obtenerID($_GET['moveto'])!=null and obtenerID($_GET['moveto'])!=-1)
			{
				$qupdate = $qupdate."Estado_nID = ".obtenerID($_GET['moveto']);
				$qupdate = $qupdate." WHERE nID=".$_GET['nID'];
				$result2 = mysql_query($qupdate) or die('Consulta fallida: ' . mysql_error());

				echo 'Actualizado correctamente. ';
			}
			else
			{
				echo 'Las variables no se asignaron correctamente.';
			}
		}

		if($numero_filas==0)
		{
			echo 'No se encontraron registros.';
		}
	}
	else
	{
		echo 'Las variables no fueron asignadas.';
	}

	// Liberar resultados
	mysql_free_result($result);
	// Cerrar la conexión
	mysql_close($link);

	header('Location: index.php?username='.$_GET['username']);
?>