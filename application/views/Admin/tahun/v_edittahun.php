<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Edit Tahun Ajaran</h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo site_url('Admin/tahun/edit').'/'.$editdata[0]['id_tahun']?>" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td>Tahun Ajaran</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="tahun_ajaran" placeholder="Tahun Ajaran" class="form-control" value="<?php echo $editdata[0]['tahun_ajaran'] ?>" readonly="readonly">
                                </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Status Tahun</td>
                        <td>
                        <div class="row">
                            <div class="col-lg-12">
<!--                                 <div class="col-lg-2">
                                    <input type="radio" name="status_tahun" class="type" value="Aktif">
                                    <label>Aktif</label>
                                </div> -->
                            <div class="col-lg-2">
                                <input type="radio" name="status_tahun" class="type" value="Tidak Aktif" checked> 
                                <label>Tidak Aktif</label>
                            </div>
                            </div>
                        </div>


                    </tr>  

                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('Admin/tahun/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" name="submit" class="btn btn-success" onclick="return confirm('Anda Yakin akan menonaktifkan data ini?')" value="Simpan"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>

