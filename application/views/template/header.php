<?php $lev = $this->session->userdata('level'); ?>
 <!--header start-->
      <header class="header black-bg" style="background: #f2f2f2">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="<?php echo base_url(); ?>" class="logo">
            <img src="<?=base_url(). 'assets/img/logo.png' ?>" style="max-height: 30px" alt=""> 
        </a>
        <!--logo end-->
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <?php if(isset($lev)) : ?>                
              <li><a class="logout" href="<?php echo site_url(); ?>c_Login/Logout">Logout</a></li>
            <?php else : ?>
              <li><a class="logout" href="<?php echo site_url(); ?>c_Login/login">Log In</a></li>
            <?php endif ; ?>
          </ul>
        </div>
      </header>
      <!--header end-->