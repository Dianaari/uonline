<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Tambah Ujian <input type="hidden" id="aksi" value=""></input></h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo site_url('Admin/ujian/add')?>" method="post">
                <?php validation_errors(); echo $message;?>
                <table class="table table-striped" id="tambah_ujian">
                    <tr> 
                        <td>Id Ujian</td> 
                        <td><div class="col-sm-6"> 
                                <input type="text" name="id_ujian" placeholder="Masukkan id ujian" required="requreid" class="form-control" value="<?php echo set_value('id_ujian'); ?>">
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Nama Ujian</td> 
                        <td><div class="col-sm-6"> 
                                <input type="text" name="nama_ujian" placeholder="Masukkan nama ujian" required="requreid" class="form-control" value="<?php echo set_value('nama_ujian'); ?>">
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Tahun Ajaran</td>
                        <td>
                             <div class="col-md-6">
                                <select class="select2 form-control" name="tahun" placeholder="Masukkan tahun ajaran" required="requried" data-placeholder="Pilih tahun ajaran" value="<?php echo set_value('id_tahun'); ?>">
                                 <option>---Pilih tahun ajaran---</option>
                                    <?php foreach ($tahun as $row):?>

                                    <option value="<?php echo $row->id_tahun; ?>"> <?php echo $row->tahun_ajaran; ?> </option>
                                    
                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </td> 
                    </tr> 
 
                    <tr>
                        <td>Tanggal Mulai</td>
                        <td><div class="col-sm-6"> 
                                    <input type="date" name="tgl_mulai" placeholder="Masukkan tanggal mulai ujian" required="requreid" class="form-control" value="<?php echo set_value('tgl_mulai'); ?>">
                                </div></td> 
                    </tr>
                    <tr>
                        <td>Tanggal Selesai</td>
                        <td><div class="col-sm-6">
                                    <input type="date" name="tgl_selesai" placeholder="Masukkan tanggal selesai ujian" required="requreid" class="form-control " value="<?php echo set_value('tgl_selesai'); ?>">
                                </div></td> 
                    </tr>
<!--                     <tr>
                        <td>Pilih Jenjang kelas</td>
                        <td>
                            <div class="col-md-6">
                                <select class="select2 form-control" name="kelas" id="id_kelas" onChange="idkelaschange(this)" data-placeholder="Pilih kelas" value="<?php echo set_value('id_kelas'); ?>">
                                    <option>---Pilih jenjang kelas---</option>
                                    <?php foreach ($kelas as $row) { ?>

                                    <option value="<?php echo $row['id_kelas']; ?>"> <?php echo $row['jenjang_kelas']; ?> </option>
                                    
                                    <?php } ?>


                                </select>
                            </div>

                            <a href="" class="btn btn-warning btn-xm" id="url_kelas"><i class="glyphicon glyphicon-search" style="margin-left: 0px; color: #fff"></i></a> 
 -->
<!--                        <div class="col-md-6">
                                <a href="javascript:;" class="btn btn-success tambah_obat"><i class="glyphicon glyphicon-plus"></i></a>
                            </div>
                        </td>
                    </tr> -->
 

                    <tr> 
                        <td colspan="2">
                    <a href="<?php echo site_url('Admin/ujian/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                    <input type="submit" class="btn btn-success" value="Simpan">
                        </td> 
                    </tr>
                </table>
            </form>
        </div> 
    </div>