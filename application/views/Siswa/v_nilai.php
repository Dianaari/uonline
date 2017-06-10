<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Nilai Hasil Ujian</h1>
        </div> 
        <div class="panel-body"> 
            <form action="" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td>Jawaban benar</td>
                        <td><div class="col-sm-6"> 

                                </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Jawaban Salah</td>
                        <td><div class="col-sm-6"> 

                                </div></td> 
                    </tr> 
                    <tr> 
                        <td>Nilai</td> 
                        <td><div class="col-sm-6"> 

                                </div></td> 
                    </tr>
					<tr> 
                        <td>Hasil</td> 
                        <td><div class="col-sm-6"> 

                                </div></td> 
                    </tr>

                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('home/indexSiswa')?>" class="btn btn-default"><i class="fa fa-minus-circle"></i> Tutup</a>
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>