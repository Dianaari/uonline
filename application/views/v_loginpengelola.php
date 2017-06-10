<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Aplikasi Ujian Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>


<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<form action="<?php echo base_url('index.php/login/cek_login'); ?>" method="post">

		<div class="panel panel-default top150">
			<div class="panel-heading"><h4 style="margin: 5px"><i class="glyphicon glyphicon-user"></i> Login Pengelola</h4> </div>

			<div class="panel-body">
				<?php echo $this->session->flashdata('Pesan'); ?>
				<div id="konfirmasi"></div>
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" id="username" name="nama_pengguna" autofocus placeholder="Username" class="form-control" required/>
				</div> <!-- /field -->
				
				<div class="input-group top15">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" id="password" name="kata_sandi"  placeholder="Password" class="form-control" required/>
				</div> <!-- /password -->

				<div class="login-actions">
					<button type= "submit" class="button btn btn-dafault btn-large col-lg-12 top15">Login</button>
				</div> <!-- .actions -->
				<hr><hr>
				<center><a href="<?php echo base_url('index.php/login/index');?>"><i class=""></i> &nbsp;&nbsp;Kembali</a></center>

			</div>
		</div> <!-- /login-fields -->
	</form>

	</div>

	<div class="col-md-4"></div>
</div> 


<div class="ctr"> &copy; 2017 Sistem Informasi Ujian Online Smansago </div>

<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript">
	base_url = "<?php echo base_url(); ?>";
	uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>assets/js/aplikasi.js"></script> 
</body>
</html>
