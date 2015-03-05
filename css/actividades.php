<?
// Le decimos que estamos en Joomla

define( '_JEXEC', 1 );

// Definimos la constante de directorio actual y el separador de directorios (windows server: \ y linux server: /)

define('JPATH_BASE', dirname(__FILE__) );
define( 'DS', DIRECTORY_SEPARATOR );
//echo "la ruta dse la base es:a;";
//echo JPATH_BASE;
// Cargamos los ficheros de framework de Joomla 1.5, y las definiciones de constantes (IMPORTANTE AMBAS LÍNEAS)

require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );

// Iniciamos nuestra aplicación (site: frontend)
$mainframe =& JFactory::getApplication('site');


// Ya estamos preparados para recoger valores desde Joomla
$usuario =& JFactory::getUser();
$id = $usuario->id;

if ($id==0){
	echo "Forbidden";
}
else{
	//echo "Hola ".JFactory::getUserType($id)."!";
	//header('Location: Actividades/MainMenu/index.html');
	//indicar sesion en mysql
	header('Location: Actividades/MainMenu/index.php?username='.$usuario->username);
}

?> 