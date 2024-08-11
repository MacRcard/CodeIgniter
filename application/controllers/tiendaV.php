<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tiendaV extends CI_Controller {

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
		$this->load->model('mDatos');
		$this->load->library('form_validation');
    }
	
	public function index()
	{
		$datos["videojuegos"]=$this->mDatos->consulta_videojuegos()->result();
		$datos["ventas"]=$this->mDatos->consulta_ventas()->result();
		$this->load->view('principal',$datos);

		
	}
    public function get_idvj($idv)
    {
		$this->load->model('mDatos');
    
		// Preparar los datos
		$data = array("id" => $idv);
		
		// Obtener los datos del modelo
		$respuesta = $this->mDatos->get_idvj($data);
		
		// Preparar los datos para la vista
		$datos = array("datos" => $respuesta);
		
		// Cargar la vista
		$this->load->view('actualizar_vj', $datos);
    }

	public function get_idventa($idvt)
    {
		$this->load->model('mDatos');
    
		// Preparar los datos
		$data = array("id" => $idvt);
		
		// Obtener los datos del modelo
		$respuesta = $this->mDatos->get_idventas($data);
		
		// Preparar los datos para la vista
		$datos = array("datos" => $respuesta);
		
		// Cargar la vista
		$this->load->view('actualizar_venta', $datos);
    }

	//videojuegos

	public function crear_videojuego()
	{
        $videojuego['nombre'] = $this->input->post('nombre');
		$videojuego['genero'] = $this->input->post('genero');
		$videojuego['cod'] = $this->input->post('cod');
		$videojuego['precio'] = $this->input->post('precio');
		$videojuego['consola'] = $this->input->post('consola');

		$respuesta = $this->mDatos->agregar_videojuego($videojuego);
		if($respuesta > 0)
		{
			return redirect()->to(base_url());
		}
		else
		{
			return redirect()->to(base_url());
		}
	}
	public function editar_videojuego($id_vj)
	{
		$videojuego['nombre'] = $this->input->post('nombre');
		$videojuego['genero'] = $this->input->post('genero');
		$videojuego['cod'] = $this->input->post('cod');
		$videojuego['precio'] = $this->input->post('precio');
		$videojuego['consola'] = $this->input->post('consola');

		$respuesta = $this->mDatos->actualizar_videojuego($videojuego, $id_vj);

		if($respuesta)
		{
			return redirect()->to(base_url());
		}
		else
		{
			return redirect()->to(base_url());
		}
	}
	public function eliminar_videojuego($id)
	{
		$this->mDatos->eliminar_videojuego($id);
		return redirect()->to(base_url());
	}

	//venta

	public function crear_venta()
	{
        $venta['cod'] = $this->input->post('cod');
		$venta['comprador'] = $this->input->post('comprador');
		$venta['tipo_de_pago'] = $this->input->post('tipo_de_pago');
		$venta['TC'] = $this->input->post('TC');

		$respuesta = $this->mDatos->agregar_venta($venta);
		if($respuesta > 0)
		{
			return redirect()->to(base_url());
		}
		else
		{
			return redirect()->to(base_url());
		}
	}
	public function editar_venta($id_vj)
	{
		$venta['cod'] = $this->input->post('cod');
		$venta['comprador'] = $this->input->post('comprador');
		$venta['tipo_de_pago'] = $this->input->post('tipo_de_pago');
		$venta['TC'] = $this->input->post('TC');

		$respuesta = $this->mDatos->actualizar_venta($venta, $id_vj);
		if($respuesta > 0)
		{
			return redirect()->to(base_url());
		}
		else
		{
			return redirect()->to(base_url());
		}
	}
	public function eliminar_venta($id_venta)
	{
		$this->mDatos->eliminar_venta($id_venta);
		return redirect()->to(base_url());
	}
}