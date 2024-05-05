
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Remarque_model extends CI_Model {
    public function insert_remarque($data) {
        $this->db->insert('remarque', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function get_All_Remark() {
        $query = $this->db->get('remarque');
        return $query->result_array();

    }
}
?>
