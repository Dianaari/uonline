<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Tambah Mata Pelajaran</h1>
        </div> 
        <div class="panel-body"> 
            <form action="<?php echo site_url('Admin/mapel/add_mapel')?>" method="post">
                <?php validation_errors(); echo $message;?>
                <table class="table table-striped">
                    <tr> 
                        <td>Id Mapel</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="id_mapel" placeholder="Masukkan kode mapel" required="requreid" class="select2 form-control" value="<?php echo set_value('id_mapel'); ?>">
                                </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nama_mapel" placeholder="Masukkan nama mata pelajaran" required="requreid" class="form-control" value="<?php echo set_value('nama_mapel'); ?>">
                                </div></td> 
                    </tr> 
<!--                     <tr> 
                        <td>Kelas</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="kelas" placeholder="Pilih kelas" required="requreid" value="<?php echo set_value('kelas'); ?>">
                                    <option>---Pilih Kelas---</option>
                                    <?php foreach ($kelas as $row) { ?>

                                    <option value="<?php echo $row['id_kelas']; ?>"> <?php echo $row['kelas']; ?> </option>
                                    
                                    <?php } ?>

                                </select>
                            </div>
                        </td> 
                    </tr> -->

                    
                    <tr> 
                        <td>KKM</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="kkm" placeholder="Masukkan passing grade" required="requreid" class="form-control" value="<?php echo set_value('kkm'); ?>">
                                </div></td> 
                    </tr> 
<!--                     <tr> 
                        <td>Pengajar 1</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="pengajar1" placeholder="Pilih Nama Guru" required="requreid" value="<?php echo set_value('pengajar1'); ?>">
                                    <option>---Pilih guru pengajar---</option>
                                    <?php foreach ($guru as $row) { ?>

                                    <option value="<?php echo $row->nip; ?>"> <?php echo $row->nama_guru; ?> </option>
                                    
                                    <?php } ?>

                                </select>
                            </div>
                        </td> 
                    </tr> -->

                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('Admin/mapel/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" class="btn btn-success" value="Tambah"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div