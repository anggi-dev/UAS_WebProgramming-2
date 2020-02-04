<div class="main">
	<section class="signup">

			<div class="container">

<div class="signup-content">
	<form action="<?= base_url('Login_admin/f_login');?>" method="post">
		<h2 class="text-center">Log in Administrator</h2>
		<div class="form-group">
			<?= $this->session->flashdata('message'); ?>
		</div>
		<div class="form-group">
			<input type="text" name="username" class="form-input" placeholder="Masukkan Username" required="required">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-input" placeholder="Masukkan Password" required="required">
		</div>
		<div class="form-group">
			<button type="submit" class="form-submit">Log in</button>
		</div>

	</form>
	<p class="loginhere">
			Anda Mahasiswa ? <a href="<?= base_url('Login_c/');?>" class="loginhere-link">Login disini</a>
	</p>
</div>
</div>
</section>
</div>


<link rel="stylesheet" href="<?php echo base_url('assets/fonts/material-icon/css/material-design-iconic-font.min.css')?>">

<!-- Main css -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css')?>">

<body>


<!-- JS -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/main.js')?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html> -->
