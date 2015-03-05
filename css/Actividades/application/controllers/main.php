<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {
        
        
        die();

    }
 
    
    //Controlador de TipoActividad
    public function tipoactividad()
    {
        $this->grocery_crud->set_table('TipoActividad');
        $this->grocery_crud->set_subject('Tipos de Actividades');
        
        $this->grocery_crud->add_fields('sTipoActividad');
        $this->grocery_crud->edit_fields('sTipoActividad');
        $this->grocery_crud->required_fields('sTipoActividad');

        $this->grocery_crud->display_as('sTipoActividad','Tipo de Actividad');

        $output = $this->grocery_crud->render();
 
        $this->_vista_output($output);        
    }
 
    

    //Controlador de Lugar
    public function lugar()
    {
        $this->grocery_crud->set_table('Lugar');
        $this->grocery_crud->set_subject('Lugares');
        
        $this->grocery_crud->add_fields('sLugar','sDireccion');
        $this->grocery_crud->edit_fields('sLugar','sDireccion');
        $this->grocery_crud->required_fields('sLugar','sDireccion');
        $this->grocery_crud->display_as('sLugar','Lugar');

        $output = $this->grocery_crud->render();
 
        $this->_vista_output($output);         
    }

    //Controlador de Cargo
    public function cargo()
    {
        $this->grocery_crud->set_table('Cargo');
        $this->grocery_crud->set_subject('Cargos');

        $this->grocery_crud->add_fields('sCargo');
        $this->grocery_crud->edit_fields('sCargo');
        $this->grocery_crud->required_fields('sCargo');
        $this->grocery_crud->display_as('sCargo','Cargo');

        $output = $this->grocery_crud->render();
 
        $this->_vista_output($output);        
    }
 

    //Controlador de Actividad
    public function actividad()
    {
        //$this->grocery_crud->set_theme('datatables');
        $this->grocery_crud->set_table('Actividad');
        $this->grocery_crud->set_subject('Actividades');

        $this->grocery_crud->add_fields('sNombre','sDescripcion','dFechaInicio','tHoraInicio','dFechaFin','tHoraFin','Lugar_nID','TipoActividad_nID','Docente_nCarne');
        $this->grocery_crud->edit_fields('sNombre','sDescripcion','dFechaInicio','tHoraInicio','dFechaFin','tHoraFin','Estado_nID','Lugar_nID','TipoActividad_nID','Docente_nCarne');
        $this->grocery_crud->required_fields('sNombre','dFechaInicio','Estado_nID','Lugar_nID','TipoActividad_nID','Docente_nCarne');

        $this->grocery_crud->display_as('Lugar_nID','Lugar');
        $this->grocery_crud->display_as('TipoActividad_nID','Tipo de Actividad');
        $this->grocery_crud->display_as('Docente_nCarne','Responsable');
        $this->grocery_crud->display_as('sNombre','Titulo de actividad');
        $this->grocery_crud->display_as('sDescripcion','Descripcion');
        $this->grocery_crud->display_as('dFechaInicio','Fecha de inicio');
        $this->grocery_crud->display_as('dFechaFin','Fecha de finalizacion');
        $this->grocery_crud->display_as('tHoraInicio','Hora de inicio');
        $this->grocery_crud->display_as('tHoraFin','Hora de finalización');
        $this->grocery_crud->display_as('Estado_nID','Estado de Actividad');

        $this->grocery_crud->set_relation('Estado_nID','Estado','sEstado');
        $this->grocery_crud->set_relation('Lugar_nID','Lugar','sLugar');
        $this->grocery_crud->set_relation('TipoActividad_nID','TipoActividad','sTipoActividad');
        $this->grocery_crud->set_relation('Docente_nCarne','Docente','Persona_sCedula');
        //$this->grocery_crud->set_relation('Persona_sCedula','Persona','sNombre');

        $output = $this->grocery_crud->render();
 
        $this->_vista_output($output);        
    }

    //Controlador de asignacion
    public function asignacion()
    {
        $crud = new grocery_CRUD();
        //$crud->set_theme('datatables');
        $crud->set_table('Asignacion');
        $crud->set_subject('Asignacion');
        $crud->display_as('Docente_nCarne','Docente');
        $crud->display_as('Cargo_nID','Cargo');
        $crud->set_relation('Docente_nCarne','Docente','Persona_sCedula');
        $crud->set_relation('Cargo_nID','Cargo','sCargo');
        //$this->grocery_crud->set_table('asistencia');
        //$output = render();
        $output = $crud->render();
        $this->_vista_output($output);
    }

    //Controlador de docpers
    public function docentepersona()
    {
        $crud = new grocery_CRUD();
        //$crud->set_theme('datatables');
        $crud->set_table('DOCENTEPERSONA');
        $crud->set_subject('DocPers');
        $crud->display_as('nCarne','Carne');
        $crud->display_as('sNombre','Nombre');
        //$crud->set_relation('nCarne','Docente','nCarne');
        //$crud->set_relation('sNombre','Persona','sNombre');
        //$this->grocery_crud->set_table('asistencia');
        //$output = render();
        $output = $crud->render();
        $this->_vista_output($output);
    }

    //Vista Final
    function _vista_output($output = null)
 
    {
        $this->load->view('vista.php',$output);    
    }
}