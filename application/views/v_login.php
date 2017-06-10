<!DOCTYPE html>
<html lang="en">
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {width: 50%;}
</style>

<meta charset="utf-8">
<title>Aplikasi Ujian Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	<form action="" method="post">

		<div class="panel panel-default top150">
			<div class="panel-heading"><center><h4 style="margin: 5px">Selamat Datang di Sistem Ujian Online <br> SMA Negeri 1 Gombong</h4></center><br></div>
			<div class="panel-body">
<!-- 				<?php echo $this->session->flashdata('Pesan'); ?>
				<div id="konfirmasi"></div>
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" id="username" name="nama_pengguna" autofocus placeholder="Username" class="form-control" />
				</div> <!-- /field -->
				
<!-- 				<div class="input-group top15">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" id="password" name="kata_sandi"  placeholder="Password" class="form-control"/>
				</div> <!-- /password -->

<!-- 				<div class="login-actions">
					<button type= "submit" class="button btn btn-dafault btn-large col-lg-12 top15">Login</button>

				</div> -->

<!-- 				<div class="login-actions">
					<button type="text" class="button btn btn-dafault btn-large col-lg-12 top15">Login Siswa</button>
				</div> -->

				<div class="">
        				<a class="button buton2 btn-dafault btn-large col-lg-12 top15" href="<?php echo base_url('index.php/login/tampil_loginpengelola');?>"><i class=""></i> &nbsp;&nbsp;LOGIN SEBAGAI PENGELOLA</a>
      			</div>

      			<div class="">
        				<a class="button button2 btn-dafault btn-large col-lg-12 top15" href="<?php echo base_url('index.php/login/tampil_loginsiswa');?>"><i class=""></i> &nbsp;&nbsp;LOGIN SEBAGAI SISWA</a>
      			</div>

			</div>
		</div> <!-- /login-fields -->
	</form>

	</div>

	<div class="col-md-4"></div>
</div> 


<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript">
	base_url = "<?php echo base_url(); ?>";
	uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>assets/js/aplikasi.js"></script> 
</body>
</html>
