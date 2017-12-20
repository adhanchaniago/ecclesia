<?php
class Profil_model extends CI_Model
    {
        function get_profil_list($limit, $start)
    {
      $sql = 'select * from profil order by id desc limit ' . $start . ', ' . $limit;
                              $query = $this->db->query($sql);
        return $query->result_array();
    }
    function show_profil_id($id){
        $query = $this->db->query('select * from profil where profil.id='.$id);
        $result = $query->result_array();
    return $result;
    }
    function Get_show_profil(){   
        return $this->db->query("select * from profil order by profil.id desc");
    }
    function getprofil(){
    return $this->db->query("select * from profil order by rand()");
    }
    function show_id_profil($id)
    {
        return $this->db->query("select * from profil where profil.id=".$id);

    }
   

    function show_list_profil()
    {
        return $this->db->query("select * from profil order by id desc");

    }
   
   
        function multiple_delete() {
		    $action = $this->input->post('action');
		        if ($action == "delete") {
			        $delete = $this->input->post('selected');
			        for ($i=0; $i < count($delete) ; $i++) { 
                         $this->db->where('id',$delete[$i]);
                        $query = $this->db->get('profil');
                        $row = $query->row();
                        $this->db->where('id', $delete[$i]);
                        unlink("./assets/files/$row->file");
                        $this->db->delete('profil', array('file' => $delete[$i]));
			     $this->db->where('id', $delete[$i]);
		      $this->db->delete('profil');
			}
		}
    }
}
