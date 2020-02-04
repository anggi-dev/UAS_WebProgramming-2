<div class="main">
	<section class="signup">

			<div class="container">

<div class="signup-content">
	<form action="<?= base_url('Register/f_register');?>" method="post">
		<h2 class="text-center">Register</h2>
		<div class="form-group">
			<?= $this->session->flashdata('message'); ?>
		</div>
		<div class="form-group">
			<input type="text" name="username" class="form-input" placeholder="Username berdasarkan NPM" required="required">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-input" placeholder="Masukkan Password" required="required" id="txtPassword" onchange="check_pass();">
		</div>
		<div class="form-group">
			<input type="password" name="retype-password" class="form-input" placeholder="Masukkan Kembali Password" required="required" id="txtConfirmPassword" onchange="check_pass();">
		</div>
		<div class="form-group">
			<button type="submit" class="form-submit" id="btnSubmit">Register</button>
		</div>
	</form>
	<p class="loginhere">
			Sudah punya akun ? <a href="<?= base_url('Login_c');?>" class="loginhere-link">Login disini</a> <br><br>
	</p>
	
</div>
</section>
</div>
</div>




<link rel="stylesheet" href="<?php echo base_url('assets/fonts/material-icon/css/material-design-iconic-font.min.css')?>">

<!-- Main css -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css')?>">

<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/main.js')?>"></script>

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
