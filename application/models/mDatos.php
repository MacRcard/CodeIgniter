<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mDatos extends CI_Model {

	function __construct()
    {
        parent::__construct();//llama la funcion construct()
    }

    //videojuegos
    
    function consulta_videojuegos()
    {
        return $this->db->get("videojuegos"); // Ejecuta la consulta
    }
    public function agregar_videojuego($videojuego)
    {
        return $this->db->insert('videojuegos',$videojuego);
    }
    public function eliminar_videojuego($id_vj)
    {
        $this->db->where('id',$id_vj);
        return $this->db->delete('videojuegos');
    }
    public function actualizar_videojuego($videojuego, $id_vj)
    {
        $this->db->where('id',$id_vj);
        return $this->db->update('videojuegos',$videojuego);
    }
    public function get_idvj($data)
    {
        $this->db->where($data);
        // Ejecutar la consulta y obtener el resultado como un array
        $query = $this->db->get('videojuegos');
        
        return $query->result_array();
    }
    
    //ventas
    
    function consulta_ventas()
    {
        return $this->db->get("ventas"); // Ejecuta la consulta
    }
    public function agregar_venta($venta)
    {
        return $this->db->insert('ventas',$venta);
    }
    public function eliminar_venta($id_venta)
    {
        $this->db->where('id',$id_venta);
        return $this->db->delete('ventas');
    }
    public function actualizar_venta($venta, $id_venta)
    {
        $this->db->where('id',$id_venta);
        return $this->db->update('ventas',$venta);
    }
    public function get_idventas($data)
    {
        $this->db->where($data);
        // Ejecutar la consulta y obtener el resultado como un array
        $query = $this->db->get('ventas');
        
        return $query->result_array();
    }





    /*function adicionar(Request $request)
    {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'edad' => $this->input->post('edad')
        );

        return $this->db->insert('alumno', $data);
    }
    public function actualizar2()
    {
        return $this->db->query("UPDATE ventas SET cod = $ventas->cod, comprador = $ventas->nombre, tipo_de_pago = $ventas->tipo_de_pago, WHERE ventas.id = $ventas->id;");
    }
    public function update_venta($id,$data)
    {
        $this->db->where('id',$id);
        return $this->db->update('ventas',$data);
    }*/
}
?>