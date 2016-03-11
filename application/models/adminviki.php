<?php
 
class Adminviki extends CI_Model {
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function produk() {
        $query = $this->db->get('produk');
        return $query->result();
    }
    
    function tambah_produk($nama, $des, $hrg){
        $this->db->reconnect();
        $tambah=$this->db->query("INSERT INTO produk VALUES (NULL, '$nama','$des', $hrg)");
        
        if($tambah){
            return 0;
        }
        else    return -1;
    }
    function hapus_produk($id)       
    {
        $this->db->reconnect();
        $query=$this->db->query("DELETE FROM produk WHERE id_produk = '$id'");
        if($query){
            return 0;
        }else{
            return -1;
        }
    }

    
}
?>