<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontent extends CI_Controller { 
		function __construct()
	{
		parent::__construct();		
		header("Last-Modified: " . gmdate( "D, j M Y H:i:s" ) . " GMT"); // Date in the past
		header("Expires: " . gmdate( "D, j M Y H:i:s", time() ) . " GMT"); // always modified
		header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
		header("Cache-Control: post-check=0, pre-check=0", FALSE);
		header("Pragma: no-cache");
		$this->load->helper('text');
		$this->load->library(array('form_validation','upload'));
		$this->load->library('encrypt');
		$this->load->database() ;
        $this->load->library(array('session'));
        $this->load->helper('url');
        $this->load->model('m_login');   
        $this->load->model('webmaster_model');   
        $this->load->database();
	}

function index()
	{
		      if($this->session->userdata('isLogin') == FALSE)
    {
      redirect('backend/login/login_form');
    }else
    {    $data = array();
         $this->load->model('m_login');
         $user = $this->session->userdata('username');
         $data['level'] = $this->session->userdata('level_login');        
         $data['pengguna'] = $this->m_login->dataPengguna($user);
         }
		$data["title"] = 'ECCLESIA ADMINISTRATOR';
		$data["main"] = 'backend/home_v';
		$this->load->view('backend/main_v',$data);
	}
}
