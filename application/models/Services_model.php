<?php 

	/**
	* 
	*/
	class Services_model extends CI_Model
	{
		
		public function getAllServices()
		{
			return $this->db->get('services')->result_array();
		}

	}
?>