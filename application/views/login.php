<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/css_baru.css">
    <style type="text/css">
        .btn-primary{
            background-color: #30929e;
            border-color: #30929e;
        }
        .pesan{
            display: none;
        }
    </style>
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="<?php echo site_url(); ?>/c_Login/aksi_login" method="post">
		        <h2 class="form-login-heading">Indonesia Biodiversity</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="Username" autofocus name="username">
		            <br>
					<input type="password" class="form-control" placeholder="Password" name="pass">
                    <br>
					<label>Login As..</label>
					<select class="form-control" name="level">
						<option value="bksda">Operator BKSDA</option>
						<option value="lsm">Operator LSM</option>
						<option value="kepala">Pimpinan BKSDA</option>
					</select>
                    <br>
		            <button class="btn btn-primary btn-block" type="submit"></i> Login</button>
                    <a href="<?php echo base_url(); ?>" class="btn btn-danger btn-block">Kembali</a>
                    <hr>  
                    <?php if (isset($pesan)) {?>
                        <div class="pesan text-center" style="padding-top: 2px"><h4 style="color: red"><?php echo $pesan; ?></h4></div>
                    <?php } ?>      
                </div>
             </form>        
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url(); ?>/assets/img/7804.jpg", {speed: 300}); 
    </script>
    <!-- ini dia ganti backgroundnya -->
    <!-- SCRIPT UNTUK MUNCULKAN CLASS PESAN DALAM KONDISI DISPLAY NONE  -->
    <script>
    // angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
       $(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 200);});
    // angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
       // setTimeout(function(){$(".pesan").fadeOut('slow');}, 3000);
    </script>

  </body>
</html>
