
<!-- breadcrumb START -->
<ul class="breadcrumb-beauty">
    <li>
        <a href="#">
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
            PLA
        </a>   
    </li>
</ul>

<br>
<!-- breadcrumb END -->

    <!--tab navigation--> 
    <div class="widget-body">
                  <ul class="nav nav-tabs no-margin myTabBeauty">
                    <li class=""><a href="#profile" data-original-title="">PSPA(O)</a></li>
                    <li class=""><a href="<?php echo site_url('ptra/senarai_ppd_ptra')?>" data-original-title="">PTRA</a></li>
                    <li class=""><a href="<?php echo site_url('popa/senarai_ppd_popa')?>">POPA</a></li>
                    <li class=""><a href="<?php echo site_url('pnpa/senarai_ppd_pnpa')?>">PNPA</a></li>
                    <li class=""><a href="<?php echo site_url('ppun/senarai_ppun')?>">PPUN</a></li>
                    <li class="active"><a href="<?php echo site_url('pla/senarai_ppd_pla')?>">PLA</a></li>
                  </ul>
                  
  <!--tab section-->
  <div class="tab-content" id="myTabContent">
    <div id="home" class="tab-pane fade active in">
    <!--status info-->
    <div class="alert alert-block alert-info fade in">
            <button data-dismiss="alert" class="close" type="button">
              ×
            </button>
              <h5 style="color:#FF0000">90%
              <a class="alert-heading">dokumen ini telah dilengkapkan</a>
              </h5>
    </div>
    <!--/.END status info-->
      <!--main container-->
      <div class="main-container">
      	 <!--panel 1-->  
         <div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe022;"></span> Pelan Pelupusan Aset (PTRA)
                  </div>
                </div>
                <div class="widget-body">
                  <form class="form-horizontal no-margin">
                  <div class="control-group">
                      <label class="control-label" for="tahun">
                        Tahun
                      </label>
                      <div class="controls controls-row">
                        
                        <select name="tahun">
                          <option>
                            - Tahun -
                          </option>
                          <option value="2013">
                            2013
                          </option>
                          <option value="2012">
                            2012
                          </option>
                          <option value="2011">
                            2011
                          </option>
                          <option value="2010">
                            2010
                          </option>
                          <option value="2009">
                            2009
                          </option>
                          <option value="2008">
                            2008
                          </option>
                          <option value="2007">
                            2007
                          </option>
                          <option value="2006">
                            2006
                          </option>
                          <option value="2005">
                            2005
                          </option>
                          <option value="2004">
                            2004
                          </option>
                          <option value="2003">
                            2003
                          </option>
                          <option value="2002">
                            2002
                          </option>
                          <option value="2001">
                            2001
                          </option>
                          <option value="2000">
                            2000
                          </option>
                          <option value="1999">
                            1999
                          </option>
                          <option value="1998">
                            1998
                          </option>
                          <option value="1997">
                            1997
                          </option>
                          <option value="1996">
                            1996
                          </option>
                          <option value="1995">
                            1995
                          </option>
                          <option value="1994">
                            1994
                          </option>
                          <option value="1993">
                            1993
                          </option>
                          <option value="1992">
                            1992
                          </option>
                          <option value="1991">
                            1991
                          </option>
                          <option value="1990">
                            1990
                          </option>
                          <option value="1989">
                            1989
                          </option>
                          <option value="1988">
                            1988
                          </option>
                          <option value="1987">
                            1987
                          </option>
                          <option value="1986">
                            1986
                          </option>
                          <option value="1985">
                            1985
                          </option>
                          <option value="1984">
                            1984
                          </option>
                          <option value="1983">
                            1983
                          </option>
                          <option value="1982">
                            1982
                          </option>
                          <option value="1981">
                            1981
                          </option>
                          <option value="1980">
                            1980
                          </option>
                          <option value="1979">
                            1979
                          </option>
                          <option value="1978">
                            1978
                          </option>
                        </select>
                      </div>
                    </div>
                  
                    <div class="control-group">
                      <label class="control-label">
                        Kementerian
                      </label>
                      <div class="controls">
                        <input class="input-xlarge" type="text" placeholder="Kementerian Kerja Raya" disabled name="kementerian" id="kementerian">
                      </div>
                    </div>                   
                    <div class="control-group">
                      <label class="control-label">
                        Jabatan/Agensi
                      </label>
                      <div class="controls">
                        <input class="input-xlarge" type="text" placeholder="Jabatan Kerja Raya" disabled name="jab_agensi" id="jab_agensi">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Premis
                      </label>
                      <div class="controls">
                        <input class="input-xlarge" type="text" placeholder="Pejabat Kerajaan" disabled name="premis" id="premis">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        No DPA
                      </label>
                      <div class="controls">
                        <input class="input-large" type="text" placeholder="1135104MYS.101042.BE0001" disabled name="nodpa" id="nodpa">
                      </div>
                    </div>                    
                  </form>
                </div>
              </div>
            </div>
         </div>
         <!--/.END panel 1-->

		<!--panel 2-->  
        <div class="row-fluid">
          <div class="span12">
            <div class="widget">
                <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Sila Kemaskini Maklumat Berikut</div>
              </div>
              	<!--table section-->            	
                <div class="widget-body"> 
              <!--table-->
                  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                    <thead>
                      <tr>
                        <th style="width:2%">
                          Bil
                        </th>
                        <th style="width:25%" class="hidden-phone">Kandungan</th>
                        <th style="width:8%" class="hidden-phone">Tindakan</th>
                        <th style="width:8%" class="hidden-phone">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="name">
                            1.0</span>
                        </td>
                        <td class="hidden-phone">Pendahuluan</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded">
                        	<a href="#pendahuluan"  data-toggle="modal">
                        <span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                    
                      </td>
                      </tr>
                       <div class="controls2"></div>                 
        
        <!--popup pendahuluan-->
        <div id="pendahuluan" class="modal2 hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 id="myModalLabel">
                Sila Kemaskini Maklumat Berikut
              </h4>
          </div>
            <div class="modal-body">
              <p>
				<form class="form-horizontal no-margin">
                  
                  <div class="control-group">
                      <label>
                        1.0 Pendahuluan
                      </label>                  
                  <div class="wysiwyg-container">
                    <textarea id="wysiwyg" class="input-block-level" placeholder="" style="height: 80px">
                    Menjelaskan maklumat mengenai premis berkaitan.
                    </textarea>
                  </div>
                  </div>
                </form>
              </p>  
            </div>
            <!--button-->
        	<div class="modal-footer">
        		<a href="#" class="btn btn-danger input-top-margin" data-dismiss="modal">Batal</a>
                <a href="#" class="btn btn-warning2" data-dismiss="modal">Simpan</a>            
            </div>
            <!--/.END button-->
        </div>
		<!--/.END popup pendahuluan-->
        
                      <tr>
                        <td>
                          <span class="name">
                            2.0</span></td>
                        <td class="hidden-phone">Objektif</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded">
                        	<a href="#objektif"  data-toggle="modal">
                        <span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>
                      </td>
                      </tr>
                      <div class="controls2"></div>                 
        
        <!--popup objektif-->
        <div id="objektif" class="modal2 hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 id="myModalLabel">
                Sila Kemaskini Maklumat Berikut
              </h4>
          </div>
            <div class="modal-body">
              <p>
				<form class="form-horizontal no-margin">
                  
                  <div class="control-group">
                      <label>
                        2.0 Objektif
                      </label>                  
                  <div class="wysiwyg-container">
                    <textarea id="wysiwyg2" class="input-block-level" placeholder="" style="height: 80px">
                    </textarea>
                  </div>
                  </div>
                </form>
              </p>  
            </div>
            <!--button-->
        	<div class="modal-footer">
        		<a href="#" class="btn btn-danger input-top-margin" data-dismiss="modal">Batal</a>
                <a href="#" class="btn btn-warning2" data-dismiss="modal">Simpan</a>            
            </div>
            <!--/.END button-->
        </div>
		<!--/.END popup objektif-->
        
                      <tr>
                        <td>
                          <span class="name">
                            3.0</span></td>
                        <td class="hidden-phone">Carta Organisasi dan Pelan Komunikasi</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded">
                        	<a href="#carta"  data-toggle="modal">
                        <span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                   
                      </td>
                      </tr>
                      <div class="controls2"></div>                 
        
        <!--popup carta-->
        <div id="carta" class="modal2 hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 id="myModalLabel">
                Sila Kemaskini Maklumat Berikut
              </h4>
          </div>
            <div class="modal-body">
              <p>
				<form class="form-horizontal no-margin">
                  
                  <div class="control-group">
                      <label>
                        3.0 Carta Organisasi dan Pelan Komunikasi
                      </label>                  
                  <div class="wysiwyg-container">
                    <textarea id="wysiwyg3" class="input-block-level" placeholder="" style="height: 80px">
                    </textarea>
                  </div>
                  </div>
                </form>
              </p>  
            </div>
            <!--button-->
        	<div class="modal-footer">
        		<a href="#" class="btn btn-danger input-top-margin" data-dismiss="modal">Batal</a>
                <a href="#" class="btn btn-warning2" data-dismiss="modal">Simpan</a>            
            </div>
            <!--/.END button-->
        </div>
		<!--/.END popup carta-->
                      
                      <tr>
                        <td>
                          <span class="name">
                            4.0</span></td>
                        <td class="hidden-phone">Skop dan Aktiviti Pelupusan Aset</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded">
                        	<a href="#skop"  data-toggle="modal">
                        <span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                  
                      </td>
                      </tr>
                      <div class="controls2"></div>                 
        
        <!--popup skop-->
        <div id="skop" class="modal2 hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 id="myModalLabel">
                Sila Kemaskini Maklumat Berikut
              </h4>
          </div>
            <div class="modal-body">
              <p>
				<form class="form-horizontal no-margin">
                  
                  <div class="control-group">
                      <label>
                        4.0 Skop dan Aktiviti Pelupusan Aset
                      </label>                  
                  <div class="wysiwyg-container">
                    <textarea id="wysiwyg4" class="input-block-level" placeholder="" style="height: 80px">
                    </textarea>
                  </div>
                  </div>
                </form>
              </p>  
            </div>
            <!--button-->
        	<div class="modal-footer">
        		<a href="#" class="btn btn-danger input-top-margin" data-dismiss="modal">Batal</a>
                <a href="#" class="btn btn-warning2" data-dismiss="modal">Simpan</a>            
            </div>
            <!--/.END button-->
        </div>
		<!--/.END popup skop-->
                      
                      <tr>
                        <td>
                          <span class="name">
                            5.0</span></td>
                        <td class="hidden-phone">Penyediaan Keperluan Sumber Aktiviti Pelupusan Aset</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded">
                        	<a href="#sedia"  data-toggle="modal">
                        <span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge">
                            Lengkap
                          </span>
                        </td>                    
                      </td>
                      </tr>
                      <div class="controls2"></div>                 
        
        <!--popup penyediaan-->
        <div id="sedia" class="modal2 hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 id="myModalLabel">
                Sila Kemaskini Maklumat Berikut
              </h4>
          </div>
            <div class="modal-body">
              <p>
				<form class="form-horizontal no-margin">
                  
                  <div class="control-group">
                      <label>
                        5.0 Penyediaan Keperluan Sumber Aktiviti Pelupusan Aset
                      </label>                  
                  <div class="wysiwyg-container">
                    <textarea id="wysiwyg5" class="input-block-level" placeholder="" style="height: 80px">
                    </textarea>
                  </div>
                  </div>
                </form>
              </p>  
            </div>
            <!--button-->
        	<div class="modal-footer">
        		<a href="#" class="btn btn-danger input-top-margin" data-dismiss="modal">Batal</a>
                <a href="#" class="btn btn-warning2" data-dismiss="modal">Simpan</a>            
            </div>
            <!--/.END button-->
        </div>
		<!--/.END popup penyediaan-->
                      
                      <tr>
                        <td>
                          <span class="name">
                            6.0</span></td>
                        <td class="hidden-phone">Kawalan Rekod Pelupusan Aset</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded">
                        	<a href="#kawal"  data-toggle="modal">
                        <span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge">
                            Deraf
                          </span>
                        </td>                   
                      </td>
                      </tr>
                      <div class="controls2"></div>                 
        
        <!--popup kawalan-->
        <div id="kawal" class="modal2 hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 id="myModalLabel">
                Sila Kemaskini Maklumat Berikut
              </h4>
          </div>
            <div class="modal-body">
              <p>
				<form class="form-horizontal no-margin">
                  
                  <div class="control-group">
                      <label>
                        6.0 Kawalan Rekod Plupusan Aset
                      </label>                  
                  <div class="wysiwyg-container">
                    <textarea id="wysiwyg6" class="input-block-level" placeholder="" style="height: 80px">
                    </textarea>
                  </div>
                  </div>
                </form>
              </p>  
            </div>
            <!--button-->
        	<div class="modal-footer">
        		<a href="#" class="btn btn-danger input-top-margin" data-dismiss="modal">Batal</a>
                <a href="#" class="btn btn-warning2" data-dismiss="modal">Simpan</a>            
            </div>
            <!--/.END button-->
        </div>
		<!--/.END popup kawalan-->
                      
                      <tr>
                        <td>
                          <span class="name">
                            7.0</span></td>
                        <td class="hidden-phone">Rujukan</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded">
                        	<a href="#rujukan"  data-toggle="modal">
                        <span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge">
                            Deraf
                          </span>
                        </td>                   
                      </td>
                      </tr>
                      <div class="controls2"></div>                 
        
        <!--popup rujukan-->
        <div id="rujukan" class="modal2 hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 id="myModalLabel">
                Sila Kemaskini Maklumat Berikut
              </h4>
          </div>
            <div class="modal-body">
              <p>
				<form class="form-horizontal no-margin">
                  
                  <div class="control-group">
                      <label>
                        7.0 Rujukan
                      </label>                  
                  <div class="wysiwyg-container">
                    <textarea id="wysiwyg7" class="input-block-level" placeholder="" style="height: 80px">
                    </textarea>
                  </div>
                  </div>
                </form>
              </p>  
            </div>
            <!--button-->
        	<div class="modal-footer">
        		<a href="#" class="btn btn-danger input-top-margin" data-dismiss="modal">Batal</a>
                <a href="#" class="btn btn-warning2" data-dismiss="modal">Simpan</a>            
            </div>
            <!--/.END button-->
        </div>
		<!--/.END popup rujukan-->
                      
                    </tbody>
                  </table>
                  <!--/.END table-->               
            </div>
                <!--/.END table section-->
            </div>
          </div>
        </div>
        <!--/.END panel 2-->
              
        <!--panel 3-->  
        <div class="row-fluid">
          <div class="span12">
            <div class="widget">
                <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Sila Kemaskini Borang Berikut</div>
              </div>
              	<!--table section-->            	
                <div class="widget-body"> 
              <!--table-->
                  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                    <thead>
                      <tr>
                        <th style="width:2%">
                          Bil
                        </th>
                        <th style="width:25%" class="hidden-phone">Nama Borang</th>
                        <th style="width:8%" class="hidden-phone">Tindakan</th>
                        <th style="width:8%" class="hidden-phone">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="name">
                            1</span>
                        </td>
                        <td class="hidden-phone">JKR.PATA.F10/1a</td>
                        <td class="hidden-phone">                       
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><a href="../pla/model_struktur_pla"><span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>                
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                    
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            2</span></td>
                        <td class="hidden-phone">JKR.PATA.F10/1b</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><a href="../pla/treeview_pla"><span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            3</span></td>
                        <td class="hidden-phone">JKR.PATA.F10/1c</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><a href="../pla/skop_aktiviti_pla"><span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul> 
                        <td class="hidden-phone">
                          <span class="badge badge-success">
                            Lengkap
                          </span>
                        </td>                   
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            4</span></td>
                        <td class="hidden-phone">JKR.PATA.F10/1d</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><a href="../pla/kawalan_rekod_pla"><span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>  
                        <td class="hidden-phone">
                          <span class="badge">
                            Deraf
                          </span>
                        </td>                  
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="name">
                            5</span></td>
                        <td class="hidden-phone">JKR.PATA.F10/1e</td>
                        <td class="hidden-phone">                         
                        <ul class="icomoon-icons-container">
                        <li class="rounded"><a href="../pla/dokumen_rujukan_pla"><span class="fs1" aria-hidden="true" data-icon="&#xe026;"></span></a></li></ul>
                        <td class="hidden-phone">  
                          <span class="badge">
                            Deraf
                          </span>
                        </td>                   
                      </td>
                      </tr>
                    </tbody>
                  </table>
                  <!--/.END table-->               
            </div>
                <!--/.END table section-->
            </div>
          </div>
        </div>
        <!--/.END panel 3-->
        
        <!--panel 4-->  
         <div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe022;"></span> Ulasan
                  </div>
                </div>
                <div class="widget-body">
                  <form class="form-horizontal no-margin">
                    <div class="control-group">
                      <label class="control-label" for="ulasan">
                        Ulasan
                      </label>
                      <div class="controls">
                        <textarea class="input-block-level" placeholder="Ulasan ..." style="height: 100px"></textarea>
                      </div>
                    </div>                    
                  </form>
                </div>
              </div>
            </div>
         </div>
         <!--/.END panel 4-->

   				      <!--buttons--> 
                <div class="next-prev-btn-container ">
                <div class="widget-body" align="right">
                    
                    <a href="<?php echo site_url('pla/senarai_ppd_pla') ?>">
                    	<button class="btn btn-danger input-top-margin" type="button">
                    		Batal
                        </button>
                    </a>
                 
                  <a class="btn btn-info input-top-margin" type="button" id="pembetulan">
                    Pembetulan
                  </a>
                  <a class="btn btn-success" type="button" id="sah">
                    Sah
                  </a>
                </div>   
                </div>
                <!--/.END buttons-->     

      </div>  
      <!--/.END main-container-->               
    </div>                  
  </div>
  <!--/.END tab section-->
    </div>  
    <!--/.END tab navigation-->
    
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
      
     
      $("sah").onclick = function () {
        reset();
        alertify.confirm("Adakah anda ingin mengesahkan rekod PLA ID PLA 00002?", function (e) {
          if (e) {

            window.location ="<?php echo site_url('pla/senarai_ppd_pla') ?>";
            
          } else {
            alertify.error("");
          }
        });
        return false;
      };

      $("pembetulan").onclick = function () {
        reset();
        alertify.confirm("Adakah anda ingin menghantar arahan pembetulan bagi rekod ini kepada Pegawai Penyedia Dokumen? Sila pastikan ruangan ulasan telah diisi. ", function (e) {
          if (e) {
            alertify.success("Notofikasi Pembetulan telah dihantar");
          } 
          else {
            alertify.error("");
          }
        });
        return false;
      };
      
      
     
      
     
</script>
 
   
 