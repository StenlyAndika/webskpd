<?php 

	class Penghargaan_model extends CI_Model
	{
		
		public function getAllPenghargaan()
		{
			return $this->db->get('penghargaan')->result_array();
		}

		public function getPenghargaanById($id)
		{
			return $this->db->get_where('penghargaan', ['id' => $id])->row_array();
		}

		public function add()
		{
			$upload_image = $_FILES['namafile']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/penghargaan/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('namafile')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('namafile', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('ket', $this->input->post('ket'));
			$this->db->insert('penghargaan');
		}

		public function update()
		{
			$upload_image = $_FILES['namafile']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/penghargaan/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('namafile')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('namafile', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set('ket', $this->input->post('ket'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('penghargaan');
		}
		
		public function delete($id)
		{
			$this->db->delete('penghargaan', ['id' => $id]);
		}
	}
?>