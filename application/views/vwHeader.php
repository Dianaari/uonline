<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Dashboard - Sistem Ujian Online SMA Negeri 1 Gombong</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<!--       <link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.min" rel="stylesheet">
 -->  <link href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>assets/plugin/fa/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>assets/plugin/datatables/dataTables.bootstrap.css" rel="stylesheet">
      <!-- <link href="<?php echo base_url(); ?>assets/plugin/datepicker/datepicker3.css" rel="stylesheet"> -->

   </head>
   <body>

   <div class="" style="min-height: 450px">
      <nav class="navbar navbar-findcond navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            <a class="navbar-brand" href="<?php echo base_url('index.php/home/');?>">Sistem Ujian Online SMA Negeri 1 Gombong</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-user"></i>  Selamat datang <b><?php echo $username;?></b> <span class="caret"></span></a>
                      
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url('index.php/Admin/password_a/index');?>" onclick="">Ubah Password</a></li>
                        <li><a href="<?php echo base_url('index.php/home/logout');?>" onclick="return confirm('keluar..?');">Logout</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

   
      <div class="container" style="margin-top: 70px">
         <?php $this->load->view($p);?>
      </div>
 

   <div class="col-md-12 footer">
   </div>

<!-- insert modal -->
<div id="tampilkan_modal"></div>


<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

<?php 
if ($this->uri->segment(2) == "m_soal" && $this->uri->segment(3) == "edit") {
?>
<script src="<?php echo base_url(); ?>assets/plugin/ckeditor/ckeditor.js"></script>
<?php
}
?>
<!-- editor
<script src="<?php echo base_url(); ?>___/plugin/editor/nicEdit.js"></script>
 -->

<script src="<?php echo base_url(); ?>assets/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugin/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/plugin/countdown/jquery.plugin.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugin/countdown/jquery.countdown.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugin/jquery_zoom/jquery.zoom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugin/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.id.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.js"></script>


<script type="text/javascript">
var base_url = "<?php echo base_url(); ?>";
$("#datatabel").dataTable();
 $('#shhd').hide();
</script>

    <script type="text/javascript">
        $('.form_date').datetimepicker({
            language: 'id',
            format: 'yyyy-mm-dd hh:ii',
            pickTime: true
        });
    </script>


<script src="<?php echo base_url(); ?>assets/js/aplikasi.js"></script> 

 <script type="text/javascript">   
     function idkelaschange(selected){
         var id_kelas = $(selected).find('option:selected').text();
         console.log(id_kelas);
         var url = "<?php echo base_url('index.php/Admin/siswa/peserta');?>/"+id_kelas;
         $('#url_kelas').attr('href', url);
     }

     $('input[name=jenis_pertanyaan]:radio').change(function() {
        if (this.value == 'Double') {
            $('#shhd').show();
        }else{
            $('#shhd').hide();
        }
    });
 </script>

<script>
   CKEDITOR.replace('editornya');
   CKEDITOR.replace('editornya_a');
   CKEDITOR.replace('editornya_b');
   CKEDITOR.replace('editornya_c');
   CKEDITOR.replace('editornya_d');
   CKEDITOR.replace('editornya_e');

</script>

</body>
</html>
