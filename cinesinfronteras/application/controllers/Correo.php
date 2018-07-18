<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class Correo extends CI_Controller {

  function __construct()
  {

	parent::__construct();

	/* Cargamos la base de datos */
	$this->load->database();

	/* Cargamos la libreria*/
	$this->load->library('grocery_crud');

	/* Añadimos el helper al controlador */
	$this->load->helper('url');
  }

  function index()
  {
	/*
 	* Mandamos todo lo que llegue a la funcion
 	* administracion().
 	**/
	redirect('correo/administracion');
  }

  /*
   *
   **/
  function administracion()
  {
	try{

	/* Creamos el objeto */
	$crud = new grocery_CRUD();

	/* Seleccionamos el tema */
	$crud->set_theme('flexigrid');

	/* Seleccionamos el nombre de la tabla de nuestra base de datos*/
	$crud->set_table('correo');
	$crud->set_subject('Correo');
           
            /* Establecemos las relaciones */
            /* El rut … es la clave foranea y aparecerá como RUT */
 	$crud->display_as('rut','Rut');
            /* el rut de correo es la foranea de la principal de la tabla usuario
            al ser ingresada aparecerá desplegando el nombre del usuario */
	$crud->set_relation('rut','usuario','rut');


	/* Asignamos el idioma español */
	$crud->set_language('spanish');


	/* Generamos la tabla */
	$output = $crud->render();

	/* La cargamos en la vista situada en
	/applications/views/usuario/administracion.php */
	$this->load->view('usuario/administracion', $output);

	}catch(Exception $e){
  	/* Si algo sale mal almacenamos el error y lo mostramos */
  	show_error($e->getMessage().' --- '.$e->getTraceAsString());
	}
  }
}