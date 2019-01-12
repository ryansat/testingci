<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
   <body> 

         <?php 
            echo form_open('Pegawai_controller/add_Pegawai');
            echo form_label('Kode'); 
            echo form_input(array('id'=>'kode','name'=>'kode')); 
            echo "<br/>"; 

            echo form_label('Alamat'); 
            echo form_input(array('id'=>'alamat','name'=>'alamat')); 
            echo "<br/>"; 
			
            echo form_label('Name'); 
            echo form_input(array('id'=>'nama','name'=>'nama')); 
            echo "<br/>"; 
			
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
   </body>
</html>