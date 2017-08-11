<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*@package Agenda
*@Desc Controlador para gestionar el CRUD de la agenda.
*
*@Creado : 09/08/2017
*@Modificado : 09/08/2017
*
*@Autor: nsmdeveloper
*@Autor2: Giovanny
*
*@Url : https://github.com/nsmdeveloper
*@Url2 : 
**/

class Agenda extends CI_Controller {

	/** Metodo Constructor **/
	/**
	 * @param void
	 * @return void
	 */

	public function __construct() {

		//Heredar el constructor padre.
		parent::__construct();

		//Cargar la libreria de ayuda (Helpers)
		$this->load->helper(array('url'));
		$this->load->library('session');

		//Cargar los Modelos a utilizar
		$this->load->model('agenda_model');

	}

	/** Metodo index **/
	/**
	*Descripcion: Este metodo se escarga de mostrar
	* todos los contactos.
	**/
	/**
	 * @param void
	 * @return vista
	 */
	public function index()
	{

		//Prueba
		/*
		echo '<pre>';
		print_r( $this->agenda_model->getTodosContacto() );
		echo '</pre>';
		*/

		$data = array();
		$id_usuario = 1;
		$data['titulo'] = "Agenda Telefonica | Contactos";
		$data['contactos'] = $this->agenda_model->getTodosContacto($id_usuario);
		$this->load->view('vista_index', $data);

		
	}


	/** Metodo create **/
	/**
	*Descripcion: Este metodo se escarga de cargar la vista
	* para el formulario de creacion de contactos.
	**/
	/**
	 * @param void
	 * @return vista
	 */
	public function create() {

		$data = array();
		$data['titulo'] = "Agenda Telefonica | Crear Contactos";
		$this->load->view('add_contacto', $data);

	}

	/** Metodo store **/
	/**
	*Descripcion: Este metodo se encarga de guardar los contactos
	* en la base de datos.
	**/
	/**
	 * @param void
	 * @return vista
	 */

	public function store() {

		//Metodo para guardar los contactos


		//Datos Recibidos del formulario de contactos
		$idUsuario = 1;
		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$movil = $this->input->post("movil");
		$email = $this->input->post("email");
		$social1 = $this->input->post("social1");
		$social2 = $this->input->post("social2");
		$social3 = $this->input->post("social3");
		
		//Sanear los datos recibidos
		$nombre = htmlspecialchars($nombre);
		$apellido = htmlspecialchars($apellido);
		$movil = htmlspecialchars($movil);
		$email = htmlspecialchars($email);
		$social1 = htmlspecialchars($social1);
		$social2 = htmlspecialchars($social2);
		$social3 = htmlspecialchars($social3);

		//Generar la Fecha de creacion
		$fecha_creado = date("Y-m-d H:i:s");

		//Crear un array con los datos del contacto recivido.
		$contacto = array(
			'id_usuario' => $idUsuario,
			'nombre' => $nombre,
			'apellido' => $apellido,
			'movil' => $movil,
			'email' => $email,
			'social1' => $social1,
			'social2' => $social2,	
			'social3' => $social3,
			'fecha_creado' => $fecha_creado
		);

		//Guardar los datos del contacto.
		

		if ($this->agenda_model->guardarContacto($contacto)) {

			$this->session->set_flashdata('success', 'Contacto creado exitosamente!');

		} else {

			$this->session->set_flashdata('error', 'Error al tratar de crear contacto!');

		}

		redirect(base_url() . "index.php/agenda");


	}

	/** Metodo show **/
	/**
	*Descripcion: Este metodo se encarga de mostrar un
	* contacto en especifico
	**/
	/**
	 * @param $id
	 * @return vista
	 */
	public function show($id_usuario = 0) {

		//Metodo para mostrar un contacto en especifico

		

	}

	/** Metodo edit **/
	/**
	*Descripcion: Este metodo se encarga de cargar el formulario
	* de editar contacto.
	**/
	/**
	 * @param $id_contacto
	 * @return vista
	*/
	public function edit($id_contacto) {

		$data = array();
		$data['titulo'] = "Agenda Telefonica | Editar Contactos";
		$data['contacto'] = $this->agenda_model->getContacto($id_contacto); 

		$this->load->view('edit_contacto', $data);

	}

	/** Metodo update **/
	/**
	*Descripcion: Este metodo se encarga de editar un
	* contacto en especifico
	**/
	/**
	 * @param $id
	 * @return vista
	*/
	public function update() {

		//Metodo para editar un contacto en especifico
		$id_contacto = $this->input->post("id_contacto");
		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$movil = $this->input->post("movil");
		$email = $this->input->post("email");
		$social1 = $this->input->post("social1");
		$social2 = $this->input->post("social2");
		$social3 = $this->input->post("social3");
		
		//Sanear los datos recibidos
		$nombre = htmlspecialchars($nombre);
		$apellido = htmlspecialchars($apellido);
		$movil = htmlspecialchars($movil);
		$email = htmlspecialchars($email);
		$social1 = htmlspecialchars($social1);
		$social2 = htmlspecialchars($social2);
		$social3 = htmlspecialchars($social3);

		//Crear un array con los datos del contacto recivido.
		$contacto = array(
			'nombre' => $nombre,
			'apellido' => $apellido,
			'movil' => $movil,
			'email' => $email,
			'social1' => $social1,
			'social2' => $social2,	
			'social3' => $social3	
		);

		//Guardar los datos del contacto.
		

		if ( $this->agenda_model->editarContacto($id_contacto, $contacto) ) {

			$this->session->set_flashdata('success', 'Contacto Editado exitosamente!');

		} else {

			$this->session->set_flashdata('error', 'Error al tratar de editar contacto!');

		}

		redirect(base_url() . "index.php/agenda/edit/$id_contacto");

	
	}


	/** Metodo destroy **/
	/**
	*Descripcion: Este metodo se encarga de eliminar un
	* contacto en especifico
	**/
	/**
	 * @param $id
	 * @return vista
	 */
	public function destroy($id_usuario = 0) {

		//Metodo para eliminar un contacto en especifico

	
	}

}
