<!DOCTYPE>
<html>
<head>
	<?php $this->load->view('template/head'); ?>
</head>
<body>
<section id="container" >
	<?php $this->load->view('template/header'); ?>
	<?php $this->load->view('template/sidebar'); ?>
	<!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><!-- <i class="fa fa-angle-right"></i> --> Tentang Aplikasi</h3>
        <p> <img src="<?=base_url()?>assets/img/logo.png" style="max-height: 20px"> merupakan sebuah aplikasi yang menyediakan metadata dari spesies/satwa di Indonesia secara lengkap. Aplikasi ini dibuat dan dikembangkan oleh tim <img src="<?=base_url()?>assets/img/logo.png" style="max-height: 20px"></p>
        <p>Untuk kritik, saran dan masukkan, hubungi tim <img src="<?=base_url()?>assets/img/logo.png" style="max-height: 20px"> melalui email : biodiver-official@gmail.com </p>
        <!-- <hr>
        <h2 style="font-style: italic;" class="text-center">Reference Web Links</h2>
        <div class="col-md-12">
        	<div class="row">
        		<div class="col-md-4">
        			<a href="https://animaldiversity.org/" target="_blank">
                        <img width="320px" src="<?php echo base_url() ?>/assets/img/adw.jpg">
                    </a>
        		</div>
        		<div class="col-md-4">
        			<a href="https://www.iucnredlist.org/" target="_blank">
                        <img width="240px" src="<?php echo base_url() ?>/assets/img/iucn.png">
                    </a>
        		</div>
        		<div class="col-md-4">
        			<a href="http://inabif.lipi.go.id/" target="_blank"><img width="320px" src="<?php echo base_url() ?>/assets/img/inabif.png"></a>
        		</div>
        	</div>
        </div> -->
        </section>
    </section>
    <?php $this->load->view('template/footer.php'); ?>
</section>
<?php $this->load->view('template/scriptbody'); ?>
</body>
</html>