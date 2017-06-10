<div class="col-lg-12 row">
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="<?php echo base_url('index.php/home/indexSiswa');?>" class="btn btn-sq btn-warning"><i class="glyphicon glyphicon-dashboard g3x"></i><br><br/>Dashboard </a>
            <a href="<?php echo base_url('index.php/Siswa/Ujian_s');?>" class="btn btn-sq btn-primary" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Ujian</a>
        </div>
    </div>
</div>

<div class="row col-md-12 ini_bodi">
    <div class="panel panel-info">
        <div class="panel-heading">Selamat datang di Sistem Ujian Online</div>
        <div class="panel-body">
            <div class="alert alert-info">Selamat datang, anda telah login sebagai <b>Siswa</b>. Username : <b><?php echo $username; ?></b></div>
        </div>

    <div class="panel-body">
      <input type="hidden" name="id_ujian" id="id_ujian" value="">
      <input type="hidden" name="_tgl_mulai" id="_tgl_mulai" value="">
      <input type="hidden" name="_terlambat" id="_terlambat" value="">
      <div class="col-md-7">
        <div class="panel panel-default">
          <div class="panel-body">
            <table class="table table-bordered">
              <tr><td width="35%">NIS</td><td width="65%"> <?php echo $nis;?></td></tr>
              <tr><td>Nama</td><td> <?php echo $nama_siswa;?> </td></tr>
              <tr><td>Kelas</td><td> <?php echo $jenjang;?> <?php echo $jenis_kelas;?> <?php echo $nama_kelas;?></td></tr>
              <tr><td>Nama Ujian</td><td> <?php echo $nama_ujian;?> </td></tr>
              <tr><td>Guru / Mapel</td><td> <?php echo $nama_guru;?>  / <?php echo $nama_mapel;?> </td></tr>
              <tr><td>Jml Soal</td><td> </td></tr>
              <tr><td>Batas Waktu</td><td> menit</td></tr>
            </table>
          </div>
        </div>
      </div>
      
     <div class="col-md-5">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="alert alert-info">
              Waktu boleh mengerjakan ujian adalah saat tombol "MULAI" berwarna hijau..!
            </div>

            <div class="btn btn-info btn-lg" id="btn_mulai"></div>
            <a href="<?php echo base_url('index.php/Siswa/tampilsoal');?>" class="btn btn-success btn-lg" id="tbl_mulai" onclick=""><i class="fa fa-check-circle"></i> MULAI</a>
            <div class="btn btn-danger" id="ujian_selesai">UJIAN TELAH SELESAI</div>
          </div>
        </div>
      </div>

    </div>




    </div>
</div>


