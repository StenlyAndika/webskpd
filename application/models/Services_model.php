<?php 

	class Services_model extends CI_Model
	{
		
		public function getAllServices()
		{
			return $this->db->get('services')->result_array();
		}

		public function getServicesById($id)
		{
			return $this->db->get_where('services', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set("nama", $this->input->post('nama'));
			$this->db->set("ket", $this->input->post('ket'));
			$this->db->set("link", $this->input->post('link'));
			$this->db->insert('services');
		}

		public function update()
		{
			$this->db->set("nama", $this->input->post('nama'));
			$this->db->set("ket", $this->input->post('ket'));
			$this->db->set("link", $this->input->post('link'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('services');
		}
		
		public function delete($id)
		{
			$this->db->delete('services', ['id' => $id]);
		}

	}
?>