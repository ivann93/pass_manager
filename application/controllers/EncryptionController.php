<?php

class EncryptionController extends CI_Controller {

public function __construct() {
parent:: __construct();
// Load form helper
$this->load->helper('form');
// Load encryption library
$this->load->library('encrypt');
// Load form validation library
}

// Show form
public function index() {
$this->load->view('show_form');
}


public function encoder() 
	{
		$message = $this->input->post('message');
		$data['key'] = $this->encrypt->encode($message);
		$this->load->view('show_form', $data);
	}


public function decoder() 
	{
		$message = $this->input->post('message');
		$data['key1'] = $this->encrypt->decode($message);
		$this->load->view('show_form', $data);
	}

}

?>