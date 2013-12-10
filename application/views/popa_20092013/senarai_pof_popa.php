
<!-- breadcrumb START -->
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
            POPA
        </a>   
    </li>
</ul>

<br>
<!-- breadcrumb END -->




<!-- div widget-body START -->
<div class="widget-body"> 
    <ul class="nav nav-tabs no-margin myTabBeauty"> 
        <li class=""> 
            <a data-toggle="tab" href="#home" data-original-title=""> PSPA(O)</a> 
        </li> 
                
        <li class=""> 
            <a data-toggle="tab" href="<?php echo site_url('ptra/senarai_ptf_ptra')?>" data-original-title="" data-original-title=""> PTRA </a> 
        </li> 
                
        <li class="active"> 
            <a data-toggle="tab" href="#profile" data-original-title=""> POPA </a> 
        </li>
                
        <li class=""> 
            <a data-toggle="tab" href="#profile" data-original-title=""> PNPA </a> 
        </li>
                
        <li class=""> 
            <a data-toggle="tab" href="#profile" data-original-title=""> PPUN </a> 
        </li> 
                
        <li class=""> 
            <a data-toggle="tab" href="#profile" data-original-title=""> PLA </a> 
        </li>   
    </ul> 
    
    
    
    
<!-- div tab START -->
<div class="tab-content" id="myTabContent"> 
    <div id="home" class="tab-pane fade active in">  
      <p>
            <?php 
                    $attributes = array(
                        'class' => 'form-horizontal no-margin', 
                         'name' => 'senarai_pof_popa',
                           'id' => 'senarai_pof_popa',
                        );
                    echo form_open('popa/senarai_pof_popa',$attributes); 
            ?>
        
        
        
        
<!-- div panel POPA START -->   
<div class="row-fluid">
    <div class="span12">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe022;">
                    </span> Pelan Operasi dan Penyenggaraan Aset (POPA)
                </div> <!-- tutup title -->
            </div> <!-- tutup widget-header -->
                
            <form class="form-horizontal no-margin">
                <div class="widget-body">
                    
                    
                    <div class="control-group">
                        <label class="control-label">
                            Tahun
                        </label>
                        <div class="controls">
                        <?php echo form_error('tahun'); ?> 
                            <?php echo form_dropdown('tempoh_mula', $year_list, 'id="tempoh_mula"')?>
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                      <label class="control-label">Kementerian
                      </label>
                      <div class="controls">
                        <?php
                          
                          $data = array(
                            'name'        => 'kementerian',
                            'id'          => 'kementerian',
                            'value'       => '',
                            'maxlength'   => '100',
                            'size'        => '50',
                            'class'       => '50',
                            'placeholder' =>  'Kementerian Kerja Raya',
                          );

                          echo form_input($data);
                          
                          ?>
                        </div>
                    </div>  
                    
                    
                    <div class="control-group">
                      <label class="control-label">
                        Jabatan/Agensi
                      </label>
                      <div class="controls">
                        <?php echo form_error('jabatan'); ?>
                            <?php echo form_dropdown('jabatan', $jabatan, 'id="jabatan"');?>
                      </div> 
                    </div> 
                    
                    
                    <div class="control-group">
                      <label class="control-label">
                        Premis
                      </label>
                      <div class="controls">
                        <?php echo form_error('premis'); ?>
                          <?php
                          
                          $data = array(
                            'name'        => 'premis',
                            'id'          => 'premis',
                            'value'       => '',
                            'maxlength'   => '100',
                            'size'        => '50',
                            'class'       => '50',
                            'placeholder' =>  '',
                          );

                          echo form_input($data);
                          
                          ?>
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                      <label class="control-label">
                        No DPA
                      </label>
                      <div class="controls">
                            <?php echo form_error('no_dpa'); ?>
                         <?php
                          
                          $data = array(
                            'name'        => 'no_dpa',
                            'id'          => 'noDPA',
                            'value'       => '',
                            'maxlength'   => '100',
                            'size'        => '50',
                            'class'       => '50',
                            'placeholder' =>  '',
                          );

                          echo form_input($data);
                          
                          ?>
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                      <label class="control-label">
                        Status
                      </label>
                      <div class="controls">
                        <?php echo form_error('status'); ?> 
                          <?php echo form_dropdown('status', $status, 'id="status_id"');?>
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                      <label class="control-label" for="email1">
                        Kata Carian
                      </label>
                      <div class="controls">
                        <?php echo form_error('katacarian'); ?> 
                         <?php
                          
                          $data = array(
                            'name'        => 'katacarian',
                            'id'          => 'katacarian',
                            'value'       => '',
                            'maxlength'   => '100',
                            'size'        => '50',
                            'class'       => '50',
                            'placeholder' =>  '',
                          );

                          echo form_input($data);
                          
                          ?>
                      </div>                      
                    </div>
                       
                    
                    
                    <div class="control-group ">
                        <?php
                            $seterusnya = array(
                                'name'    => '',
                                'id'      => '',
                                'class'   => 'rounded pull-right ',
                                'value'   => '',
                                'content' => ' Carian',
                                'type'    => 'submit',
                                'data-icon' => '&#xe07f;'
                            );
                            echo form_button($seterusnya);
                        ?>
                    </div>
                
                
                </div>
                
              <?php  echo form_close();?>

            </div>
       </div>
    </div>
<!-- div panel POPA END -->




<!-- div panel senarai START -->
<div class="row-fluid">
    <div class="span12">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;">
                    </span> Senarai POPA
                  </div> 
            </div> 
                
            
            <!-- table section START -->              
            <div class="widget-body">
              <div id="dt_example" class="example_alt_pagination">
                <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">    
                  <thead>
                    <tr>
                      <th style="width:17%">
                        Bil
                      </th>
                      <th style="width:20%">
                        POPA ID
                      </th>
                      <th style="width:16%">
                        Tahun
                      </th>
                      <th style="width:16%" class="hidden-phone">
                        Kementerian 
                      </th>
                      <th style="width:16%" class="hidden-phone">
                        Jabatan/Agensi
                      </th>
                      <th style="width:16%" class="hidden-phone">
                        Premis
                      </th>
                      <th style="width:16%" class="hidden-phone">
                        No DPA
                      </th>
                      <th style="width:16%" class="hidden-phone">
                        Status
                      </th>
                      <th style="width:16%" class="hidden-phone">
                        Tindakan
                      </th>
                    </tr>
                  </thead> 


                  <tbody>
                    <?php $i=1; if(!empty($senaraipopa)) : foreach ($senaraipopa as $rec) : ?>
                    <?php echo form_open('admin/update'); ?>
                        
                    <tr>
                      <td align="left">
                        <?php echo $i++; ?>
                      </td>
                      <td>
                        <?php echo $rec->popa_id;?>
                      </td>
                      <td>
                        <?php echo $rec->tahun;?>
                      </td>
                      <td>
                        <?php if($getkementerian = $this->popa_model->get_kem_list($rec->idkem))
                        foreach ($getkementerian as $rr) 
                        echo $rr->namakem;?>
                      </td>
                      <td>
                        <?php if($getjabatan = $this->popa_model->get_jab_list($rec->idjab_agensi))
                        foreach ($getjabatan as $rr) 
                        echo $rr->nama_jab_agensi;?>
                      </td>
                      <td>
                        <?php if($getpremis = $this->popa_model->get_prem_list($rec->idpremis_kategori))
                        foreach ($getpremis as $rr) 
                        echo $rr->jenis_premis;?>
                      </td>
                      <td>
                        <?php echo $rec->nodpa;?>
                      </td>
                      <td>
                        <?php if($getstatus = $this->popa_model->get_stat_list($rec->pspa_id))
                        foreach ($getstatus as $rr) 
                        echo $rr->status_id ;?>
                      </td>
                      <td align="center">
                        <span class="btn-group">
                          <a class="" data-original-title="update" href="#">
                            <i class="icon-pencil">
                            </i>
                          </a>
                          <a class="delete-row" data-original-title="Delete" href="<?php base_url() ;?>delete/<?php echo $rec->pspa_id; ?>">
                            <i class="icon-trash">
                            </i>
                          </a>
                        </span>
                      </td>
                    </tr>
                  

                    <?php echo form_close(); ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                  </tbody>
                </table>


                <div class="clearfix">
                </div>
                
              </div>
            </div> 
            <!-- table section END --> 

    </div> 
  </div>
</div>
<!-- div panel senarai END -->



  </div>
</div>  
<!-- div tab END -->






<!-- script untuk validate START -->
<script type="text/javascript">
      //Alertify JS
      $ = function (id) {
        return document.getElementById(id);
      },
      reset = function () {
        $("toggleCSS").href = "<?php echo base_url() . 'asset/'; ?>css/alertify.core.css";
        alertify.set({
          labels: {
            ok: "Ya",
            cancel: "Tidak"
          },
          delay: 5000,
          buttonReverse: false,
          buttonFocus: "ok"
        });
      };
      
     
      $("salinpp").onclick = function () {
        reset();
        alertify.confirm("Adakah anda ingin menyalin rekod ini?", function (e) {
          if (e) {
            alertify.success("Anda Klik YA");
          } else {
            alertify.error("Anda Klik Tidak");
          }
        });
        return false;
      };
      
      
      $("salinptf").onclick = function () {
        reset();
        alertify.confirm("Adakah anda ingin menyalin rekod ini?", function (e) {
          if (e) {
            alertify.success("Anda Klik YA");
          } else {
            alertify.error("Anda Klik Tidak");
          }
        });
        return false;
      };
      
      $("salinppd").onclick = function () {
        reset();
        alertify.confirm("Adakah anda ingin menyalin rekod ini?", function (e) {
          if (e) {
            alertify.success("Anda Klik YA");
          } else {
            alertify.error("Anda Klik Tidak");
          }
        });
        return false;
      };
      
     
</script>
<!-- script untuk validate END -->

      





   