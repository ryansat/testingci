<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
   <body> 
         <?php 
            echo form_open('coba/add_testTable');
            echo form_label('ID.'); 
            echo form_input(array('id'=>'id','name'=>'nama')); 
            echo "<br/>"; 
			
            echo form_label('Nama'); 
            echo form_input(array('id'=>'id','name'=>'nama')); 
            echo "<br/>"; 
			
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
   </body>
</html>