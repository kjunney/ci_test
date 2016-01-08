<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');
/**
 * todo 모델
 */
class Todo_m extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	/**
	 * todo 목록 가져오기
	 */
	function get_list() {
		$sql = "SELECT * FROM itmes";
		$query = $this->db->query($sql);
		$result = $query->result();
		 
		return $result;
	}
}
/* End of file todo_m.php */
/* location : ./application/models/todo_m.php */