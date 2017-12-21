<?php
class Welcome_model extends CI_Model
    {
    function get_catalog_list($id_category = '',$limit, $start)
    {
        $sql = 'select * from catalog where id_category='.$id_category.' and status=1 order by id_category desc limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result_array();
    } function list_catalog_id($id_category){
        return $this->db->query("select catalog.id_category,catalog.category,catalog.id_category,catalog.id_categorycatalog.title,
        catalog.foto,catalog.status from catalog left join category_catalog
        on catalog.id_category=catalog.id_category where catalog.id_category='$id_category' and status=1 group by catalog.id_category,category.category order by catalog.id_catalog desc");
    }
        function get_category_list($limit, $start)
    {
        $sql = 'select * from article where status=1 order by id_article desc limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result_array();
    } function category_catalog()
    {
        return $this->db->query("select *  from category order by id_category desc");

    } 
    function show_article(){
        return $this->db->query("select * from article where status=1 order by id_article desc");
    }function show_article_by_month(){
        return $this->db->query("select distinct month(date_post) as bulannya,year(date_post) as tahunnya from article where status=1 order by month(date_post) asc");
    } function show_article_recent(){
        return $this->db->query("select * from article where status=1 order by id_article desc limit 3");
    }function Get_detail_article($where = ''){
        return $this->db->query("select * from article $where;");
    }/*function Get_article_by_month($bulan,$tahun){
        return $this->db->query("select id_article,id_category,title,description,foto,status,author,counter,month(date_post) as bulan,year(date_post)as tahun from article
    where status=1 and month(date_post)='$bulan' and year(date_post)='$tahun' group by id_article,id_category,title,description,foto,status,author,counter,bulan,tahun");
    }*/
     function get_article_by_archive_list($bulan = '',$tahun = '',$limit, $start)
    {
        $sql = 'select id_article,date_post,id_category,title,description,author,status,counter,foto,day(article.date_post) as tanggal ,month(article.date_post) as bulan ,year(article.date_post) as tahun from article where month(article.date_post)='.$bulan.' and year(article.date_post)='.$tahun.' and status=1 order by id_category desc limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result_array();
    }function catalog_detail($where = ''){
        return $this->db->query("select * from catalog $where;");
    }
        function profil()
    {
          return $this->db->query("select * from profil");

    }function all_koment(){
        return $this->db->query("select * from faq where status=1 order by id_faq desc limit 3 ");
    }
    function replay_komentar($id_article){
        return $this->db->query("select * from faq where id_article=$id_article and status=1");
    }function gallery_replay($id){
        return $this->db->query("select * from faq where id_gallery=$id and status=1");
    }function replay_komen($id){
        return $this->db->query("select * from faq where id=$id and status=1");
    }function replay_faq(){
        return $this->db->query("select * from faq where status=1");
    }function komentar(){
        return $this->db->query("select * from faq order by id_faq desc");
    }function countkomentar(){
        return $this->db->query("select count(name) as count from faq order by id_faq desc");
    }
    } 