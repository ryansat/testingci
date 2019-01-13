<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
         $this->load->database(); 
         $this->load->model('Upload_Model');
      }
		
      public function index() { 
         $this->load->view('upload_form', array('error' => ' ' )); 
      } 
		
      public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 10000000; 
         $config['max_width']     = 10000000; 
         $config['max_height']    = 10000000;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $datas = $this->upload->data();
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.           
            
            $image = '';
            foreach ($data as $item => $value):
               if ($item == 'file_name')
               {
                  $image = $value;
               }

               $file_name = $value;
            endforeach;
            $image = $datas['file_name'];//implode(', ', $file_name);
            print_r($image);
            $path = 'uploads/'.$image;
            $insertData = array( 
               'url' => $path, 
            ); 
            print_r($insertData);
            $this->Upload_Model->insert($insertData); 
            $this->load->view('upload_success', $data); 
         } 
      } 
   } 
?>