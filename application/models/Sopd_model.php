<?php 

	/**
	* 
	*/
	class Sopd_model extends CI_Model
	{
		
		public function getAllSopd()
		{
			return $this->db->get('sopd')->result_array();
		}

	}
?>