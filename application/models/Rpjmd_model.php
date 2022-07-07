<?php 

	class Rpjmd_model extends CI_Model
	{
		
		public function getAllRpjmd()
		{
			return $this->db->get('rpjmd')->result_array();
		}

		public function getRpjmdById($id)
		{
			return $this->db->get_where('rpjmd', ['id' => $id])->row_array();
		}

		public function add()
		{
			$upload_image = $_FILES['file']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['max_size'] = '2048';
				$config['upload_path'] = './upload/rpjmd/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('file')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('file', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set("judul", $this->input->post('judul'));
			$this->db->insert('rpjmd');
		}

		public function update()
		{
			$upload_image = $_FILES['file']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['max_size'] = '2048';
				$config['upload_path'] = './upload/rpjmd/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('file')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('file', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set("judul", $this->input->post('judul'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('rpjmd');
		}
		
		public function delete($id)
		{
			$this->db->delete('rpjmd', ['id' => $id]);
		}
	}
?>