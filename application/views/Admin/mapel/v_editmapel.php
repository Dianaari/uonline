<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Edit Mata Pelajaran</h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo site_url('Admin/mapel/edit').'/'.$editdata[0]['id_mapel']?>" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td>Id Mapel</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="id_mapel" placeholder="Kode Mapel" required="requreid" class="select2 form-control" value="<?php echo $editdata[0]['id_mapel'] ?>" readonly="readonly">
                                </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nama_mapel" placeholder="Nama Mata Pelajaran" required="requreid" class="form-control" value="<?php echo $editdata[0]['nama_mapel'] ?>">
                                </div></td> 
                    </tr> 
<!--                     <tr> 
                        <td>Kelas</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="kelas" data-placeholder="Pilih Kelas" required="requreid" value="<?php echo $editdata[0]['kelas'] ?>">
                                    <option>---Pilih Kelas---</option>
                                    <?php foreach ($kelas as $row) { ?>

                                    <option value="<?php echo $row['id_kelas']; ?>" <?php echo $editdata[0]['id_kelas'] == $row['id_kelas'] ? 'selected' : ''; ?>> <?php echo $row['kelas']; ?> </option>

                                    <?php } ?>
                                    
                                </select>
                            </div>
                        </td> 
                    </tr> -->
                    <tr> 
                        <td>KKM</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="kkm" placeholder="Passing Grade" required="requreid" class="form-control" value="<?php echo $editdata[0]['kkm'] ?>">
                                </div></td> 
                    </tr> 
<!--                     <tr> 
                        <td>Pengajar</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="pengajar" placeholder="Pilih Nama Guru" required="requreid" value="<?php echo $editdata[0]['pengajar'] ?>">
                                    <option>---Pilih guru pengajar---</option>
                                    <?php foreach ($guru as $row) { ?>

                                    <option value="<?php echo $row->nip; ?>" <?php echo $editdata[0]['nama_guru'] == $row->nama_guru ? 'selected' : ''; ?>> <?php echo $row->nama_guru; ?> </option>

                                    <?php } ?>
                                    

                                </select>
                            </div>
                        </td> 
                    </tr> -->


                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('Admin/mapel/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>

