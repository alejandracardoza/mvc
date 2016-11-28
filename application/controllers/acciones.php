<?php
class acciones extends CI_Controller {


	public function index()
	{
		$data['titulo'] = 'Página principal';		

		$this->load->view('Plantilla/Header', $data);
		$this->load->view('Acciones/index');
		$this->load->view('Plantilla/Footer');
	}

	public function Agregar(){
	
		$data['titulo'] = 'Agregar nuevo contacto';

        $this->load->view('Plantilla/Header', $data);
		$this->load->view('Acciones/Agregar');
		$this->load->view('Plantilla/Footer');
	}

	public function Listar(){
	
		$data['titulo'] = 'Listar contactos';

        $this->load->view('Plantilla/Header', $data);
		$this->load->view('Acciones/Listar');
		$this->load->view('Plantilla/Footer');
	}
}


 ?>
