<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Articulos extends CI_Controller 
    { 
        function Articulos()
        {
            parent::__construct();
            $this->load->helper('url');                              
        }
        
        public function index()
        {
            $this->load->view('Articulos');
        }
    }
    
?>
