<html>
 
   <head> 
      <title>Upload Form</title> 
   </head>
	
   <body>  
      <h3>Your file was successfully uploaded!</h3>  
      <?php foreach ($upload_data as $item => $value):?> 
      <?php
         echo $item;
         if ($item == 'full_path')
          {
            // echo $item;
             //$data = $item;
         }
         if ($item == 'file_name')
         {
            $image = $value;
         }

          
          ?> <?php 
          echo $value;
          if ($item == 'full_path')
          {
             $data = $value;
            }
            if ($item == 'file_name')
            {
               $image = $value;
            }
          ?>
         <?php endforeach; ?>
      <p> <?php echo $data;?> </p>
      <p> <?php 
     // $images = glob($data);
      //echo base_url('uploads/a.jpg');   

      
      echo '<img src='.base_url('uploads/'.$image).' /><br />'; ?></p>
      <p></p>  
   </body>
	
</html>