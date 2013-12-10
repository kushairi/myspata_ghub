


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
                        Permintaan Penyediaan
                      </a> 
                    </li>
                    <li>
                      <a href="#">
                        PSPA(O) Awal
                      </a>   
                    </li>
                    
                  </ul>
    </div>
    <!--END breadcrumb-->
    <br />  

<?php if($ulasan != NULL){ ?>
            <!--status info-->
            <div class="alert alert-block alert-warning fade in">
                    <button data-dismiss="alert" class="close" type="button">
                      ×
                    </button>
                      <h5 style="color:#FF0000">Ulasan : 
                      <a class="alert-heading"><?php echo $ulasan; ?></a>
                      </h5>
            </div>
            <!--/.END status info-->
<?php } ?>


          <div class="row-fluid">
            <div class="span12">
              <div class="widget">
                 <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe022;"></span> Ukuran & Sasaran
                  </div>
                </div>
                <div class="widget-body">
              
                  
                  
                        
                <?php //echo validation_errors(); ?>
                  
                      <?php 
                       $attributes = array(
                           'class' => 'form-horizontal no-margin', 
                           'name'  => 'ukuran_sasar_ppd',
                           'id'    => 'ukuran_sasar_ppd',
                        );
                    echo form_open('pspao_awal/ukuran_sasar_ppd/'.$this->uri->segment(3),$attributes); ?>
                     
                     <div id="dt_example" class="example_alt_pagination">   
                    
                
                     <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width:30%">Ukuran</th>
                        <th style="width:30%">Sasaran(%)</th>
                        <th style="width:80%">Kenyataan</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <?php  foreach ($ukuran_value as $row3) :
                       echo '<input type="hidden" name="pspa_obj_id['.$row3->utiliti_ukuran_id.']" value="'.$row3->pspa_obj_id.'">';                   
                     
                      ?>
                      <?php endforeach; ?>
                 

                      <?php                          

                      $i=1; if(!empty($ukuran_data)) : foreach ($ukuran_data as $row1) : 

                     // echo $row->ukuran_kat_id;
                      ?>
                      <?php if($row1->node_type==0 && $row1->sort==0 ) { ?>
                      <tr>
                        <td colspan="3"><?php echo $i.'. '.$row1->ukuran_tajuk;?></td>
                       
                       
                      </tr>
                      <?php $i++; }  

                      if(!empty($ukuran_value)) : foreach ($ukuran_value as $row) :  

                     
                      ?>

                    <?php if($row1->utiliti_ukuran_id== $row->sort){ ?>
                        <tr>
                        <td>
                       
                        <?php echo $row->ukuran_tajuk; ?>

                    
                         </td>
                        
                        <td>
                        <?php
                          
                          $data = array(
                            'name'        => 'sasaran['.$row->utiliti_ukuran_id.']',
                            'id'          => 'sasaran['.$row->utiliti_ukuran_id.']',
                            'value'       => $row->kandungan_sasaran,
                            'maxlength'   => '100',
                            'size'        => '50',
                            'class'       => 'span8',
                            'placeholder' =>  '',
                          );

                          echo form_input($data);
                          
                          ?>
                        
                        </td>
                        <td>
                         <?php
                          
                          $data = array(
                            'name'        => 'kenyataan['.$row->utiliti_ukuran_id.']',
                            'id'          => 'kenyataan['.$row->utiliti_ukuran_id.']',
                            'value'       => $row->kandungan_kenyataan,
                            'rows'        => '5',
                            'cols'        => '10',
                            'style'       => 'height: 80px',
                            'class'       => 'input-block-level',
                            'placeholder' =>  '',
                          );

                          echo form_textarea($data);
                          
                          ?>
                        </td>
                        
                      </tr>
                         <?php } ?>
                     <?php endforeach; ?>
                  <?php endif; ?>
                      <?php endforeach; ?>
                  <?php endif; ?>

                    
                    </tbody>
                  </table>
                  

  </div>
 
                  
          
         <div class="next-prev-btn-container pull-right">
             
        <a href="<?php echo site_url('pspao_awal/senarai_pspao_baru') ?>">    
        <?php
        $batal = array(
            'name'    => '',
            'id'      => '',
            'class'   => 'btn btn-danger input-top-margin',
            'value'   => '',

            'type'    => 'button',
            'content' => 'Batal'
        );

        echo form_button($batal);
        
        ?>
         </a> 
 <a href="<?php echo site_url('pspao_awal/ulasan_ppd_pspao/'.$this->uri->segment(3)) ?>">
          <?php
        $sebelum = array(
            'name'    => 'sebelum',
            'id'      => 'sebelum',
            'class'   => 'btn btn-primary',
            'value'   => 'sebelum',
            'type'    => 'button',
           
            'content' => 'Sebelum'
        );

        echo form_button($sebelum);
        
        ?>
         </a> 
       
      
        <?php
        if($statusid !=2 && $statusid!= 4 && $statusid !=6){
        ?>

         <a type="button" class="btn btn-warning2" href="#simpan" data-toggle="modal">Simpan Deraf</a>

        
        <a type="button" class="btn btn-success" href="#hantar" data-toggle="modal">Hantar</a> 
        <?php
        
          }
        ?>
        
       
       

</div>
   <div class="clearfix"></div> 


<!-- modal pengesahan simpan deraf-->         
    
 <div id="simpan" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
 <h4 id="myModalLabel">Mesej Pengesahan</h4></div>
 <div class="modal-body"><p>Adakah anda ingin menyimpan deraf PSPA(O) awal ini?</p></div>
 <!--button-->
  <div class="modal-footer">
  <?php
                       $batal = array(
                           'name'    => '',
                           'id'      => '',
                           'class'   => 'btn btn-danger input-top-margin',
                           'value'   => '',
                           'type'    => 'button',
                           'content' => 'Tidak',
                           'data-dismiss'=>'modal'
                       );

                       echo form_button($batal);

                       ?>
                       <?php
                       $hantar= array(
                           'name'    => 'simpan',
                           'id'      => 'simpan',
                           'class'   => 'btn btn-info',
                           'value'   => 'simpan',
                           'type'    => 'Submit',
                           'content' => 'Ya'
                       );

                       echo form_button($hantar);

                       ?>                       
                           </div>
                    <!--/.END button--></div>
  <!-- modal -->


<!-- modal pengesahan hantar-->         
    
 <div id="hantar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
 <h4 id="myModalLabel">Mesej Pengesahan</h4></div>
 <div class="modal-body"><p>Adakah anda ingin menghantar PSPA(O) awal ini?</p></div>
 <!--button-->
  <div class="modal-footer">
  <?php
                       $batal = array(
                           'name'    => '',
                           'id'      => '',
                           'class'   => 'btn btn-danger input-top-margin',
                           'value'   => '',
                           'type'    => 'button',
                           'content' => 'Tidak',
                           'data-dismiss'=>'modal'
                       );

                       echo form_button($batal);

                       ?>
                       <?php
                       $hantar= array(
                           'name'    => 'hantar',
                           'id'      => 'hantar',
                           'class'   => 'btn btn-info',
                           'value'   => 'hantar',
                           'type'    => 'Submit',
                           'content' => 'Ya'
                       );

                       echo form_button($hantar);

                       ?>                       
                           </div>
                    <!--/.END button--></div>
<!-- modal -->



                
           <?php  echo form_close();?>
              </div>
            </div>

          </div>
          
         

        </div>
