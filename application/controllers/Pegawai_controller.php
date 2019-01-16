<?php 
   class Pegawai_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session');
         $status = $this->session->userdata('users');
         if($status != "login"){
            redirect(base_url("login"));
         }
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("Pegawai"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url'); 
         $this->load->view('Pegawai_view',$data); 
      } 
  
      public function add_Pegawai_view() { 
         $this->load->helper('form'); 
         $this->load->view('Pegawai_add'); 
      } 
  
      public function add_Pegawai() { 
         $this->load->helper('form');
         $this->load->model('Pegawai_Model');
			
         $data = array( 
            'kode' => $this->input->post('kode'), 
            'alamat' => $this->input->post('alamat'),
            'nama' => $this->input->post('nama') 
         ); 
			
         $this->Pegawai_Model->insert($data); 
   
         $query = $this->db->get("Pegawai"); 
         $data['records'] = $query->result(); 
         $this->load->view('Pegawai_view',$data); 
      } 
  
      public function update_Pegawai_view() { 
         $this->load->helper('form'); 
         $kode = $this->uri->segment('3'); 
         $query = $this->db->get_where("Pegawai",array("kode"=>$kode));
         $data['records'] = $query->result(); 
         $data['kode'] = $kode; 
         $this->load->view('Pegawai_edit',$data); 
      } 
  
      public function update_Pegawai(){ 
         $this->load->model('Pegawai_Model');
			
         $data = array( 
            'kode' => $this->input->post('kode'), 
            'alamat' => $this->input->post('alamat'),
            'name' => $this->input->post('name') 
         ); 
			
         $kode = $this->input->post('kode'); 
         $this->Pegawai_Model->update($data,$kode); 
			
         $query = $this->db->get("Pegawai"); 
         $data['records'] = $query->result(); 
         $this->load->view('Pegawai_view',$data); 
      } 
  
      public function delete_Pegawai() { 
         $this->load->model('Pegawai_Model'); 
         $kode = $this->uri->segment('3'); 
         $this->Pegawai_Model->delete($kode); 
   
         $query = $this->db->get("Pegawai"); 
         $data['records'] = $query->result(); 
         $this->load->view('Pegawai_view',$data); 
      } 
   } 
?>