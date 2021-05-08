<?php
/**
 * User: Mustafa Emre Ilhan
 * Job: Junior Software Developer
 */

class Product_model extends CI_Model
{
    public $tableName = "products";

    public function __construct()
    {
        parent::__construct();
    }

    public function get($where=array())//Tek kayıt getirir
    {
        return $this->db->where($where)->get($this->tableName)->row();
        //Ama birden fazla şart koyabilirim getirirken o nedenle array dedik
    }

    public function get_all($where =array()) //Tüm kayıtları getirir
    {
        return $this->db->where($where)->get($this->tableName)->result();
        // eğer biz bir şart belirtsek ona göre tümünü getirmesi için where koyduk where parametre gelmesede calısıyor
    }

    public function add($data=array())//kayıt yapar
    {
        return $this->db->insert($this->tableName,$data);
        //nereye neyi kaydedecek sorusuna cevap vermek lazım
    }


}