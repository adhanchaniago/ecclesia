<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	/**
	 * This program build for Ecclesia
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
	public function index($id_category)
	{	
        $data['faq'] = $this->khotbah_model->Get_show_faq()->result_array();
        $data['article_recent'] = $this->welcome_model->show_article_recent()->result_array();
        $config['base_url'] = site_url('catalog/index/'.$id_category);
        $config['total_rows'] = $this->db->select("*")->from("catalog")->where("id_category=$id_category and status=1")->count_all_results('');
        $config['per_page'] = "2";
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['article_catalog'] = $this->welcome_model->get_catalog_list($id_category,$config["per_page"], $data['page']);   
        $data['category_catalog'] = $this->welcome_model->category_catalog()->result_array();
        $data['article'] = $this->welcome_model->show_article()->result_array();        
        $data['article_by_month'] = $this->welcome_model->show_article_by_month()->result_array();        
        $data['pagination'] = $this->pagination->create_links();    
		$data["title"] = "Tentang Ecclesia";
		$data["main_template"] = "View_article_catalog";
		$this->load->view('Welcome_template',$data);
	}
	public function detail($id_catalog){	
                $data['faq'] = $this->khotbah_model->Get_show_faq()->result_array();
        $data['article_recent'] = $this->welcome_model->show_article_recent()->result_array();
        $data['category_catalog'] = $this->welcome_model->category_catalog()->result_array();
        $data['article'] = $this->welcome_model->show_article()->result_array();        
        $data["catalog_detail"] =  $this->welcome_model->catalog_detail("where catalog.id_catalog = '$id_catalog' and status=1")->result_array();	
        $data["main_template"] = "Catalog_detail";
        $this->load->view('Welcome_template',$data);
     }
}
