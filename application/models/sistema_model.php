<?php
class Sistema_model extends CI_Model {

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
    }


    function get($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array'){

        $this->db->select($fields);
        $this->db->from($table);
        $this->db->limit($perpage,$start);
        if($where){
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }



    function getById_1($id){
        $this->db->from('usuarios');
        $this->db->select('usuarios.*, permissoes.nome as permissao');
        $this->db->join('permissoes', 'permissoes.idPermissao = usuarios.permissoes_id', 'left');
        $this->db->where('idUsuarios',$id);
        $this->db->limit(1);
    }





    function getById($id){
        $this->db->from('usuarios');
        $this->db->select('usuarios.*, permissoes.nome as permissao');
        $this->db->join('permissoes', 'permissoes.idPermissao = usuarios.permissoes_id', 'left');
        $this->db->where('idUsuarios',$id);
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function alterarSenha($newSenha, $oldSenha, $id)
    {

        $this->load->library('encrypt');
        $this->db->where('idUsuarios', $id);
        $this->db->limit(1);
        $usuario = $this->db->get('usuarios')->row();

        if (password_verify($oldSenha, $usuario->senha)) {
            return false;
        } else {

            $senha = $this->encrypt->sha1($newSenha);

            $this->db->set('senha',$senha);


          //  $senha = $this->input->post('newSenha');

           // 'senha'  => $this->encrypt->sha1($this->input->post('senha')),

            $this->db->where('idUsuarios', $id);
            return $this->db->update('usuarios');
        }


    }

    function pesquisar($termo){
        $data = array();
        // buscando clientes
        $this->db->like('nomeCliente',$termo);
        $this->db->limit(5);
        $data['clientes'] = $this->db->get('clientes')->result();

        // buscando os
        $this->db->like('idOs',$termo);
        $this->db->limit(5);
        $data['os'] = $this->db->get('os')->result();

        // buscando produtos
        $this->db->like('descricao',$termo);
        $this->db->limit(5);
        $data['produtos'] = $this->db->get('produtos')->result();

        //buscando serviços
        $this->db->like('nome',$termo);
        $this->db->limit(5);
        $data['servicos'] = $this->db->get('servicos')->result();

        return $data;


    }


    function add($table,$data){
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }

        return FALSE;
    }

    function edit($table,$data,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0)
        {
            return TRUE;
        }

        return FALSE;
    }

    function delete($table,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }

        return FALSE;
    }

    function count($table){
        return $this->db->count_all($table);
    }

    function getOsAbertas(){
        $this->db->select('os.*, clientes.nomeCliente');
        $this->db->from('os');
        $this->db->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db->where('os.status','Aberto');
        $this->db->limit(10);
        return $this->db->get()->result();
    }

    function getProdutosMinimo(){

        $sql = "SELECT * FROM produtos WHERE estoque <= estoqueMinimo LIMIT 10";
        return $this->db->query($sql)->result();

    }

    function getOsEstatisticas(){
        $sql = "SELECT status, COUNT(status) as total FROM os GROUP BY status ORDER BY status";
        return $this->db->query($sql)->result();
    }

    public function getEstatisticasFinanceiro(){
        $sql = "SELECT SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor END) as total_receita, 
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' THEN valor END) as total_despesa,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'receita' THEN valor END) as total_receita_pendente,
                       SUM(CASE WHEN baixado = 0 AND tipo = 'despesa' THEN valor END) as total_despesa_pendente FROM lancamentos";
        return $this->db->query($sql)->row();
    }


    public function getEmitente()
    {
        return $this->db->get('emitente')->result();
    }


    public function getUsuario()
    {
        return $this->db->get('usuarios')->result();
    }


    public function addEmitente($nome, $cnpj, $ie, $logradouro, $numero, $bairro, $cidade, $uf,$telefone,$email, $logo){

        $this->db->set('nome', $nome);
        $this->db->set('cnpj', $cnpj);
        $this->db->set('ie', $ie);
        $this->db->set('rua', $logradouro);
        $this->db->set('numero', $numero);
        $this->db->set('bairro', $bairro);
        $this->db->set('cidade', $cidade);
        $this->db->set('uf', $uf);
        $this->db->set('telefone', $telefone);
        $this->db->set('email', $email);
        $this->db->set('url_logo', $logo);
        return $this->db->insert('emitente');
    }


    public function editEmitente($id, $nome, $cnpj, $ie, $logradouro, $numero, $bairro, $cidade, $uf,$telefone,$email, $userupdate, $dateupdate){

        $this->db->set('nome', $nome);
        $this->db->set('cnpj', $cnpj);
        $this->db->set('ie', $ie);
        $this->db->set('rua', $logradouro);
        $this->db->set('numero', $numero);
        $this->db->set('bairro', $bairro);
        $this->db->set('cidade', $cidade);
        $this->db->set('uf', $uf);
        $this->db->set('telefone', $telefone);
        $this->db->set('email', $email);
       // $this->db->set('userupdate', $userupdate = $this->session->userdata('id'));
      //  $this->db->set($dateupdate = date('Y-m-d H:i:s'));
        $this->db->where('id', $id);
        return $this->db->update('emitente');
    }

    public function editUsuario($id, $nome, $rg, $cpf, $telefone, $celular, $numero, $rua, $bairro, $cidade, $estado, $nascido_em){

        $this->db->set('nome', $nome);
        $this->db->set('rg', $rg);
        $this->db->set('cpf', $cpf);
        $this->db->set('telefone', $telefone);
        $this->db->set('celular', $celular);
        $this->db->set('numero', $numero);
        $this->db->set('rua', $rua);
        $this->db->set('bairro', $bairro);
        $this->db->set('cidade', $cidade);
        $this->db->set('estado', $estado);
        $this->db->set('nascido_em', $nascido_em);
        $this->db->where('idUsuarios', $id);
        return $this->db->update('usuarios');
    }


    public function editLogo($id, $logo){

        $this->db->set('url_logo', $logo);
        $this->db->where('id', $id);
        return $this->db->update('emitente');

    }
    public function editImguser($id, $logo){

        $this->db->set('url_logo', $logo);
        $this->db->where('idUsuarios', $id);
        return $this->db->update('usuarios');

    }

    public function editAss($id, $logo){

        $this->db->set('url_ass', $logo);
        $this->db->where('idUsuarios', $id);
        return $this->db->update('usuarios');

    }
}