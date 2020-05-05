<html>
<head>
<?php $this->load->view('template/head'); ?>
<style type="text/css">
.menu_utama {
/*    background-color:#d3d3d3;*/
    padding: 2px;
    cursor: pointer;
    font-weight: bold;
}
.content {
    display: none;
    padding : 5px;
}
.btn-success, .btn-default{
  background:transparent;
  color: black;
  width: 80%;
}
ul{
  padding: 2px;
}
li{
  padding: 0px;
}
</style>
</head>
<body>
<section id="container" >
<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>

  <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>Pohon Taksonomi</h3>
        <p>Lihat data spesies berdasarkan tingkatan taksonomi</p>
        <p>Pilih menu dibawah ini untuk melihat data. Data akan tampil menggunakan style collapse</p>
        <div class="row">
          <div class="col-lg-12 col-md-12">

<ul>
<li>
<div class="menu_utama"><button class="btn btn-success" style="text-align: left">DATA KINGDOM : Animalia</button></div>
<div class="content">
<ul>
<li>
<div class="menu_utama"><button class="btn btn-success" style="text-align: left">DATA FILUM : Chordata</button></div>
<div class="content">
<ul>
    <?php foreach ($class as $dclass) : ?>
    <li>
      <div class="menu_utama"><button class="btn btn-success" style="text-align: left">DATA CLASS : <?php echo $dclass['nama_latin']; ?></button></div>
      <div class="content">
        <ul>
          <?php foreach ($ordo as $dordo ): ?>
            <?php if($dordo['id_class']==$dclass['id_class']) :?>
            <li>
              <div class="menu_utama"><button  class="btn btn-success" style="text-align: left">DATA ORDO : <?php echo $dordo['nama_latin']; ?></button></div>
              <div class="content">
              <ul>
                <?php foreach ($famili as $dfamili ): ?>
                  <?php if($dfamili['id_ordo']==$dordo['id_ordo']) :?>
                  <li>
                    <div class="menu_utama"><button class="btn btn-success" style="text-align: left">DATA FAMILI : <?php echo $dfamili['nama_latin']; ?></button></div>
                    <div class="content">
                    <ul>
                      <?php foreach ($genus as $dgenus ): ?>
                        <?php if($dgenus['id_famili']==$dfamili['id_famili']) :?>
                        <li>
                          <div class="menu_utama"><button class="btn btn-success" style="text-align: left">DATA GENUS : <?php echo $dgenus['nama_latin']; ?></button></div>
                          <div class="content">
                          <ul>
                            <?php $no=1; foreach ($spesies as $dspesies ): ?>
                            <?php if($dspesies['id_genus']==$dgenus['id_genus']) :?>
                              <li>
                                <h4><a href="<?php echo site_url() ?>/TugasAkhir/LihatDataById/spesies/<?php echo $dspesies['id_spesies'] ?>" class="btn" style="text-align: left">
                                  <?php echo $no.". "; ?>DATA SPESIES : <?php echo $dspesies['nama_latin']; ?>
                                  </a></h4>
                              </li>
                            <?php $no++; endif;?>    
                            <?php  endforeach; ?>
                          </ul> 
                          </div>
                        </li>
                        <?php endif;?>
                      <?php endforeach; ?>
                    </ul>
                    </div>
                  </li>
                  <?php endif;?> 
                <?php endforeach; ?>
              </ul>
              </div>
            </li>
          <?php endif;?>
          <?php endforeach; ?>
        </ul>    
      </div>
    </li>
  <?php endforeach; ?>  
</ul>
</div>
</li>
</ul>
</div>
</li>
</ul>
  </div>
</div>            
      </section>
    </section><!-- /MAIN CONTENT -->
  <!--main content end-->
<?php $this->load->view('template/footer.php'); ?>
</section>
<?php $this->load->view('template/scriptbody'); ?>
<script type="text/javascript">
  $(".menu_utama").click(function () {
    $menu_utama = $(this);
    $content = $menu_utama.next();
    $content.slideToggle(500, function () {
    });
});
</script>
</body>
</html>
