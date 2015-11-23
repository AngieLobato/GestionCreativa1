<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class cliente extends CI_Controller 
    { 
        function cliente()
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
