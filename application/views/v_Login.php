<!DOCTYPE html>
<html>
	<head>Selamat Datang di Website kami</head>
<body>
	LOGIN PAGE
	<?php 
            echo form_open('Login_controller/login');
            echo form_label('username'); 
            echo form_input(array('id'=>'text','name'=>'username')); 
            echo "<br/>"; 

            echo form_label('password'); 
            echo form_input(array('id'=>'password','name'=>'password')); 
            echo "<br/>"; 
			
            echo form_submit(array('id'=>'submit','value'=>'LOGIN')); 
            echo form_close(); 
         ?> 	
	Silahkan mendaftar terlebih dahulu jika belum punya akun
	
	<form action="" method="post">
	<button type="submit" name="submit">Register</button>
	</form>
</body>
</html>