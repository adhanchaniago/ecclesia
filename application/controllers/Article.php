<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	/**
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
        $config['base_url'] = site_url('article/index/');
        $config['total_rows'] = $this->db->select("*")->from("article")->where("status=1")->count_all_results('');
        $config['per_page'] = "2";
        $config["uri_segment"] = 3;
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
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['faq'] = $this->khotbah_model->Get_show_faq()->result_array();
        $data['article_category'] = $this->welcome_model->get_category_list($config["per_page"], $data['page']);   
        $data['category_catalog'] = $this->welcome_model->category_catalog()->result_array();
        $data['article'] = $this->welcome_model->show_article()->result_array();        
        $data['pagination'] = $this->pagination->create_links();    
        $data['article_recent'] = $this->welcome_model->show_article_recent()->result_array();
        $data["title"] = "Article";
         $data['article_by_month'] = $this->welcome_model->show_article_by_month()->result_array();        
        $data["main_template"] = "View_article_category";
        $this->load->view('Welcome_template',$data);
	}
	public function detail($id_article)
	{
                     $data['article_by_month'] = $this->welcome_model->show_article_by_month()->result_array();        
                    $data['faq'] = $this->khotbah_model->Get_show_faq()->result_array();
                    $data['category_catalog'] = $this->welcome_model->category_catalog()->result_array();
                    $data['article'] = $this->welcome_model->show_article()->result_array();        
                    $data['article_recent'] = $this->welcome_model->show_article_recent()->result_array();
                    $data["article_detail"] =  $this->welcome_model->Get_detail_article("where article.id_article = '$id_article' and status=1")->result_array();	
		$data["main_template"] = "View_article_detail";
		$this->load->view('Welcome_template',$data);
	}
    public function archive($bulan,$tahun)
    {   
        $config['base_url'] = site_url("article/archive/$bulan/$tahun");
        $config['total_rows'] = $this->db->select("*")->from("article")->where("month(date_post)=$bulan and year(date_post)=$tahun and status=1")->count_all_results('');
        $config['per_page'] = "2";
        $config["uri_segment"] = 5;
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
        $data['page'] = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
        $data['article_by_monthnya'] = $this->welcome_model->get_article_by_archive_list($bulan,$tahun,$config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();    
        $data['article_by_month'] = $this->welcome_model->show_article_by_month()->result_array();        
        $data['faq'] = $this->khotbah_model->Get_show_faq()->result_array();
        $data['article_category'] = $this->welcome_model->get_category_list($config["per_page"], $data['page']);   
        $data['category_catalog'] = $this->welcome_model->category_catalog()->result_array();
        $data['article'] = $this->welcome_model->show_article()->result_array();        
        $data['pagination'] = $this->pagination->create_links();    
        $data['article_recent'] = $this->welcome_model->show_article_recent()->result_array();
        $data["main_template"] = "View_article_category";
        $this->load->view('Welcome_template',$data);
    }
}
