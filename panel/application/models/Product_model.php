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

    public function get_all() //Tüm kayıtları getirir
    {
        return $this->db->get($this->tableName)->result();
    }


}