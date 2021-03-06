<?php

class Belanjawan extends CI_Controller {
    /* Belanjawan
     *   Author : Anuar
     *   Title  : PSPAO AWAL & PPUN
     */

    function __construct() {
        parent::__construct();
        #load library dan helper yang dibutuhkan
        $this->load->library('form_validation');

        $this->load->helper(array('form', 'url'));
        $this->load->helper('function_helper');

        $this->load->model('menu/sidemenu_model');
        $this->load->model('agihan_model');
        //$this->load->model('pspao_akhir_model');
        $this->load->library('pagination');
        $this->load->library('table');

        $this->load->library('session');

        //$this->output->enable_profiler(TRUE); //display query statement
    }

    function agihan_belanjawan() {
        //name: Azian, Fatin
        //date: 08072013, 4/9/2013
        //desc: senarai agihan belanjawan

        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['jabatan'] = $this->agihan_model->get_jabatan(); //dapatkan senarai jabatan dr db
        //$data['premis'] = $this->agihan_model->get_premis();
        //$data['status'] = $this->agihan_model->get_status(); //dapatkan senarai premis dr db



        if ($getPspao = $this->agihan_model->get_pspao()) {
            $data['senarai_pspao'] = $getPspao;
        }

        $this->load->view('template/default', $data);
    }

    
    function agihan_belanjawan_ptf_sah() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_ptf_sah';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        //$data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db


        if ($getAbm = $this->agihan_model->get_abm()) {
            $data['agihan'] = $getAbm;
        }

        $this->load->view('template/default', $data);
    }

    function agihan_belanjawan_pp_lulus() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_pp_lulus';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        //$data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db


        if ($getAbm = $this->agihan_model->get_abm()) {
            $data['agihan'] = $getAbm;
        }

        $this->load->view('template/default', $data);
    }

    /* ************ Commented by hemantha wijesinghe **************
    
    
    function agihan_belanjawan_ppd() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_ppd';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        //$data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db


        if ($getAbm = $this->agihan_model->get_abm()) {

            $data['agihan'] = $getAbm;
        }
        
        
        $this->load->view('template/default', $data);
    }
    ***********************************************************/
    
    function agihan_belanjawan_ketuajab() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_ketuajab';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        //$data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db


        if ($getAbm = $this->agihan_model->get_abm()) {
            $data['agihan'] = $getAbm;
        }

        $this->load->view('template/default', $data);
    }

    function agihan_belanjawan_ppd_negeri() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_ppd_negeri';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['daerah'] = $this->agihan_model->get_daerah(); //dapatkan senarai daerah dr db
        $data['negeri'] = $this->agihan_model->get_negeri(); //dapatkan senarai negeri dr db


        if ($getAbm = $this->agihan_model->get_abm()) {
            $data['agihan'] = $getAbm;
        }

        $this->load->view('template/default', $data);
    }

    function agihan_belanjawan_ppd_jab() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_ppd_jab';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['daerah'] = $this->agihan_model->get_daerah(); //dapatkan senarai daerah dr db
        $data['negeri'] = $this->agihan_model->get_negeri(); //dapatkan senarai negeri dr db


        if ($getAbm = $this->agihan_model->get_abm()) {
            $data['agihan'] = $getAbm;
        }

        $this->load->view('template/default', $data);
    }

    function agihan_belanjawan_ppd_jab_negeri() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_ppd_jab_negeri';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['daerah'] = $this->agihan_model->get_daerah(); //dapatkan senarai daerah dr db
        $data['negeri'] = $this->agihan_model->get_negeri(); //dapatkan senarai negeri dr db


        if ($getAbm = $this->agihan_model->get_abm()) {
            $data['agihan'] = $getAbm;
        }

        $this->load->view('template/default', $data);
    }

    function agihan_belanjawan_ppd_jab_daerah() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_ppd_jab_daerah';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['daerah'] = $this->agihan_model->get_daerah(); //dapatkan senarai daerah dr db
        $data['negeri'] = $this->agihan_model->get_negeri(); //dapatkan senarai negeri dr db


        if ($getAbm = $this->agihan_model->get_abm()) {
            $data['agihan'] = $getAbm;
        }

        $this->load->view('template/default', $data);
    }

    function agihan_belanjawan_ppd_jab_premis1() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_ppd_jab_premis1';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['daerah'] = $this->agihan_model->get_daerah(); //dapatkan senarai daerah dr db
        $data['negeri'] = $this->agihan_model->get_negeri(); //dapatkan senarai negeri dr db


        if ($getAbm = $this->agihan_model->get_abm()) {
            $data['agihan'] = $getAbm;
        }

        $this->load->view('template/default', $data);
    }

    /*     * ********************** commented by hemantha wijesinghe


      function senarai_ptf_abm_pp() {

      $node_id = '69';
      $menu_name = 'menu1';
      $menu_link = 'belanjawan/agihan_belanjawan/senarai_ptf_abm_pp';

      $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
      $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
      $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
      $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

      //$data['year_list'] =year_dropdown();  //get year list
      //$data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
      //$data['jabatan'] = $this->agihan_model->get_jabatan(); //dapatkan senarai jabatan dr db


      if ($getMyspatauser = $this->agihan_model->get_myspatauser()) {
      $data['senarai_ptf'] = $getMyspatauser;
      }


      $this->load->view('template/default', $data);
      }

     * ******************** */

    function senarai_ppd_abm_ptf() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/senarai_ppd_abm_ptf';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['jabatan'] = $this->agihan_model->get_jabatan(); //dapatkan senarai jabatan dr db

        $getMyspatauser = $this->agihan_model->get_ppd_myspatauser(28);
        $data['senarai_ppd'] = $getMyspatauser;
      
        //if ($getMyspatauser = $this->agihan_model->get_myspatauser2()) {
         //   $data['senarai_ppd'] = $getMyspatauser;
       // }

        $this->load->view('template/default', $data);
    }

    function senarai_ptf_abm_ketuajab() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/senarai_ptf_abm_ketuajab';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['jabatan'] = $this->agihan_model->get_jabatan(); //dapatkan senarai jabatan dr db


        if ($getMyspatauser = $this->agihan_model->get_myspatauser()) {
            $data['senarai_ptf'] = $getMyspatauser;
        }

        $this->load->view('template/default', $data);
    }
    
    /**
     * 
     * Super Class  Belanjawan extends CI_Controller
     * @module      Agihan_model 
     * @metod       agihan_belanjawan_pp 
     * @category    Controller 
     * @author      Hemantha Wijesinghe
     * @email       hwijesinghe@hotmail.com
     * @link        http://www.onlinedesignstudio.net 
     * @date        06 October 2013
     * 
     */
    
    function agihan_belanjawan_pp() {
        
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_pp';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['jabatan'] = $this->agihan_model->get_jabatan(); //dapatkan senarai jabatan dr db
        $data['premis'] = $this->agihan_model->get_premis();
        $data['negeri'] = $this->agihan_model->get_negeri();
        $data['daerah'] = $this->agihan_model->get_daerah();
        $data['userinfo'] = $this->agihan_model->get_abm();
        $getAbm['agihan'] = $this->agihan_model->get_abm();

        $data['jum_kos_mohon'] = $getAbm['agihan'][0]->jum_kos_mohon;

        $rules = array(
            array(
                'field' => 'txt_terima',
                'label' => 'Terima (RM)',
                'rules' => 'required'
            ),
        );

        $this->form_validation->set_rules($rules); //validate form

        
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/default', $data);
        } else {
            //$data['main_content'] = 'belanjawan/agihan_belanjawan/agihan_belanjawan';
            $this->load->view('template/default', $data);
        }
    }
    
    
    function agihan_belanjawan_ptf() {
        
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_ptf';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['jabatan'] = $this->agihan_model->get_jabatan(); //dapatkan senarai jabatan dr db
        $data['premis'] = $this->agihan_model->get_premis();
        $data['negeri'] = $this->agihan_model->get_negeri();
        $data['daerah'] = $this->agihan_model->get_daerah();
        $data['userinfo'] = $this->agihan_model->get_abm();
        $getAbm['agihan'] = $this->agihan_model->get_abm();

        $data['jum_kos_mohon'] = $getAbm['agihan'][0]->jum_kos_mohon;

        $rules = array(
            array(
                'field' => 'txt_terima',
                'label' => 'Terima (RM)',
                'rules' => 'required'
            ),
        );

        $this->form_validation->set_rules($rules); //validate form

        
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/default', $data);
        } else {
            //$data['main_content'] = 'belanjawan/agihan_belanjawan/agihan_belanjawan';
            $this->load->view('template/default', $data);
        }
    }
    
    

    /**
     * 
     * Super Class  Belanjawan extends CI_Controller
     * @module      Agihan_model 
     * @metod       set_terima 
     * @category    Controller 
     * @author      Hemantha Wijesinghe
     * @email       hwijesinghe@hotmail.com
     * @link        http://www.onlinedesignstudio.net 
     * @date        06 October 2013
     * 
     */
    function senarai_ptf_abm_pp() {

        $node_id = '69';
        $menu_name = 'menu1';
        //$menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_pp';
        $menu_link = 'belanjawan/agihan_belanjawan/senarai_ptf_abm_pp';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        $data['jabatan'] = $this->agihan_model->get_jabatan(); //dapatkan senarai jabatan dr db
        $data['premis'] = $this->agihan_model->get_premis();
        $data['negeri'] = $this->agihan_model->get_negeri();
        $data['daerah'] = $this->agihan_model->get_daerah();
        $data['userinfo'] = $this->agihan_model->get_abm();

        $result = $this->agihan_model->set_terima();

//        if ($getMyspatauser = $this->agihan_model->get_myspatauser()) {
//            $data['senarai_ptf'] = $getMyspatauser;
//        }

        $getMyspatauser = $this->agihan_model->get_ptf_myspatauser(9);
        $data['senarai_ptf'] = $getMyspatauser;
      
        
        
        
        if ($result == 1) {
            //belanjawan/senarai_ptf_abm_pp;
            //$this->senarai_ptf_abm_pp();
            $this->load->view('template/default', $data);
        } else {
            
        }
    }
    
    /**
     * 
     * Super Class  Belanjawan extends CI_Controller
     * @module      Agihan_model 
     * @metod       agihan_belanjawan_ppd 
     * @category    Controller 
     * @author      Hemantha Wijesinghe
     * @email       hwijesinghe@hotmail.com
     * @link        http://www.onlinedesignstudio.net 
     * @date        07 October 2013
     * 
     */
    
    function agihan_belanjawan_ppd() {
        $node_id = '69';
        $menu_name = 'menu1';
        $menu_link = 'belanjawan/agihan_belanjawan/agihan_belanjawan_ppd';

        $data = array('menu_name' => $menu_name, 'menu_id' => $node_id, 'main_content' => $menu_link);
        $data['menu_parent'] = $this->sidemenu_model->get_sidemenu_parent($menu_name);
        $data['menu_sub'] = $this->sidemenu_model->get_sidemenu_sub($menu_name);
        $data['menu'] = $this->sidemenu_model->get_sidemenu($menu_name);

        $data['year_list'] = year_dropdown();  //get year list 
        $data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db
        //$data['kementerian'] = $this->agihan_model->get_kementerian(); //dapatkan senarai kementerian dr db

        $data['userinfo'] = $this->agihan_model->get_abm();
        $getAbm['agihan'] = $this->agihan_model->get_abm();

        $min_aje_result = $this->agihan_model->get_ministry_agency($getAbm['agihan'][0]->idkem, $getAbm['agihan'][0]->idjab_agensi);
       
        $ptra_total = $this->agihan_model->get_total_cost_ptra();
        $popa_total = $this->agihan_model->get_total_cost_popa();
        $ppun_total = $this->agihan_model->get_total_cost_ppun();
        $pnpa_total = $this->agihan_model->get_total_cost_pnpa();
        $pla_total  = $this->agihan_model->get_total_cost_pla();
        
   /*     echo($ptra_total[0]->total . "<br />");
        echo($popa_total[0]->total . "<br />");
        echo($ppun_total[0]->total . "<br />");
        echo($pnpa_total[0]->total . "<br />");
        echo($pla_total[0]->total . "<br />");
    */    
        $full_total = $ptra_total[0]->total + $popa_total[0]->total + $ppun_total[0]->total + $pnpa_total[0]->total + $pla_total[0]->total ;
        
        $data['jum_kos_mohon'] = $getAbm['agihan'][0]->jum_kos_mohon;
        //$data['jum_kos_terima'] = $getAbm['agihan'][0]->jum_kos_terima; // This data comes from user session
        
        $data['jum_kos_terima'] = $full_total;
        
        
        if ($getAbm = $this->agihan_model->get_abm()) {
            $data['agihan'] = $getAbm;
        }
        
        $this->load->view('template/default', $data);
        
    }
    

}
