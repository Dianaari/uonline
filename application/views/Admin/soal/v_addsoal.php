<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Tambah Data Soal</h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo site_url('Admin/soal/add')?>" method="post">
                <table class="table table-striped">
<!--                     <tr>
                        <td>Kode Soal</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="id_soal" placeholder="Masukkan kode soal" required="requreid" class="form-control" value="<?php echo set_value('id_soal'); ?>">
                                </div></td> 
                    </tr> -->
                    <tr> 
                        <td>Id Ujian</td>
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="ujian" placeholder="Pilih mata pelajaran"  value="<?php echo set_value('ujian'); ?>">
                                    <option>---Pilih id ujian---</option>
                                    <?php foreach ($ujian as $row) { ?>

                                    <option value="<?php echo $row->id_ujian; ?>"> <?php echo $row->id_ujian; ?> </option>
                                    
                                    <?php } ?>

                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Soal</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nama_soal" placeholder="Masukkan nama soal" class="form-control" value="<?php echo set_value('nama_soal'); ?>">
                                </div></td> 
                    </tr>

                    
                    <tr> 
                        <td>Mata Pelajaran</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="mapel" placeholder="Pilih mata pelajaran" value="<?php echo set_value('mapel'); ?>">
                                    <option>---Pilih mata pelajaran---</option>
                                    <?php foreach ($mapel as $row) { ?>

                                    <option value="<?php echo $row->id_mapel; ?>"> <?php echo $row->nama_mapel; ?> </option>
                                    
                                    <?php } ?>

                                </select>
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Kelas</td> 
                        <td><div class="col-md-6"> 
                                <select class="select2 form-control" name="kelas" placeholder="Pilih kelas" value="<?php echo set_value('kelas'); ?>">
                                    <option>---Pilih kelas---</option>
                                    <?php foreach ($kelas as $row) { ?>

                                    <option value="<?php echo $row['id_kelas']; ?>"> <?php echo $row['kelas']; ?> </option>
                                    
                                    <?php } ?>
                                </select>
                            </div>
                        </td> 
                    </tr>
                    <tr>
                        <td>Waktu Mulai</td>
                        <td><div class="col-sm-6"> 
                                <div class="col-lg-12 input-group date form_date" data-date="" name="waktu_mulai" data-date-format="yyyy-mm-dd " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd hh:ii">
                                <input type="text" name="waktu_mulai" class="form-control" placeholder="yyyy-mm-dd"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>Waktu Akhir</td>
                        <td><div class="col-sm-6"> 
                                <div class="col-lg-12 input-group date form_date" data-date="" name="waktu_akhir" data-date-format="yyyy-mm-dd " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd hh:ii">
                                <input type="text" name="waktu_akhir" class="form-control" placeholder="yyyy-mm-dd"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </td> 
                    </tr>

                   <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('Admin/soal/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" class="btn btn-success" value="Tambah"> 
                        </td> 
                     </tr>
                </table>


            </form>
        </div> 
    </div>