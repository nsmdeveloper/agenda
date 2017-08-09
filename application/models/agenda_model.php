<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
*@package Agenda
*@Desc Modelo para gestionar el CRUD de la agenda.
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

class Agenda_Model extends CI_Model {


	/** Metodo Constructor **/
	/**
	 * @param void
	 * @return void
	 */
	public function __construct()
	{
		
		parent::__construct();
		$this->load->database();
	}

	/** Metodo guardarContacto **/
	/**
	*Descripcion: Este metodo se encarga de guardar los contactos
	* en la base de datos.
	**/
	/**
	 * @param array
	 * @return $id
	 */

	public function guardarContacto($datos = array()) {

		//Metodo para guardar los contactos

		//Inserta el contacto en la tabla contactos.
		$this->db->insert('contactos', $datos);
		

		//Retorna el id del contacto insertado.
		$id = $this->db->insert_id();
		
		return $id;

	}

		/** Metodo getContacto **/
	/**
	*Descripcion: Este metodo se encarga obtener
	* todos los contactos para el usuario logueado.
	**/
	/**
	 * @param $id_usuario
	 * @return void
	 */
	public function getTodosContacto($id_usuario = 1) {

		//Metodo para mostrar un contacto en especifico
		$contactos = $this->db->get_where('contactos', array('id_usuario' => $id_usuario));
		
		return $contactos->result();

	}

	/** Metodo getContacto **/
	/**
	*Descripcion: Este metodo se encarga de obtener un
	* contacto en especifico
	**/
	/**
	 * @param $id
	 * @return void
	 */
	public function getContacto($id_contacto, $id_usuario) {

		//Metodo para mostrar un contacto en especifico

		

	}

	/** Metodo editarContacto **/
	/**
	*Descripcion: Este metodo se encarga de editar un
	* contacto en especifico
	**/
	/**
	 * @param $id
	 * @return void
	*/
	public function editarContacto($id_contacto, $id_usuario) {

		//Metodo para editar un contacto en especifico

	
	}


	/** Metodo borrarContacto **/
	/**
	*Descripcion: Este metodo se encarga de eliminar un
	* contacto en especifico
	**/
	/**
	 * @param $id
	 * @return void
	 */
	public function borrarContacto($id_contacto, $id_usuario) {

		//Metodo para eliminar un contacto en especifico

	
	}



	


}
