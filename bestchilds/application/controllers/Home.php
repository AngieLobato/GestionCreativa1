<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Home extends CI_Controller 
    { 
        function Home()
        {
            parent::__construct();
            $this->load->helper('url');                              
        }
        
        public function index()
        {
            $this->load->view('Home');
        }

        public function Articulos()
        {
            redirect('Articulos');
        }
    }
    
?>
