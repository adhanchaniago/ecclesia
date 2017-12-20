<?php
class DataJson extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->helper('file');
    $this->load->database();
}
public function biodata()
{
$query =  $this->db->query("SELECT * from faq")->result_array(); 
    $data['query'] = $query;
    $data = array();
      $result = array(); 
    foreach ($query as $datas) 
    { 
        $data[] = array_push($result,array( 
            "name"                  =>  $datas["name"],
             "date_sent"    => $datas["date_sent"]
        ));
    } 
  header("Content-type: text/json");
    echo json_encode($result);
}
public function article()
{
$query =  $this->db->query("select title,month(date_post) as month from article")->result_array(); 
    $data['query'] = $query;
    $data = array();
      $result = array(); 
    foreach ($query as $datas) 
    { 
        $data[] = array_push($result,array( 
           
            "title"                  =>  $datas["title"],
             "month"    => $datas["month"]
        ));
    } 
  header("Content-type: text/json");
    echo json_encode($result);
}}