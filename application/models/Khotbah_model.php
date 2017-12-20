<?php
class Khotbah_model extends CI_Model
    {
        function get_khotbah_list($limit, $start)
    {
        $sql = 'select * from khotbah
                      order by id_khotbah desc limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function show_khotbah_id($id_khotbah){
        $query = $this->db->query("select * from khotbah where id_khotbah=$id_khotbah");
        $result = $query->result_array();
    return $result;
    }
    function Get_show_khotbah(){   
        return $this->db->query("select * from khotbah order by id_khotbah desc");
    }
     function Get_show_faq(){   
        return $this->db->query("select * from faq order by id_faq desc");
    }
     function Get_show_faqs(){   
        return $this->db->query("select * from faq order by id_faq desc limit 2");
    }
    function getcategory(){
    return $this->db->query("select catalog.*,category.id_category,category.category
                from catalog left join category on catalog.id_category=category.id_category 
                where catalog.id_category=category.id_category order by rand()");
    }
    function show_id_khotbah($id_khotbah)
    {
        return $this->db->query("select * from khotbah where id_khotbah=".$id_khotbah);

    }
   

    function show_list_category()
    {
        return $this->db->query("select * from category order by rand()");

    }
   
   
        function multiple_delete() {
		    $action = $this->input->post('action');
		       if ($action == "delete") {
			        $delete = $this->input->post('selected');
			        for ($i=0; $i < count($delete); $i++) { 
                         $this->db->where('id_khotbah',$delete[$i]);
                        $query = $this->db->get('khotbah');
                        $row = $query->row();
                        $this->db->where('id_khotbah', $delete[$i]);
                        unlink("./assets/foto/$row->foto");
                        $this->db->delete('khotbah', array('foto' => $delete[$i]));
			     $this->db->where('id_khotbah', $delete[$i]);
		      $this->db->delete('khotbah');
			}
		}
    }
}
