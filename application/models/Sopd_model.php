<?php 

	class Sopd_model extends CI_Model
	{
		
		public function getAllSopd()
		{
			return $this->db->get('sopd')->result_array();
		}

		public function getSopdById($id)
		{
			return $this->db->get_where('sopd', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set("nama", $this->input->post('nama'));
			$this->db->set("domain", $this->input->post('domain'));
			$this->db->insert('sopd');
		}

		public function update()
		{
			$this->db->set("nama", $this->input->post('nama'));
			$this->db->set("domain", $this->input->post('domain'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('sopd');
		}
		
		public function delete($id)
		{
			$this->db->delete('sopd', ['id' => $id]);
		}
	}
?>