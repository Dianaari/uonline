<div class="col-lg-12 row">
  <div class="panel panel-default">
    <div class="panel-body">
      <a href="<?php echo base_url('index.php/home/indexGuru');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-dashboard g3x"></i><br><br/>Dashboard </a>
      <a href="<?php echo base_url('index.php/Guru/csiswa_g');?>" class="btn btn-sq btn-warning"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Siswa </a>
      <a href="<?php echo base_url('index.php/Guru/cmapel_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Mapel</a>
      <a href="<?php echo base_url('index.php/Guru/cujian_g');?>" class="btn btn-sq btn-primary" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Ujian</a>
      <a href="<?php echo base_url('index.php/Guru/csoal_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Soal </a>
      <a href="<?php echo base_url('index.php/Guru/chasil_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-check g3x"></i><br><br/>Hasil Ujian </a></div>
  </div>
</div>


<div class="row col-md-12 ini_bodi">
  <div class="panel panel-info">
    <div class="panel-heading">Data Siswa SMA Negeri 1 Gombong
      <!-- <div class="tombol-kanan">
        <a class="btn btn-success btn-sm tombol-kanan" href="<?php echo base_url('index.php/Guru/csiswa_g/tampil/');?>"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
      </div> -->
    </div>

    <div class="panel-body">
        <?php echo $this->session->flashdata('pesan'); ?> 
      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="15%">NIS</th>
            <th width="25%">Nama Siswa</th>
            <th width="10%">Gender</th>
            <th width="10%">Kelas</th>
            <th width="10%">Tahun Ajaran</th>
            <th width="10%">Username</th>
            <th width="15%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
                $no=1;
                foreach ($siswa as $row):
            ?>

              <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nis']; ?></td>
                  <td><?php echo $row['nama_siswa']; ?></td>
                  <td><?php echo $row['jenkel']; ?></td>
                  <td><?php echo $row['kelas']; ?></td>
                  <td><?php echo $row['tahun_ajaran']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td>
<!--                           <a href="<?php echo base_url('index.php/Guru/csiswa_g/edit/'.$row['nis']);?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit</a>
                          <a href="<?php echo base_url('index.php/Guru/csiswa_g/delete/'.$row['nis']);?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus</a> -->
                           <a href="<?php echo base_url('index.php/Guru/csiswa_g/detail/'.$row['nis']);?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-eye-open" style="margin-left: 0px; color: #fff"></i>&nbsp;&nbsp;lihat</a> 
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
