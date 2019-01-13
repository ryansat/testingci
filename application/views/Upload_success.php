<html>
 
   <head> 
      <title>Upload Form</title> 
   </head>
	
   <body>  
      <h3>Your file was successfully uploaded!</h3>  
      <?php foreach ($upload_data as $item => $value):?> 
      <?php

         if ($item == 'full_path')
          {
            // echo $item;
             //$data = $item;
         }

          
          ?> <?php 
          if ($item == 'full_path')
          {
             //echo $value;
             $data = $value;
            }
          ?>
         <?php endforeach; ?>
		<p> <?php echo $data;?> </p>
      <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>  
   </body>
	
</html>