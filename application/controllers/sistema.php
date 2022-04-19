<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sistema extends CI_Controller
{

    /******************************************
     * Created by PhpStorm.                   *
     * User:  Janei Araujo de Moura Junior    *
     * Email: jaraujo.php@gmail.com           *
     * Function:  Web Developer               *
     * Date:  15/10/2018                      *
     * Time:  00:47                           *
     * Copyright © 2018 All rights reserved.  *
     ******************************************/

    public function __construct()
    {
        parent::__construct();
        $this->load->model('sistema_model', '', TRUE);
        $this->load->helper(array('audit_helper'));
    }

    public function index()
    {
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        // $this->data['ordens'] = $this->sistema_model->getOsAbertas();
        // $this->data['produtos'] = $this->sistema_model->getProdutosMinimo();
        // $this->data['os'] = $this->sistema_model->getOsEstatisticas();
        // $this->data['estatisticas_financeiro'] = $this->sistema_model->getEstatisticasFinanceiro();
        $this->data['menuPainel'] = 'Painel';
        $this->data['view'] = 'sistema/painel';
        $this->load->view('tema/topo',  $this->data);
    }

    public function minhaContaOriginal()
    {
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        $this->data['usuario'] = $this->sistema_model->getById($this->session->userdata('id'));
        $this->data['view'] = 'sistema/minhaConta';
        $this->load->view('tema/topo',  $this->data);
    }

    public function alterarSenha()
    {
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        $oldSenha = $this->input->post('oldSenha');
        $senha = $this->input->post('novaSenha');
        $result = $this->sistema_model->alterarSenha($senha, $oldSenha, $this->session->userdata('id'));
        if ($result) {
            $this->session->set_flashdata('success', 'Senha Alterada com sucesso!');
            redirect(base_url() . 'index.php/sistema/minhaConta');
        } else {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar a senha!');
            redirect(base_url() . 'index.php/sistema/minhaConta');
        }
    }

    public function pesquisar()
    {
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        //$termo = $this->input->get('termo');
        //
        //$data['results'] = $this->sistema_model->pesquisar($termo);
        //$this->data['produtos'] = $data['results']['produtos'];
        //$this->data['servicos'] = $data['results']['servicos'];
        //$this->data['os'] = $data['results']['os'];
        //$this->data['clientes'] = $data['results']['clientes'];
        //$this->data['view'] = 'sistema/pesquisa';
        //$this->load->view('tema/topo',  $this->data);

    }



    public function terms()
    {

        $this->load->view('sistema/terms');
    }

    function signup()
    {

        $this->load->library('form_validation');

        $this->data['custom_error'] = '';

        if ($this->form_validation->run('signup') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="alert alert-danger">' . validation_errors() . '</div>' : false);
        } else {

            $this->load->library('encrypt');
            $permissoes_id = 3;
            $situacao = 1;
            $data = array(


                'nome' =>  $this->input->post('nome'),
                'sobrenome' =>  $this->input->post('sobrenome'),
                'cpf' =>  $this->input->post('cpf'),
                'codigo' =>  $this->input->post('codigo'),

                'email' =>  $this->input->post('email'),
                'senha'  => $this->encrypt->sha1($this->input->post('senha')),
                'telefone' =>  $this->input->post('telefone'),
                'dateinsert' => date('Y-m-d H:i:s'),
                'permissoes_id' => $permissoes_id,
                'terms' => $this->input->post('terms'),
                'situacao' => $situacao,

            );



            if ($this->usuarios_model->addUsuario('usuarios', $data) == TRUE) {


                $this->session->set_flashdata('success', 'Cadastrado realizado com sucesso!');
                redirect(base_url() . 'index.php/sistema/signup');
                sleep(2);
                redirect(base_url() . 'index.php/sistema/login');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }




        $this->data['view'] = 'sistema/signup';
        $this->load->view('sistema/signup', $this->data);
    }




    public function login()
    {

        $this->load->view('sistema/login');
    }

    public function sair()
    {
        log_info('Efetuou logout no sistema');
        $this->session->sess_destroy();
        redirect('sistema/login');
    }

    public function verificarLogin()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|required|xss_clean|trim');
        $this->form_validation->set_rules('senha', 'Senha', 'required|xss_clean|trim');
        $ajax = $this->input->get('ajax');
        if ($this->form_validation->run() == false) {

            if ($ajax == true) {
                $json = array('result' => false);
                echo json_encode($json);
            } else {
                $this->session->set_flashdata('error', 'Os dados de acesso estão incorretos.');
                redirect($this->login);
            }
        } else {
            $email = $this->input->post('email');
            $senha = $this->input->post('senha');

            $this->load->library('encrypt');
            $senha = $this->encrypt->sha1($senha);

            $this->db->where('email', $email);
            $this->db->where('senha', $senha);
            $this->db->where('situacao', 1);
            $this->db->limit(1);
            $usuario = $this->db->get('usuarios')->row();
            if (count($usuario) > 0) {
                $dados = array('nome' => $usuario->nome, 'url_logo' => $usuario->url_logo, 'url_ass' => $usuario->url_ass,  'id' => $usuario->idUsuarios, 'permissao' => $usuario->permissoes_id, 'logado' => TRUE);

                $this->session->set_userdata($dados);
                log_info('Efetuou login no sistema');


                if ($ajax == true) {
                    $json = array('result' => true);
                    echo json_encode($json);
                } else {
                    redirect(base_url() . 'index.php/dashboard');
                }
            } else {


                if ($ajax == true) {
                    $json = array('result' => false);
                    echo json_encode($json);
                } else {
                    $this->session->set_flashdata('error', 'Os dados de acesso estão incorretos.');
                    redirect($this->login);
                }
            }
        }
    }

    public function backup()
    {

        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para efetuar backup.');
            redirect(base_url());
        }



        $this->load->dbutil();
        $prefs = array(
            'format'      => 'zip',
            'filename'    => 'backup' . date('d-m-Y') . '.sql'
        );

        $backup = &$this->dbutil->backup($prefs);

        $this->load->helper('file');
        log_info('Efetuou backup do sistema');

        write_file(base_url() . 'backup/backup.zip', $backup);

        $this->load->helper('download');
        force_download('backup' . date('d-m-Y H:m:s') . '.zip', $backup);
    }

    public function emitente()
    {

        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para configurar emitente.');
            redirect(base_url());
        }

        $data['menuConfiguracoes'] = 'Configuracoes';
        $data['dados'] = $this->sistema_model->getEmitente();
        $data['view'] = 'sistema/emitente';
        $this->load->view('tema/topo', $data);
        $this->load->view('tema/rodape');
    }

    function do_upload()
    {

        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('sistema/login');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para configurar emitente.');
            redirect(base_url());
        }

        $this->load->library('upload');

        $image_upload_folder = FCPATH . 'assets/uploads';

        if (!file_exists($image_upload_folder)) {
            mkdir($image_upload_folder, DIR_WRITE_MODE, true);
        }

        $this->upload_config = array(
            'upload_path'   => $image_upload_folder,
            'allowed_types' => 'png|jpg|jpeg|bmp',
            'max_size'      => 2048,
            'remove_space'  => TRUE,
            'encrypt_name'  => TRUE,
        );

        $this->upload->initialize($this->upload_config);

        if (!$this->upload->do_upload()) {
            $upload_error = $this->upload->display_errors();
            print_r($upload_error);
            exit();
        } else {
            $file_info = array($this->upload->data());
            return $file_info[0]['file_name'];
        }
    }

    public function cadastrarEmitente()
    {

        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('index.php/sistema/login');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para configurar emitente.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Razão Social', 'required|xss_clean|trim');
        $this->form_validation->set_rules('cnpj', 'CNPJ', 'required|xss_clean|trim');
        $this->form_validation->set_rules('ie', 'IE', 'required|xss_clean|trim');
        $this->form_validation->set_rules('logradouro', 'Logradouro', 'required|xss_clean|trim');
        $this->form_validation->set_rules('numero', 'Número', 'required|xss_clean|trim');
        $this->form_validation->set_rules('bairro', 'Bairro', 'required|xss_clean|trim');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required|xss_clean|trim');
        $this->form_validation->set_rules('uf', 'UF', 'required|xss_clean|trim');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required|xss_clean|trim');
        $this->form_validation->set_rules('email', 'E-mail', 'required|xss_clean|trim');




        if ($this->form_validation->run() == false) {

            $this->session->set_flashdata('error', 'Campos obrigatórios não foram preenchidos.');
            redirect(base_url() . 'index.php/sistema/emitente');
        } else {

            $nome = $this->input->post('nome');
            $cnpj = $this->input->post('cnpj');
            $ie = $this->input->post('ie');
            $logradouro = $this->input->post('logradouro');
            $numero = $this->input->post('numero');
            $bairro = $this->input->post('bairro');
            $cidade = $this->input->post('cidade');
            $uf = $this->input->post('uf');
            $telefone = $this->input->post('telefone');
            $email = $this->input->post('email');
            $image = $this->do_upload();
            $logo = base_url() . 'assets/uploads/' . $image;


            $retorno = $this->sistema_model->addEmitente($nome, $cnpj, $ie, $logradouro, $numero, $bairro, $cidade, $uf, $telefone, $email, $logo);
            if ($retorno) {

                $this->session->set_flashdata('success', 'As informações foram inseridas com sucesso.');
                redirect(base_url() . 'index.php/sistema/emitente');
            } else {
                $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar inserir as informações.');
                redirect(base_url() . 'index.php/sistema/emitente');
            }
        }
    }

    public function editarEmitente()
    {

        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('index.php/sistema/login');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para configurar emitente.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Razão Social', 'required|xss_clean|trim');
        $this->form_validation->set_rules('cnpj', 'CNPJ', 'required|xss_clean|trim');
        $this->form_validation->set_rules('ie', 'IE', 'required|xss_clean|trim');
        $this->form_validation->set_rules('logradouro', 'Logradouro', 'required|xss_clean|trim');
        $this->form_validation->set_rules('numero', 'Número', 'required|xss_clean|trim');
        $this->form_validation->set_rules('bairro', 'Bairro', 'required|xss_clean|trim');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required|xss_clean|trim');
        $this->form_validation->set_rules('uf', 'UF', 'required|xss_clean|trim');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required|xss_clean|trim');
        $this->form_validation->set_rules('email', 'E-mail', 'required|xss_clean|trim');




        if ($this->form_validation->run() == false) {

            $this->session->set_flashdata('error', 'Campos obrigatórios não foram preenchidos.');
            redirect(base_url() . 'index.php/sistema/emitente');
        } else {

            $nome = $this->input->post('nome');
            $cnpj = $this->input->post('cnpj');
            $ie = $this->input->post('ie');
            $logradouro = $this->input->post('logradouro');
            $numero = $this->input->post('numero');
            $bairro = $this->input->post('bairro');
            $cidade = $this->input->post('cidade');
            $uf = $this->input->post('uf');
            $telefone = $this->input->post('telefone');
            $email = $this->input->post('email');
            $userupdate = $this->session->userdata('id');
            $dateupdate = date('Y-m-d H:i:s');

            $id = $this->input->post('id');


            $retorno = $this->sistema_model->editEmitente($id, $nome, $cnpj, $ie, $logradouro, $numero, $bairro, $cidade, $uf, $telefone, $email, $userupdate, $dateupdate);
            if ($retorno) {

                $this->session->set_flashdata('success', 'As informações foram alteradas com sucesso.');
                redirect(base_url() . 'index.php/sistema/emitente');
            } else {
                $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar as informações.');
                redirect(base_url() . 'index.php/sistema/emitente');
            }
        }
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
        $this->data['view'] = 'sistema/minhaConta';
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
            redirect(base_url() . 'index.php/sistema/minhaConta');
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
                redirect(base_url() . 'index.php/sistema/minhaConta');
            } else {
                $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar as informações.');
                redirect(base_url() . 'index.php/sistema/minhaConta');
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
            redirect(base_url() . 'index.php/sistema/minhaConta');
        }
        $this->load->helper('file');


        $image = $this->do_upload();
        $logo = base_url() . 'assets/uploads/' . $image;

        $retorno = $this->sistema_model->editImguser($id, $logo);
        if ($retorno) {

            $this->session->set_flashdata('success', 'As informações foram alteradas com sucesso.');
            redirect(base_url() . 'index.php/sistema/minhaConta');
        } else {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar as informações.');
            redirect(base_url() . 'index.php/sistema/minhaConta');
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
            redirect(base_url() . 'index.php/sistema/minhaConta');
        }
        $this->load->helper('file');


        $image = $this->do_upload();
        $logo = base_url() . 'assets/uploads/' . $image;

        $retorno = $this->sistema_model->editAss($id, $logo);
        if ($retorno) {

            $this->session->set_flashdata('success', 'As informações foram alteradas com sucesso.');
            redirect(base_url() . 'index.php/sistema/minhaConta');
        } else {
            $this->session->set_flashdata('error', 'Ocorreu um erro ao tentar alterar as informações.');
            redirect(base_url() . 'index.php/sistema/minhaConta');
        }
    }
}
