<?php 
   class Upload_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) { 
         if ($this->db->insert("uploads", $data)) { 
            return true; 
         } 
      } 
   
      
   } 
?> 