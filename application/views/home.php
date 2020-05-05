<html>
<head>
<?php $this->load->view('template/head'); ?>
<style type="text/css">
 
</style>
</head>
<body>
<section id="container" >
<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>

  <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><!-- <i class="fa fa-angle-right"></i> --> Dashboard</h3>
        <div class="row">
          <div class="col-lg-12">
          </div>
          <div class="col-lg-12">
            <!-- mulai -->
            <div class="row menuhome">
<?php if($level != 'kepala'): ?>                         
              <div class="col-lg-3 col-md-3 col-sm-3 mb">
                <a href="<?php echo site_url() ?>TugasAkhir/f_lihatdata" class="btn btn-block btn-success">LIHAT DATA</a>
              </div>            
              <div class="col-lg-3 col-md-3 col-sm-3 mb">
                <a href="<?php echo site_url('TugasAkhir/taksonomi')?>" class="btn btn-block btn-success">POHON TAKSONOMI</a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 mb">
                <a href="<?php echo site_url('TugasAkhir/pencarian') ?>" class="btn btn-block btn-success">CARI DATA</a>
              </div>
<?php endif; ?>              
<?php if($level == 'kepala'): ?>              
              <div class="col-lg-3 col-md-3 col-sm-3 mb">
                <a href="<?php echo site_url('TugasAkhir/laporan') ?>" class="btn btn-block btn-success">CETAK DATA</a>
              </div>
<?php endif; ?>
<?php if($level == 'bksda'): ?>  
              <div class="col-lg-3 col-md-3 col-sm-3 mb">
                <a href="<?php echo site_url('TugasAkhir/verifikasi/bksda') ?>" class="btn btn-block btn-success">VERIFIKASI DATA</a>
              </div>           
<?php elseif($level == 'lsm'): ?>
              <div class="col-lg-3 col-md-3 col-sm-3 mb">
                <a href="<?php echo site_url('TugasAkhir/verifikasi/lsm') ?>" class="btn btn-block btn-success">VERIFIKASI DATA</a>
              </div>                 
<?php endif; ?>            
            </div>
            <!-- selesai -->
            <div class="row">
              <div class="col-lg-12">
                <?php if (isset($menunggu)): ?>
                <div class="alert alert-warning"><p class="text-center text-uppercase"><?php echo $menunggu ?></p></div>
                <?php elseif(isset($import_msg)) :?>
                <div class="alert alert-success"><p class="text-center text-uppercase"><?php echo $import_msg ?></p></div>
                <?php endif; ?>
              </div>
            </div>
<?php if($level != 'kepala'): ?>                                     
            <!-- mulai -->
            <div class="row tabmenu">
              <div class="col-lg-12" style="padding-bottom: 15px">Jumlah Data Dalam Basis Data</div>
              <!-- <div class="col-md-2">
                 <a href="#" class="btn btn-block" disabled>
                   <h3>1 DATA</h3>
                   <p>DATA KINGDOM</p>
                 </a>
              </div> -->
              <div class="col-md-2">
                 <a href="#" class="btn btn-block" disabled>
                   <h3>1 DATA</h3>
                   <p>DATA FILUM</p>
                 </a>
              </div>
              <div class="col-md-2">
                 <a href="<?php echo site_url() ?>TugasAkhir/LihatData/class" class="btn btn-block">
                   <h3><?php echo $class ?> DATA</h3>
                   <p>DATA CLASS</p>
                 </a>
              </div>
              <div class="col-md-2">
                 <a href="<?php echo site_url() ?>TugasAkhir/LihatData/ordo" class="btn btn-block">
                   <h3><?php echo $ordo ?> DATA</h3>
                   <p>DATA ORDO</p>
                 </a>
              </div>
              <div class="col-md-2">
                 <a href="<?php echo site_url() ?>TugasAkhir/LihatData/famili" class="btn btn-block">
                   <h3><?php echo $famili ?> DATA</h3>
                   <p>DATA FAMILI</p>
                 </a>
              </div>
              <div class="col-md-2">
                 <a href="<?php echo site_url() ?>TugasAkhir/LihatData/genus" class="btn btn-block">
                   <h3><?php echo $genus ?> DATA</h3>
                   <p>DATA GENUS</p>
                 </a>
              </div>
              <div class="col-md-2">
                 <a href="<?php echo site_url() ?>TugasAkhir/LihatData/spesies" class="btn btn-block">
                   <h3><?php echo $spesies ?> DATA</h3>
                   <p>DATA SPESIES</p>
                 </a>
              </div>
            </div>
            <!-- selesai -->
<?php endif; ?>                          
            <!-- mulai -->
            <div class="row tabel mt">
              <div class="col-lg-12">
                <h4 class="text-center">Daftar Satwa yang dilindungi pemerintah</h4>
              </div>
              <div class="col-lg-12">
                <div class="table-responsive">
                   <table class="table table-bordered tabeldata" id="">
                    <thead>  
                    <tr>
                      <th width="30px" class="text-center">No</th>
                      <th class="text-center">Gambar</th>
                      <th class="text-center">Spesies</th>
                      <th class="text-center">Kelas</th>
                      <th class="text-center">Detail</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($tbl_spesies as $data ) :
                      if ($data['stat'] == 'DILINDUNGI') { $alert = 'danger'; }
                      else{ $alert = 'success';} 
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no; ?></td>
                      <td class="text-center"><img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$data['gbr_spesies']; ?>" width="50px" height="70px"></td>
                      <td><?php echo $data['nmu_spesies']; ?> (<i><?php echo $data['nm_spesies']; ?></i>)</td>
                      <td><?php echo $data['nm_class']; ?></td>
                      <td class="text-center"><button class="btn btn-success btn-block" data-toggle="modal" data-target="<?php echo '#Modal'.$data['id_spesies']; ?>"><i class="fa fa-search"></i></button></td>
                    </tr>
                    <div class="modal fade" id="<?php echo 'Modal'.$data['id_spesies']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" style="background: #228B22;">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title text-uppercase" id="myModalLabel" style="text-align: center"><?php echo $data['nm_spesies']; ?></h4>
                            <h4 class="modal-title text-uppercase" id="myModalLabel" style="text-align: center"><?php echo $data['nmu_spesies']; ?></h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-lg-4">
                                <img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$data['gbr_spesies']; ?>" width="180px" height="240px">
                                <div class="alert alert-<?php echo $alert ?> mt" ><h5 style="text-align: center;">SATWA <?php echo $data['stat']; ?></h5></div>
                              </div>
                              <div class="col-lg-8">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>KATEGORI IUCN RED LIST</h4>
                                    <div><p ><?php echo $data['nm_kategori']." - ".$data['nmu_kategori']; ?></p></div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-12">
                                  <h4>HABITAT</h4>
                                  <p style="text-align: justify;"><?php echo $data['habitat']; ?></p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-12">
                                  <h4>KARAKTERISTIK</h4>
                                  <p style="text-align: justify;"><?php echo $data['karakteristik']; ?></p>
                                  </div>
                                </div>
                        
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a href="<?php echo site_url()."/TugasAkhir/LihatDataById/spesies/".$data['id_spesies'] ?>" class="btn btn-success">DETAIL</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
                          </div>
                          </div>
                        </div>
                      </div>                    
                    <?php 
                      $no++;
                      endforeach;
                    ?>          
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- selesai -->
          </div>

      </section>
    </section><!-- /MAIN CONTENT -->
  <!--main content end-->
<?php $this->load->view('template/footer.php'); ?>
</section>
</body>
<?php $this->load->view('template/scriptbody'); ?>
</html>
