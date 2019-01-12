<?php 
   class Pegawai_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) { 
         if ($this->db->insert("pegawai", $data)) { 
            return true; 
         } 
      } 
   
      public function delete($kode) { 
         if ($this->db->delete("pegawai", "kode = ".$kode)) { 
            return true; 
         } 
      } 
   
      public function update($data,$kode) { 
         $this->kode  = $_POST['kode'];
         $this->alamat  = $_POST['alamat'];
         $this->nama  = $_POST['nama'];
         $this->db->update('pegawai', $this, array('kode' => $_POST['kode']));
      } 
   } 
?> 