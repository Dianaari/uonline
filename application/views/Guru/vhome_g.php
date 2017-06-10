<div class="col-lg-12 row">
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="<?php echo base_url('index.php/home/indexGuru');?>" class="btn btn-sq btn-warning"><i class="glyphicon glyphicon-dashboard g3x"></i><br><br/>Dashboard </a>
            <a href="<?php echo base_url('index.php/Guru/csiswa_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Siswa </a>
            <a href="<?php echo base_url('index.php/Guru/cmapel_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Mapel</a>
            <a href="<?php echo base_url('index.php/Guru/cujian_g');?>" class="btn btn-sq btn-primary" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Ujian</a>
            <a href="<?php echo base_url('index.php/Guru/csoal_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Soal </a>
            <a href="<?php echo base_url('index.php/Guru/chasil_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-check g3x"></i><br><br/>Hasil Ujian </a></div>
        </div>
</div>

<div class="row col-md-12 ini_bodi">
    <div class="panel panel-info">
        <div class="panel-heading">Selamat datang di Sistem Ujian Online</div>
    <div class="panel-body">
         <div class="alert alert-info">Selamat datang, anda telah login sebagai <b>Guru</b>. Username : <b><?php echo $username; ?></b></div>
    </div>
    </div>
</div>