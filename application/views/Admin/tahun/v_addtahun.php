<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Tambah Tahun Ajaran</h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo site_url('Admin/tahun/add')?>" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td>Tahun Ajaran</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="tahun_ajaran" placeholder="Masukkan tahun ajaran" required="requreid" class="form-control" value="<?php echo set_value('tahun_ajaran'); ?>">
                                </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Status Tahun</td>
                        <td>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-2">
                                    <input type="radio" name="status_tahun" class="type" value="Aktif" checked>
                                    <label>Aktif</label>
                                </div>
<!--                             <div class="col-lg-2">
                                <input type="radio" name="status_tahun" class="type" value="Tidak Aktif"> 
                                <label>Tidak Aktif</label>
                            </div> -->
                            </div>
                        </div>


                    </tr> 

                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('Admin/tahun/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" class="btn btn-success" value="Tambah"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>