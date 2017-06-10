<div class="col-lg-12 row">
  <div class="panel panel-default">
    <div class="panel-body">
      <a href="<?php echo base_url('index.php/home/indexGuru');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-dashboard g3x"></i><br><br/>Dashboard </a>
      <a href="<?php echo base_url('index.php/Guru/csiswa_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Siswa </a>
      <a href="<?php echo base_url('index.php/Guru/cmapel_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Mapel</a>
      <a href="<?php echo base_url('index.php/Guru/cujian_g');?>" class="btn btn-sq btn-primary" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Ujian</a>
      <a href="<?php echo base_url('index.php/Guru/csoal_g');?>" class="btn btn-sq btn-warning"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Soal </a>
      <a href="<?php echo base_url('index.php/Guru/chasil_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-check g3x"></i><br><br/>Hasil Ujian </a></div>
  </div>
</div>


<div class="row col-md-12 ini_bodi">
  <div class="panel panel-info">
    <div class="panel-heading">Data Soal Ujian
      <div class="tombol-kanan">
        <a class="btn btn-success btn-sm tombol-kanan" href="<?php echo base_url('index.php/Guru/csoal_g/tampil/');?>" onclick=""><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
<!--         <a href='' class='btn btn-info btn-sm' target='_blank'><i class='glyphicon glyphicon-print'></i> Cetak</a>
 -->      </div>
    </div>

    <div class="panel-body">
    <?php echo $this->session->flashdata('Pesan'); ?>
      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="5%">Id Ujian</th>
            <th width="10%">Nama Ujian</th>
            <th width="10%">Nama Soal</th>
            <th width="15%">Mata Pelajaran</th>
            <th width="5%">Kelas</th>
            <th width="10%">Waktu Mulai</th>
            <th width="10%">Waktu Akhir</th>
            <th width="30%">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php 
                $no=1;
                foreach ($soal as $row):
            ?>

              <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['id_ujian']; ?></td>
                  <td><?php echo $row['nama_ujian']; ?></td>
                  <td><?php echo $row['nama_soal']; ?></td>
                  <td><?php echo $row['nama_mapel']; ?></td>
                  <td><?php echo $row['kelas']; ?></td>
                  <td><?php echo $row['waktu_mulai']; ?></td>
                  <td><?php echo $row['waktu_akhir']; ?></td>
                  <td>
                          <a href="<?php echo base_url('index.php/Guru/csoal_g/edit/'.$row['id_soal']);?>" onclick="" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit</a>
                          <a href="<?php echo base_url('index.php/Guru/csoal_g/delete/'.$row['id_soal']);?>" onclick="return confirm('Anda Yakin menghapus data ini?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus</a>
                          <a href="<?php echo base_url('index.php/Guru/cpertanyaan_g/detail_input/'.$row['id_soal']);?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus" style="margin-left: 0px; color: #fff"></i>&nbsp;&nbsp;Input</a> 
                          <a href="<?php echo base_url('index.php/Guru/csoal_g/detail/'.$row['id_soal']);?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-eye-open" style="margin-left: 0px; color: #fff"></i>&nbsp;&nbsp;lihat</a> 
                  </td>
              </tr>
            <?php 
              $no++;
              endforeach; 
            ?>

        </tbody>
      </table>
    
      </div>
    </div>
  </div>
