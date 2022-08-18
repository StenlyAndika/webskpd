<?php 

	class Profil_model extends CI_Model
	{
		
		public function getAllProfil()
		{
			return $this->db->get('instansi')->result_array();
		}

		public function getProfilById($id)
		{
			return $this->db->get_where('instansi', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('nama', $this->input->post('nama'));
			$this->db->insert('instansi');
		}

		public function update()
		{
			$this->db->set('nama', $this->input->post('nama'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('instansi');
		}
		
		public function delete($id)
		{
			$this->db->delete('instansi', ['id' => $id]);
		}
	}
?>