<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	/**
	 * This program build for HOMBING FISH
	 * Developer : Andre Marbun S.Kom
	 */
			function __construct()
	{
		parent::__construct();		
		$this->load->library(array('form_validation','upload','session','encrypt'));
        $this->load->helper(array('url','text'));
        $this->load->model(array('welcome_model','khotbah_model'));   
        $this->load->database();
	}
	public function index()
	{	
		$data["title"] = "ARTICLE";
		$data['faq'] = $this->khotbah_model->Get_show_faq()->result_array();
		$data['category_catalog'] = $this->welcome_model->category_catalog()->result_array();
      		$data['article'] = $this->welcome_model->show_article()->result_array();      
      		$data['article_recent'] = $this->welcome_model->show_article_recent()->result_array();  
		$data['profil'] = $this->welcome_model->profil()->result_array();
		$data["main_template"] = "profil";
		$this->load->view('Welcome_template',$data);
	}
	}
