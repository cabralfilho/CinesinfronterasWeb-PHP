<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class Tarjeta extends CI_Controller {

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
	redirect('tarjeta/administracion');
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
	$crud->set_table('tarjeta');
	$crud->set_subject('Tarjeta');
           
            /* Establecemos las relaciones */
            /* El correo … es la clave foranea y aparecerá como Correo */
 	$crud->display_as('correo','Correo');
            /* el correo de tarjeta es la foranea de la principal de la tabla correo
            al ser ingresada aparecerá desplegando el nombre del correo */
	$crud->set_relation('correo','correo','correo');


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