<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Home extends CI_Controller 
    { 
        function Home()
        {
            parent::__construct();
            $this->load->helper(array("url", "form", "language"));                               
        }
        
        public function index()
        {
            $this->load->view('Home');
        }
    }
    
?>
