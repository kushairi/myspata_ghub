	<!--breadcrumb -EYO- -->
    <div class="widget-body" style="padding-bottom:10px">
	  <ul class="breadcrumb-beauty">
		<li><a href="<?php echo site_url('main')?>">Fungsi</a></li>
        <li><a href="#">Perangcangan</a></li>
        <li><a href="#">Pelan</a></li>
        <li><a href="#">PSPA(O) Akhir</a></li>
        <li><a href="#">Arahan Sedia PSPAO Akhir</a></li>
      </ul>
    </div>
    <!--END breadcrumb-->

          <div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe022;"></span> Arahan Penyediaan PSPA(O) Akhir 
                  </div>
                </div>
                
              
                
              <div class="widget-body">
                  <form class="form-horizontal no-margin" action="<?php echo site_url('pspao/senarai_pspao_akhir') ?>">
              
                   <div class="widget">
                     <div class="widget-header">
                      <div class="title"><span class="fs1" aria-hidden="true" data-icon="&#xe022;"></span>Penerimaan Arahan Penyediaan PSPA(O) Akhir</div>
                     </div>
                     
                     <div class="row-fluid">
                       <div class="span12">
                        <div class="widget-body">
                        
                    
                       <label class="radio">
                           <input id="optionsRadios2" type="radio" checked="" value="option2" name="optionsRadios">Mohd Kamal Bin Ibrahim
                       </label>
                        <label class="radio">
 									<input id="optionsRadios2" type="radio" checked="" value="option2" name="optionsRadios">Mohd Qahar Bin Sharudin
					    </label>
                        <label class="radio">
 									<input id="optionsRadios2" type="radio" checked="" value="option2" name="optionsRadios">Mohd Tobib Bin Mastiki
					    </label>
                        <label class="radio">
 									<input id="optionsRadios2" type="radio" checked="" value="option2" name="optionsRadios">Nadia Azlina
					    </label>
                        <label class="radio">
 									<input id="optionsRadios2" type="radio" checked="" value="option2" name="optionsRadios">Abdul Razak Bin Supar
					    </label>
                          
                     </div>
                     </div>
                   </div>

                  
                </div>
                
                
                <div class="next-prev-btn-container pull-right">
                <button class="btn btn-danger input-top-margin" type="button"> Batal </button>
                <input name="Hantar" type="submit" value="Hantar" class="btn btn-success" id="confirm" />

                </div>
<div class="clearfix"></div>

                
          	  </form>
              </div>
            </div>

          </div>
          
         

        </div>
        
<script type="text/javascript" src="<?php echo base_url() . 'asset/'; ?>js/alertify.min.js"></script>
<script type="text/javascript">
      //Alertify JS
      $ = function (id) {
        return document.getElementById(id);
      },
      reset = function () {
        $("toggleCSS").href = "<?php echo base_url() . 'asset/'; ?>css/alertify.core.css";
        alertify.set({
          labels: {
            ok: "OK",
            cancel: "Cancel"
          },
          delay: 5000,
          buttonReverse: false,
          buttonFocus: "ok"
        });
      };
      // Standard Dialogs
	  
      $("confirm").onclick = function () {
        reset();
        alertify.confirm("Adakah ingin menghantar arahan penyediaan ini?", function (e) {
          if (e) {
            alertify.success("Arahan dihantar");
			window.location.replace("<?php echo site_url('pspao/senarai_pspao_akhir') ?>");
          } else {
            alertify.error("Arahan dibatalkan");
          }
        });
        return false;
      };

</script>