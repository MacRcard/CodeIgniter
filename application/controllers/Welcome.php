<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();//llama la funcion construct()
		$this->load->model('mDatos','',TRUE);
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index2()
	{
		$datos["videojuegos"]=$this->mDatos->consulta_videojuegos()->result();
		$datos["ventas"]=$this->mDatos->consulta_ventas()->result();
		$this->load->view('principal',$datos);
	}

	public function crear()
	{
		
	}
	public function actualizar()
	{
		
	}
	public function eliminar()
	{
		
	}



/*
	public function adicionar()
	{
		// Configuración de validación de formulario
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'required');
		$this->form_validation->set_rules('edad', 'Edad', 'required|integer');

		if ($this->form_validation->run() === FALSE) {
			// Cargar la vista con el formulario si la validación falla
			$this->load->view('Welcome/adicionar');
		} else {
			// Guardar los datos en la base de datos
			$this->mDatos->adicionar();
			redirect('Welcome');
		}
	}
		
	public function update($id)
	{
		// Verifica si la solicitud es de tipo PUT
		$method = $this->input->server('REQUEST_METHOD');
        if ($method != 'PUT') {
            show_error('Método no permitido', 405);
        }

		// Obtiene los datos enviados en la solicitud PUT
		parse_str(file_get_contents("php://input"), $put_vars);

		$data["comprador"] = $put_vars["comprador"];
		$data["tipo_de_pago"] = $put_vars["tipo_de_pago"];
		
		// Llama al modelo para actualizar el registro
		if ($this->ventas_model->update_venta($id, $data)) {
            echo json_encode(array('status' => 'success', 'message' => 'Venta actualizada'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Error al actualizar la venta'));
        }
	}
		
	public function index()
	{
		$this->load->view('welcome_message');
	}*/
}
?>
