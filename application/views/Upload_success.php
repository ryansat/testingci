<html>
 
   <head> 
      <title>Upload Form</title> 
   </head>
	
   <body>  
      <h3>Your file was successfully uploaded!</h3>  
      <ul> 
      <?php foreach ($upload_data as $item => $value):?> 
         <li><?php

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
          ?></li> 
         <?php endforeach; ?>
      </ul>  
		<p> <?php echo $data;?> </p>
      <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>  
   </body>
	
</html>