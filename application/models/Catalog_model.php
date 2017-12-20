<?php
class Catalog_model extends CI_Model
    {
        function get_catalog_list($limit, $start)
    {
        $sql = 'select catalog.id_catalog,catalog.id_category,catalog.title,catalog.description,
                catalog.foto,
                     category.id_category,category.category,
                            catalog.status, case when catalog.status = 1 then "Publish"
                                when catalog.status = 0 then "Non Publish" else "Draft"
                                    end as status from catalog left join category on category.id_category=catalog.id_category 
                      order by id_catalog desc limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function show_catalog_id($id_catalog){
        $query = $this->db->query("select * from catalog where id_catalog=$id_catalog");
        $result = $query->result_array();
    return $result;
    }
    function Get_show_catalog(){   
        return $this->db->query("select catalog.id_catalog,catalog.id_category,catalog.title,catalog.description,
                catalog.foto,
                     category.id_category,category.category,
                            catalog.status, case when catalog.status = 1 then 'Publish'
                                when catalog.status = 0 then 'Non Publish' else 'Draft'
                                    end as status from catalog 
                            inner join category on catalog.id_category=category.id_category 
                       where
                catalog.id_category=category.id_category order by catalog.date_post desc");
    }
    function getcategory(){
    return $this->db->query("select catalog.*,category.id_category,category.category
                from catalog left join category on catalog.id_category=category.id_category 
                where catalog.id_category=category.id_category order by rand()");
    }
    function show_id_category($id_catalog)
    {
        return $this->db->query("select catalog.id_catalog,catalog.id_category,category.id_category,category.category 
            from catalog left join category on catalog.id_category=category.id_category where catalog.id_catalog=".$id_catalog);

    }
   

    function show_list_category()
    {
        return $this->db->query("select * from category order by rand()");

    }
   
   
        function multiple_delete() {
		    $action = $this->input->post('action');
		        if ($action == "delete") {
			        $delete = $this->input->post('selected');
			        for ($i=0; $i < count($delete) ; $i++) { 
                         $this->db->where('id_catalog',$delete[$i]);
                        $query = $this->db->get('catalog');
                        $row = $query->row();
                        $this->db->where('id_catalog', $delete[$i]);
                        unlink("./assets/foto/$row->foto");
                        $this->db->delete('catalog', array('foto' => $delete[$i]));
			     $this->db->where('id_catalog', $delete[$i]);
		      $this->db->delete('catalog');
			}
		}
    }
}
