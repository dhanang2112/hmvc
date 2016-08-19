<?php
/**
 * @FileInfo: 
 * @Author: dhanang 
 * @Email: dhanang.hadiyanto@gmail.com
 * @Date: 2016-05-25 22:07:47
 * @Last Modified by:   dhanang
 * @Last Modified time: 2016-07-21 10:28:15
 */

class jenis_brg_qry extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function get_jenis_brg() {
        $sql ="SELECT * FROM jenis_brg";
        $query = $this->db->query($sql);
        $row = $query->num_rows();
        if($row > 0) {
            $result = $query->result();
            return $result;
        } else {
            $result = "nodata";
            return $result;
        }
    }
}
