<?php $level = $this->session->userdata('level'); 
if (isset($level)) {
  $H5 = "ADMIN";
}
else{
  $H5 = "USER";
}
?>
<!--sidebar start-->
<aside>
  <div id="sidebar"  class="nav-collapse ">
  <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <h5 class="centered"><?php echo $H5; ?></h5>
      <li class="centered" style="color: white">
        <?php echo namahari($nohari)." | ".$tgl." ".namabulan($bln)." ".$thn;  ?>
      </li>
      <li class="mt">
        <a href="<?php echo site_url(); ?>">
          <i class="fa fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <?php if(($level=='bksda')||($level=='lsm')): ?>
      <li class="sub-menu">
        <a href="javascript:;" >
          <i class="fa fa-list"></i>
          <span>Master Data</span>
        </a>
        <ul class="sub">
          <?php if($level=='bksda'): ?>
          <li><a href="<?php echo site_url('TugasAkhir/LihatData/leveluser'); ?>">Data User Level</a></li>
          <li><a href="<?php echo site_url('TugasAkhir/LihatData/institusi'); ?>">Data Institusi</a></li>
          <?php endif; ?>
          <li><a href="<?php echo site_url('TugasAkhir/LihatData/kelangkaan') ?>">Data Kategori Kelangkaan</a></li>
        </ul>
      </li>
      <?php endif; ?>
      <?php if($level!='kepala'): ?>
      <li class="sub-menu">
        <a href="javascript:;" >
          <i class="fa fa-list"></i>
          <span>Database Biodiversity</span>
        </a>
        <ul class="sub">
          <li><a  href="" style="pointer-events: none">Data Kingdom</a></li>
          <li><a  href="" style="pointer-events: none">Data Filum</a></li>
          <li><a  href="<?php echo site_url('TugasAkhir/LihatData/class'); ?>">Data Class</a></li>
          <li><a  href="<?php echo site_url('TugasAkhir/LihatData/ordo'); ?>">Data Ordo</a></li>
          <li><a  href="<?php echo site_url('TugasAkhir/LihatData/famili'); ?>">Data Famili</a></li>
          <li><a  href="<?php echo site_url('TugasAkhir/LihatData/genus'); ?>">Data Genus</a></li>
          <li><a  href="<?php echo site_url('TugasAkhir/LihatData/spesies'); ?>">Data Spesies</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="<?php echo site_url('TugasAkhir/taksonomi') ?>">
          <i class="fa fa-share-alt"></i>
          <span>Pohon Taksonomi</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="<?php echo site_url('TugasAkhir/pencarian') ?>">
          <i class="fa fa-search"></i>
          <span>Pencarian</span>
        </a>
      </li>
      <?php endif; ?>
      <?php if (isset($level)): ?>
      <li class="sub-menu">
        <a href="<?php echo site_url('TugasAkhir/akun') ?>">
          <i class="fa fa-user"></i>
          <span>Akun</span>
        </a>
      </li>
    <?php endif; ?>
       <li class="sub-menu">
        <a href="<?php echo site_url('TugasAkhir/about') ?>">
          <i class="fa fa-exclamation-circle"></i>
          <span>Tentang Aplikasi</span>
        </a>
      </li>
    </ul>
  <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->