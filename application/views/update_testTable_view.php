<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
	
   <body> 
      <form method = "" action = "">
      <?php 
            echo form_open('coba/update_testTable'); 
            echo form_hidden('id',$kode); 
            echo form_label('Kode'); 
            echo form_input(array('id'=>'kode','name'=>'kode','value'=>$records[0]->kode));
            //echo form_input(array('id'=>'id','name'=>'id','value'⇒$records[0]->id)); 
            echo ""; 

            echo form_label('Name'); 
            echo form_input(array('id'=>'nama','name'=>'nama','value'=>$records[0]->nama));
            //echo form_input(array('id'⇒'nama','name'⇒'nama','value'⇒$records[0]nama)); 
            echo ""; 

            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
      </form> 
   </body>
	
</html>