<?php

class Dashboard extends CI_Controller {

        /******************************************
         * Created by PhpStorm.                   *
         * User:  Janei Araujo de Moura Junior    *
         * Email: jaraujo.php@gmail.com           *
         * Function:  Web Developer               *
         * Date:  15/10/2018                      *
         * Time:  00:47                           *
         * Copyright © 2018 All rights reserved.  *
         ******************************************/

    function __construct() {
        parent::__construct();
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        $this->load->helper(array('form', 'codegen_helper'));
        $this->load->model('dashboard_model', '', TRUE);
        $this->data['menuDashboard'] = 'Dashboard';
    }

    function index(){
        $this->gerenciar();
    }

    function gerenciar(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aCliente')){
            $this->session->set_flashdata('error','Você não tem permissão para visualizar dashboard.');
            redirect(base_url());
        }


        $this->data['view'] = 'dashboard/dashboard';
        $this->load->view('tema/topo',$this->data);
    }


}