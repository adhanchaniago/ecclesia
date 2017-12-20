<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

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
		$data['article_recent'] = $this->welcome_model->show_article_recent()->result_array();
		$data["title"] = "Contact Us";
		$data['faq'] = $this->khotbah_model->Get_show_faq()->result_array();
		$data['category_catalog'] = $this->welcome_model->category_catalog()->result_array();
		$data['all_koment'] = $this->welcome_model->all_koment()->result_array();
		$data['komentar'] = $this->welcome_model->komentar()->result_array();
		$data['countkomentar'] = $this->welcome_model->countkomentar()->result_array();
		$data['replay_faq'] = $this->welcome_model->replay_faq()->result_array();
		$data["main_template"] = "Faq";
		$this->load->view('Welcome_template',$data);
	}
	
	function commit()
{

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters("<div class='alert alert-dismissable alert-danger'><button type='button' class='close' data-dismiss='alert'>
                                                        x
                                                   </button>", "</button></div>");
        $this->form_validation->set_rules('name', 'Nama', 'required|min_length[3]|max_length[225]');
        $this->form_validation->set_rules('hp', 'Nomor handphone', 'required|min_length[3]|max_length[225]');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[3]|max_length[225]');
        $this->form_validation->set_rules('message', 'Komentar', 'required|min_length[3]|max_length[225]');
        if ($this->form_validation->run() == FALSE)
    {
		$data["title"] = "Contact Us";
		$data['faq'] = $this->khotbah_model->Get_show_faq()->result_array();
		$data['article_recent'] = $this->welcome_model->show_article_recent()->result_array();
		$data['category_catalog'] = $this->welcome_model->category_catalog()->result_array();
		$data['all_koment'] = $this->welcome_model->all_koment()->result_array();
		$data['komentar'] = $this->welcome_model->komentar()->result_array();
		$data['countkomentar'] = $this->welcome_model->countkomentar()->result_array();
		$data['replay_faq'] = $this->welcome_model->replay_faq()->result_array();
		$data["main_template"] = "Faq";
		$this->load->view('Welcome_template',$data);
    }
		else
		{
		
		$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'message' => $this->input->post('message'),
				'hp' => $this->input->post('hp'),
  		        'date_sent' => date("Y-m-d H:i:s")
			);
		$create  = $this->db->insert('faq',$data);
        if ($create) $this->session->set_flashdata('message', "<div class='alert alert-dismissable alert-info'><button type='button' class='close' data-dismiss='alert'>
                                            <font size ='2' color='black'>
                                                <strong>x</strong>
                                            </font></button><strong><p align='center'>Komentar anda berhasil ditambahkan ,pesan akan ditampilkan setelah proses moderasi administrator ,terimakasih.</button></p></strong></div>");
     
        else
             $this->session->set_flashdata('message', "<div class='alert alert-info alert-block'><button type='button' class='close' data-dismiss='alert'>
                                            <font size ='2' color='black'>
                                                <strong>x</strong>
                                            </font></button><strong><p align='center'>Something Wrong!</button></p></strong></div>");
                redirect('faq'); 	
            }
        }
       }