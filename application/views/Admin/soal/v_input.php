<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row col-md-12 ini_bodi">
  <div class="panel panel-info">
    <div class="panel-heading"><b>Data Pertanyaan</b>
      <div class="tombol-kanan">
        <a href="<?php echo site_url('Admin/soal/index')?>" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
        <a class="btn btn-success btn-sm tombol-kanan" href="<?php echo base_url('index.php/Admin/pertanyaan/tampil/'.$pertanyaan[0]['id_soal']);?>" onclick=""><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
<!--         <a class="btn btn-info btn-sm" href=""><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit</a> -->        

      </div>
    </div>

<div class="panel-body">
      <?php echo $this->session->flashdata('Pesan'); ?>
        <table class="table table-bordered" id="datatabel">
          <thead>
            <tr>
              <td width="5%">No</td>
              <td width="5%">Id Soal</td>
              <td width="10%">Jenis pertanyaan</td>
              <td width="40%">Pertanyaan</td>
              <td width="5%">Gambar</td>
              <td width="15%">Kunci</td>
              <td width="15%">Aksi</td>
            </tr>
          </thead>
        <tbody>
          <?php 
                $no=1;
                foreach ($pertanyaan as $row):
            ?>

              <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['id_soal']; ?></td>
                  <td><?php echo $row['jenis_pertanyaan']; ?></td>
                  <td><?php echo $row['pertanyaan']; ?></td>
                  <td><img src="<?php echo base_url('/assets/img/pertanyaan/'.$row['gambar']);?>" height="100px" width="100px"></td>
                  <td><?php echo $row['opsi']; ?></td>
                  <td>
                          <a href="<?php echo base_url('index.php/Admin/pertanyaan/edit/'.$row['id_pertanyaan']);?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit</a>
                          <a href="<?php echo base_url('index.php/Admin/pertanyaan/delete/'.$row['id_pertanyaan']);?>" onclick="return confirm('Anda Yakin menghapus data ini?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus</a>
                  </td>
              </tr>
            <?php 
              $no++;
              endforeach; 
            ?>

        </tbody>


          
        </table>
  </form>


      </div>
    </div>
  </div>
