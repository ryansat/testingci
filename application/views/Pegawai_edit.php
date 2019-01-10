<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>test</title> 
   </head> 
	
   <body> 
		
         <?php 
            echo form_open('Pegawai_controller/update_Pegawai'); 
            echo form_hidden('kode',$kode); 
            echo form_label('Kode.'); 
            echo form_input(array('id'=>'kode','name'=>'kode',
               'value'=>$records[0]->kode)); 
            echo ""; 

            echo form_label('Name'); 
            echo form_input(array('id'=>'nama','name'=>'nama',
               'value'=>$records[0]->nama)); 
            echo ""; 

            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
   </body>
	
</html>