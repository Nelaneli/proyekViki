<?php
 
class Adminviki extends CI_Model {
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function produk() {
        $query = $this->db->get('produk');  //produk = nama tabel pada database
        return $query->result();
    }
    
    function ambil_id() {
        $query = $this->db->query("SELECT id_produk FROM produk ORDER BY id_produk DESC LIMIT 1");  //produk = nama tabel pada database
        return $query->result();
    }
    
    function tambah_produk($data){
        $this->db->reconnect();
        $this->db->insert('produk',$data);
       
        return TRUE;
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