<?php

class Perfil extends CI_Controller {

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
        $this->load->model('perfil_model', '', TRUE);
        $this->data['menuPerfil'] = 'Perfil';


        $this->load->model('perfil_model', '', TRUE);
        $this->load->model('pessoa_sexo_model', '', TRUE);
        $this->load->model('escolaridade_model', '', TRUE);
        $this->load->model('estadocivil_model', '', TRUE);


        $this->data['pessoa_sexo'] = $this->pessoa_sexo_model->getActive('pessoa_sexo','pessoa_sexo.id,pessoa_sexo.descricao');
        $this->data['pessoa_escolaridade'] = $this->escolaridade_model->getActive('pessoa_escolaridade','pessoa_escolaridade.id,pessoa_escolaridade.descricao');
        $this->data['pessoa_estadocivil'] = $this->estadocivil_model->getActive('pessoa_estadocivil','pessoa_estadocivil.id,pessoa_estadocivil.descricao');
    }

    function index(){
        $this->gerenciar();

    }

    function gerenciar(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aCliente')){
            $this->session->set_flashdata('error','Você não tem permissão para visualizar perfil.');
            redirect(base_url());
        }

        $this->data['usuario'] = $this->perfil_model->getById($this->session->userdata('id'));
        $this->data['menuPerfil'] = 'Perfil';
        $this->data['view'] = 'perfil/perfil';
        $this->load->view('tema/topo',$this->data);

    }



    public function Perfil()
    {
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        $this->data['usuario'] = $this->sistema_model->getById($this->session->userdata('id'));
        $this->data['view'] = 'perfil/perfil';
        $this->load->view('tema/topo',  $this->data);
    }


    public function editarLogo()
    {

        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('index.php/sistema/login');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para configurar emitente.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null || !is_numeric($id)) {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar a logomarca.');
            redirect(base_url() . 'index.php/sistema/emitente');
        }
        $this->load->helper('file');
        delete_files(FCPATH . 'assets/uploads/');

        $image = $this->do_upload();
        $logo = base_url() . 'assets/uploads/' . $image;

        $retorno = $this->sistema_model->editLogo($id, $logo);
        if ($retorno) {

            $this->session->set_flashdata('success', 'As informações foram alteradas com sucesso.');
            redirect(base_url() . 'index.php/sistema/emitente');
        } else {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar as informações.');
            redirect(base_url() . 'index.php/sistema/emitente');
        }
    }

    public function minhaConta()
    {
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        $this->data['usuario'] = $this->sistema_model->getById($this->session->userdata('id'));
        $this->data['view'] = 'perfil/perfil';
        $this->load->view('tema/topo',  $this->data);
    }

    public function editarUsuario()
    {

        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('index.php/sistema/login');
        }


        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'required|xss_clean|trim');
        $this->form_validation->set_rules('rg', 'required|xss_clean|trim');
        $this->form_validation->set_rules('cpf', 'required|xss_clean|trim');
        $this->form_validation->set_rules('telefone', 'required|xss_clean|trim');
        $this->form_validation->set_rules('celular', 'required|xss_clean|trim');
        $this->form_validation->set_rules('numero', 'required|xss_clean|trim');
        $this->form_validation->set_rules('rua', 'required|xss_clean|trim');
        $this->form_validation->set_rules('bairro', 'required|xss_clean|trim');
        $this->form_validation->set_rules('cidade', 'required|xss_clean|trim');
        $this->form_validation->set_rules('estado', 'required|xss_clean|trim');
        $this->form_validation->set_rules('nascido_em', 'required|xss_clean|trim');


        if ($this->form_validation->run() == false) {

            $this->session->set_flashdata('error', 'Campos obrigatórios não foram preenchidos.');
            redirect(base_url() . 'index.php/perfil');
        } else {

            $nome = $this->input->post('nome');
            $rg = $this->input->post('rg');
            $cpf = $this->input->post('cpf');
            $telefone = $this->input->post('telefone');
            $celular = $this->input->post('celular');
            $numero = $this->input->post('numero');
            $rua = $this->input->post('rua');
            $bairro = $this->input->post('bairro');
            $cidade = $this->input->post('cidade');
            $estado = $this->input->post('estado');
            $nascido_em = $this->input->post('nascido_em');
            $id = $this->input->post('id');


            $retorno = $this->sistema_model->editUsuario($id, $nome, $rg, $cpf, $telefone, $celular, $numero, $rua, $bairro, $cidade, $estado, $nascido_em);
            if ($retorno) {

                $this->session->set_flashdata('success', 'As informações foram alteradas com sucesso.');
                redirect(base_url() . 'index.php/perfil');
            } else {
                $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar as informações.');
                redirect(base_url() . 'index.php/perfil');
            }
        }
    }

    public function editarImgperfil()
    {

        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('index.php/sistema/login');
        }

        $id = $this->input->post('id');
        if ($id == null || !is_numeric($id)) {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar a Assinatura.');
            redirect(base_url() . 'index.php/perfil');
        }
        $this->load->helper('file');


        $image = $this->do_upload();
        $logo = base_url() . 'assets/uploads/' . $image;

        $retorno = $this->sistema_model->editImguser($id, $logo);
        if ($retorno) {

            $this->session->set_flashdata('success', 'As informações foram alteradas com sucesso.');
            redirect(base_url() . 'index.php/perfil');
        } else {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar as informações.');
            redirect(base_url() . 'index.php/perfil');
        }
    }

    public function editarAssinatura()
    {

        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('index.php/sistema/login');
        }

        $id = $this->input->post('id');
        if ($id == null || !is_numeric($id)) {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar a Assinatura.');
            redirect(base_url() . 'index.php/perfil');
        }
        $this->load->helper('file');


        $image = $this->do_upload();
        $logo = base_url() . 'assets/uploads/' . $image;

        $retorno = $this->sistema_model->editAss($id, $logo);
        if ($retorno) {

            $this->session->set_flashdata('success', 'As informações foram alteradas com sucesso.');
            redirect(base_url() . 'index.php/perfil');
        } else {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar as informações.');
            redirect(base_url() . 'index.php/perfil');
        }
    }

    public function alterarSenha()
    {
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        $oldSenha = $this->input->post('oldSenha');
        $senha = $this->input->post('novaSenha');
        $result = $this->perfil_model->alterarSenha($senha, $oldSenha, $this->session->userdata('id'));
        if ($result) {
            $this->session->set_flashdata('success', 'Senha Alterada com sucesso!');
            redirect(base_url() . 'index.php/perfil/perfil');
        } else {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar a senha!');
            redirect(base_url() . 'index.php/perfil/perfil');
        }
    }


}