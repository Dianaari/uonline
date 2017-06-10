<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Tambah Kelas</h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo site_url('Admin/kelas/add')?>" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td>Jenjang Kelas</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="jenjang" placeholder="Pilih jenjang kelas" required="requreid" value="<?php echo set_value('jenjang'); ?>">
                                    <option>---Pilih jenjang kelas---</option>
                                    <option>X</option>
                                    <option>XI</option>
                                    <option>XII</option>
                                </select>
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Jenis Kelas</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="jenis_kelas" placeholder="Pilih jenis kelas" value="<?php echo set_value('jenis_kelas'); ?>">
                                    <option>---Pilih jenis kelas---</option>
                                    <option>MIPA</option>
                                    <option>IPS</option>

                                </select>
                            </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Nama Kelas</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nama_kelas" placeholder="Masukkan nama kelas" required="requreid" class="form-control" value="<?php echo set_value('nama_kelas'); ?>">
                                </div></td> 
                    </tr>

                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('Admin/kelas/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" class="btn btn-success" value="Tambah"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>