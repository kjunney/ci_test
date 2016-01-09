<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * todo 모델
 */

class Todo_m extends CI_Model {
	function start() {
		parent::Model();
	}
	
	/**
	 * todo 목록 가져오기
	 */
	function get_list() {
		$sql = "SELECT * FROM items";
		$query = $this->db->query($sql);
		$result = $query->result();
		
		return $result;
	}
}
/* End of File todo_m.php */
/* Location : ./application/models/todo_m.php */ 