<?php
class Estadocivil_model extends CI_Model {
    /******************************************
     * Created by PhpStorm.                   *
     * User:  Janei Araujo de Moura Junior    *
     * Email: jaraujo.php@gmail.com           *
     * Function:  Web Developer               *
     * Date:  25/04/2022                      *
     * Time:  20:47                           *
     * Copyright © 2022 All rights reserved.  *
     ******************************************/

    function __construct() {
        parent::__construct();
    }


    function get($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array'){

        $this->db->select($fields);
        $this->db->from($table);
        $this->db->order_by('id','desc');
        $this->db->limit($perpage,$start);
        if($where){
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    function getActive1($table,$fields){

        $this->db->select($fields);
        $this->db->from($table);
        $this->db->where('situacao',1);
        $query = $this->db->get();
        return $query->result();;
    }
    function getActive($table,$fields){

        $this->db->select($fields);
        $this->db->from($table);
        $this->db->where('ativo',1);
        $query = $this->db->get();
        return $query->result();;
    }


    function getById($id){
        $this->db->where('id',$id);
        $this->db->limit(1);
        return $this->db->get('pais')->row();
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
}

/* End of file estadocivil_model.php */
/* Location: ./application/models/estadocivil_model.php */