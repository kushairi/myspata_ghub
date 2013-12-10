<!--breadcrumb-->
    <div class="widget-body">
                  <ul class="breadcrumb-beauty">
                    <li>
                      <a href="<?php echo site_url('main')?>">
                        Fungsi
                      </a> 
                    </li>
                    <li>
                      <a href="#">
                        Perancangan
                      </a>  
                    </li>
                    <li>
                      <a href="#">
                        Pelan
                      </a> 
                    </li>
                    <li>
                      <a href="#">
                        PSPA(O)
                      </a>   
                    </li>
                    <li>
                      <a href="#">
                        PTRA
                      </a>   
                    </li>
                  </ul>
    </div>
    <!--END breadcrumb-->
    <br />
    <!--tab navigation--> 
    <div class="widget-body">
                  <ul class="nav nav-tabs no-margin myTabBeauty">
                    <li class=""><a href="#profile" data-original-title="">PSPA(O)</a></li>
                    <li class=""><a href="#profile" data-original-title="">PTRA</a></li>
                    <li class=""><a href="<?php echo site_url('popa/senarai_ppd_popa')?>">POPA</a></li>
                    <li class=""><a href="<?php echo site_url('pnpa/senarai_ppd_pnpa')?>">PNPA</a></li>
                    <li class=""><a href="<?php echo site_url('ppun/senarai_ppun')?>">PPUN</a></li>
                    <li class="active"><a href="<?php echo site_url('pla/senarai_ppd_pla')?>">PLA</a></li>
                  </ul>
                  
  <!--tab section-->
  <div class="tab-content" id="myTabContent">
    <div id="home" class="tab-pane fade active in">
      <!--main container-->
      <div class="main-container">
        <!--panel 1-->  
          <div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe022;"></span> Model Struktur Organisasi Pelupusan Aset Di Premis 
                  </div>
                </div>
               <div class="widget-body">
                  <ul class="nav nav-tabs no-margin myTabBeauty">
                    <li class="active"><a href="">Dalaman</a></li>
                    <li class=""><a href="<?php echo site_url('pla/model_struktur_pla_editpp2')?>">Luaran</a></li>
                  </ul>
                  
  <!--tab section-->
  <div class="tab-content" id="myTabContent">
    <div id="home" class="tab-pane fade active in">
      
      <!--table section-->            	
                <div class="widget-body">
                  <!--table-->
                  <div id="dt_example" class="example_alt_pagination">
                    <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">    
                      <thead>
                        <tr>
                          <th style="width:4%">Bil</th>
                          <th style="width:15%">Nama</th>
                          <th style="width:7%">No.KP</th>
                          <th style="width:10%" class="hidden-phone">Jawatan</th>
                          <th style="width:7%" class="hidden-phone">Gred Jawatan</th>
                          <th style="width:7%" class="hidden-phone">Gaji (RM)</th>
                          <th style="width:10%" class="hidden-phone">Lebih Masa (RM)</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php $i=1; if(!empty($sumber_dalaman)) : foreach ($sumber_dalaman as $rec) : ?>
                            <?php //echo form_open('admin/update'); ?>
                        
                            <tr>
                                <td align="left"><?php echo $i++; ?></td>
                                <td><?php echo $rec->nama; ?></td>
                                <td><?php echo $rec->nric; ?></td>
                                <td><?php echo $rec->jawatan; ?></td>
                                <td><?php echo $rec->gred_jawatan; ?></td>
                                <td><?php echo $rec->gaji; ?></td>
                                <td><?php echo $rec->kos_kerja_lebih_masa; ?></td>
                            </tr>
                            <?php echo form_close(); ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <!--END table-->
                    <div class="clearfix">
                    </div>
                    
                  </div>
                </div>
                <!--/.END table section--> 
        </div>                                               
        </form>
      </div>
        
    </div>                  
  </div>
  <!--/.END tab section-->
    </div>  
    <!--/.END tab navigation--> 
              </div>
            </div>
          </div>
                    
          <!--/.END panel 1--> 


                <!--buttons--> 
                <div class="widget-body" align="right">
                <a href="<?php echo site_url('pla/summary_pp_pla_editpp')?>"><button class="btn btn-primary input-top-margin" type="button">
                    Kembali
                  </button></a>
                </div> 
                <!--/.END buttons-->       
      </div>  
      <!--/.END main-container-->               
    </div>                  
  </div>
  <!--/.END tab section-->
    </div>  
    <!--/.END tab navigation-->