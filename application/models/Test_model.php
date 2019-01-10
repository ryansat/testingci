<?php 
   class Test_model extends CI_Model {
      private $_table = "testTable";
      
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
   
      public function insert($data) { 
         if ($this->db->insert("testTable", $data)) { 
            return true; 
         } 
      } 
   
      public function delete($kode) { 
         if ($this->db->delete("testTable", "id = ".$id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$kode) { 
         $data = array( 
            'kode' => "1", 
            'nama' => "aa" 
         ); 
         
         $this->db->set($data); 
         $this->db->where("kode", "1"); 
         $this->db->update($_table, $data);
         /*
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("testTable", $data); 
         */
      } 
   } 
?> 