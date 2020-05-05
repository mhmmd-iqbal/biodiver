<!-- <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script> -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<!--common script for all pages-->
<script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>

<!-- DATA TABLES PLUGIN -->
<script type="text/javascript" src="<?php echo base_url()?>assets/DataTable/js/datatables.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/DataTable/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/DataTable/js/dataTables.responsive.min.js"></script>
<!-- <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script> -->
<!-- <script>
     $(document).ready(function(){
         $('#tabel-data').DataTable();
     });
      $('table').DataTable( {
        responsive: true
    } );
</script> -->
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('.tabel-data').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );
</script>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('.tabeldata').DataTable();
    } );
</script>


<!-- BOOTSTRAP DATEPICKER PLUGIN -->
<script type="text/javascript" src="<?php echo base_url() ?>/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
	$(function(){
  		$(".datepicker").datepicker({
      		format: 'yyyy-mm-dd',
      		autoclose: true,
      		todayHighlight: true,
  		});
 	});
</script>
<!-- SELECT2 PLUGIN -->
<script type="text/javascript" src="<?php echo base_url() ?>/assets/select2/dist/js/select2.js"></script>
<script>
	$(document).ready(function () {
    	$(".select2").select2({
        	// placeholder: "Please Select"
		});
	});
</script>
<!-- SESUAIKAN UKURAN SELECT2 PLUGIN DI BOOTSTRAP -->
<script type="text/javascript">
	$(document).ready(function() {
		$(".select2").select2();
		$(window).resize(function() {
			$('.select2').css('width', "100%");
		});
    })
</script>

<!-- SCRIPT UNTUK MUNCULKAN CLASS PESAN DALAM KONDISI DISPLAY NONE  -->
<script>
// angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
   $(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 200);});
// angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
   setTimeout(function(){$(".pesan").fadeOut('slow');}, 3000);
</script>
