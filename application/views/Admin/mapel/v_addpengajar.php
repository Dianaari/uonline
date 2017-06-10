<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Tambah Guru Pengajar</h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('Pesan'); ?> 
            <form action="<?php echo site_url('Admin/mapel/add_pengajar')?>" method="post">
                <table class="table table-striped">

                    <tr> 
                        <td>Id Mapel</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="mapel" placeholder="Kode Mapel" required="requreid" class="select2 form-control" value="<?php echo $pengajar[0]['id_mapel'] ?>" readonly="readonly">
                                </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Kelas</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="kelas" placeholder="Pilih kelas" value="<?php echo set_value('kelas'); ?>" required>
                                    <option>---Pilih Kelas---</option>
                                    <?php foreach ($kelas as $row) { ?>

                                    <option value="<?php echo $row['id_kelas']; ?>"> <?php echo $row['kelas']; ?> </option>
                                    
                                    <?php } ?>

                                </select>
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Guru Pengajar </td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="nip" placeholder="Pilih Nama Guru" required="requreid" value="<?php echo set_value('pengajar'); ?>">
                                    <option>---Pilih guru pengajar---</option>
                                    <?php foreach ($guru as $row) { ?>

                                    <option value="<?php echo $row->nip; ?>"> <?php echo $row->nama_guru; ?> </option>
                                    
                                    <?php } ?>

                                </select>
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Tahun Ajaran</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="tahun" placeholder="Pilih tahun ajaran" required="requreid" value="<?php echo set_value('tahun'); ?>">
                                    <option>---Pilih Tahun Ajaran---</option>
                                    <?php foreach ($tahun as $row) { ?>

                                    <option value="<?php echo $row->id_tahun; ?>"> <?php echo $row->tahun_ajaran; ?> </option>
                                    
                                    <?php } ?>

                                </select>
                            </div>
                        </td> 
                    </tr> 
                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo base_url('index.php/Admin/mapel/detail/'.$pengajar[0]['id_mapel']);?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" class="btn btn-success" value="Tambah"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div