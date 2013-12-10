<style>
.wysiwyg-container{
	padding-bottom:16px;
	padding-top:4px;
}    
.modal{
	width: 760px !important;
	margin-left: -380px !important;
}
</style>

<?php
			$ros = $this->pspao_akhir_model->get_pspao_awal_dpa_from_segment($this->uri->segment(3));
			$k1a = $ros->akt_terima_daftar_polisi;
			$k1b = $ros->akt_terima_daftar_output;
			$k2a = $ros->akt_operasi_senggara_polisi;
			$k2b = $ros->akt_operasi_senggara_output;
			$k3a = $ros->akt_penilaian_prestasi_polisi;
			$k3b = $ros->akt_penilaian_prestasi_output;
			$k4a = $ros->akt_pulih_ubah_naiktaraf_polisi;
			$k4b = $ros->akt_pulih_ubah_naiktaraf_output;
			$k5a = $ros->akt_lupus_polisi;
			$k5b = $ros->akt_lupus_output;
			$k6a = $ros->akt_hapuskira_polisi;
			$k6b = $ros->akt_hapuskira_output;

?>

	<!--breadcrumb -EYO- -->
    <div class="widget-body" style="padding-bottom:20px">
	  <ul class="breadcrumb-beauty">
		<li><a href="<?php echo site_url('main')?>">Fungsi</a></li>
        <li><a href="#">Perangcangan</a></li>
        <li><a href="#">Pelan</a></li>
        <li><a href="#">PSPA(O) Akhir</a></li>
        <li><a href="#">Rumusan PSPA(O) Akhir</a></li>
      </ul>
    </div>
    <!--END breadcrumb-->

<?php
$attributes = array('class' => 'form-horizontal no-margin','name'  => 'ukuran_sasar_pspao','id'    => 'ukuran_sasar_pspao');
echo form_open('pspao/pspao_akhir_pp_f3/'.$this->uri->segment(3).'/'.$this->uri->segment(4),$attributes);
?>

                
          <div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    6.0 Penetapan Polisi Pengurusan Aset (Operasi) Serta Output 
                  </div>
                </div>
                <div class="widget-body">
                    
                    
                    
                    <div class="wysiwyg-container">Penetapan Polisi Pengurusan Aset (Operasi)<textarea id="kand_detail" name ="kand_detail" class="input-block-level" style="height: 80px" disabled="disabled"><?php echo $kandungan ?></textarea></div>
  
  
  
  					<?php include('skop_fungsi_aset_pp_ptf.php') ?> 
                    
                    
                    <div class="clearfix"></div>
                    
                    <div class="next-prev-btn-container pull-right" style="position:static">
                    <?php $sessionarray = $this->session->all_userdata(); ?>
					<a href="<?php echo site_url('pspao/senarai_pspao_akhir_pp_2/'.$this->uri->segment(3)) ?>"><button class="btn btn-primary input-top-margin" type="button"> Kembali </button></a>
                    </div>
                    <div class="clearfix"></div>
                
                </div>
              </div>
            </div>
          </div>



<?php echo form_close(); ?>
