<div class="main">
	<section class="signup">

			<div class="container">

<div class="signup-content">
	<!-- <div class="login-form"> -->
	<form action="<?= base_url('Login_c/f_login');?>" method="post">
		<h2 class="text-center">Login Mahasiswa</h2>
		 
		<div class="form-group">
			<?= $this->session->flashdata('message'); ?>
		</div>
		<div class="form-group">
			<input type="text" name="username" class="form-input" placeholder="Masukkan NPM" required="required">
			<!-- form-control -->
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-input" placeholder="Masukkan Password" required="required">
		</div>
		<div class="form-group">
			<button type="submit" class="form-submit">Login</button>
		</div>
		<div class="clearfix">

		</div>
	</form>
	<p class="loginhere">
			Belum punya akun ? <a href="<?= base_url('Register/');?>" class="loginhere-link">Daftar disini</a> <br><br>
			Anda Admin ? <br> <a href="<?= base_url('Login_admin/');?>" class="loginhere-link">Masuk</a>
	</p>
	<!-- <p class="text-center"><a href="<?= base_url('Register/');?>">Create an Account</a></p> -->
</div>
  </section>
</div>
</div>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/material-icon/css/material-design-iconic-font.min.css')?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css')?>">

<body>


    <!-- JS -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html> -->
