<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Clientes extends CI_Controller 
    { 
        function Publicacion()
        {
            parent::__construct();
            $this->load->helper('url');                              
        }
        
        public function index()
        {
            $this->load->view('Menu');
            $this->load->view('Clientes');
        }
    }
    
?>
