<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Edit Data Ujian</h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo site_url('Admin/ujian/edit').'/'.$editdata[0]['id_ujian']?>" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td>Id Ujian</td> 
                        <td><div class="col-sm-6"> 
                                <input type="text" name="id_ujian" required="requreid" class="form-control" value="<?php echo $editdata[0]['id_ujian'] ?>" readonly="readonly">
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Nama Ujian</td> 
                        <td><div class="col-sm-6"> 
                                <input type="text" name="nama_ujian" required="requreid" class="form-control" value="<?php echo $editdata[0]['nama_ujian'] ?>">
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Tahun Ajaran</td>
                        <td>
                             <div class="col-md-6">
                                <select class="select2 form-control" name="tahun" required="requried" data-placeholder="Pilih tahun ajaran" value="<?php echo $editdata[0]['tahun'] ?>">
                                 <option>---Pilih tahun ajaran---</option>
                                    <?php foreach ($tahun as $row) { ?>

                                    <option value="<?php echo $row->id_tahun; ?>" <?php echo $editdata[0]['id_tahun'] == $row->id_tahun ? 'selected' : ''; ?>> <?php echo $row->tahun_ajaran; ?> </option>

                                    <?php } ?>

                                </select>
                            </div>
                        </td> 
                    </tr>  
                    <tr>
                        <td>Tanggal Mulai</td>
                        <td><div class="col-sm-6"> 
                                    <input type="date" name="tgl_mulai" required="requreid" class="form-control" value="<?php echo $editdata[0]['tgl_mulai'] ?>">
                                </div></td> 
                    </tr>
                    <tr>
                        <td>Tanggal Selesai</td>
                        <td><div class="col-sm-6"> 
                                    <input type="date" name="tgl_selesai" required="requreid" class="form-control" value="<?php echo $editdata[0]['tgl_selesai'] ?>">
                                </div></td> 
                    </tr>
<!--                     <tr>
                        <td>Pilih Jenjang kelas</td>
                        <td>
                            <div class="col-md-6">
                                <select class="select2 form-control" name="kelas" value="" data-placeholder="Pilih kelas" value="<?php echo $editdata[0]['kelas'] ?>">
                                    <option>---Pilih jenjang kelas---</option>
                                    <?php foreach ($kelas as $row) { ?>

                                    <option value="<?php echo $row['id_kelas']; ?>" <?php echo $editdata[0]['id_kelas'] == $row['id_kelas'] ? 'selected' : ''; ?> > <?php echo $row['jenjang_kelas']; ?> </option>

                                    <?php } ?>

                                </select>
                            </div>

                            <a href="" id="url_kelas" class="btn btn-warning btn-xm"><i class="glyphicon glyphicon-search" style="margin-left: 0px; color: #fff"></i></a> 
 -->
<!--                        <div class="col-md-6">
                                <a href="javascript:;" class="btn btn-success tambah_obat"><i class="glyphicon glyphicon-plus"></i></a>
                            </div>
                        </td>
                    </tr> -->
                    
                    <tr>
                        <td>Status Ujian</td>
                        <td>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-2">
                                    <input type="radio" name="status_ujian" class="type" value="Aktif" checked>
                                    <label>Aktif</label>
                                </div>
                            <div class="col-lg-2">
                                <input type="radio" name="status_ujian" class="type" value="Tidak Aktif"> 
                                <label>Tidak Aktif</label>
                            </div>
                            </div>
                        </div>


                    </tr>  
                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('Admin/ujian/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>

