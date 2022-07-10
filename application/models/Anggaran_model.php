<?php 

	class Anggaran_model extends CI_Model
	{
		
		public function getAllAnggaran()
		{
			return $this->db->get('anggaran')->result_array();
		}

		public function getAnggaranById($id)
		{
			return $this->db->get_where('anggaran', ['id' => $id])->row_array();
		}

		public function add()
		{
			$upload_image = $_FILES['namafile']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'pdf';
				$config['upload_path'] = './upload/anggaran/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('namafile')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('namafile', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set("tahun", $this->input->post('tahun'));
			$this->db->set("keterangan", $this->input->post('keterangan'));
			$this->db->insert('anggaran');
		}

		public function update()
		{
			$upload_image = $_FILES['namafile']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'pdf';
				$config['upload_path'] = './upload/anggaran/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('namafile')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('namafile', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set("tahun", $this->input->post('tahun'));
			$this->db->set("keterangan", $this->input->post('keterangan'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('anggaran');
		}
		
		public function delete($id)
		{
			$this->db->delete('anggaran', ['id' => $id]);
		}
	}
?>