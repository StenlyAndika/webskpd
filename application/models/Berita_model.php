<?php 

	class Berita_model extends CI_Model
	{
		
		public function getAllBerita()
		{
			$this->db->from('berita');
			$this->db->order_by("tgl", "desc");
			$query = $this->db->get(); 
			return $query->result_array();
		}

		public function getBeritaById($id)
		{
			return $this->db->get_where('berita', ['id' => $id])->row_array();
		}

		public function add()
		{
			$gambar1 = $_FILES['gambar1']['name'];

			if ($gambar1) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/berita/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar1')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar1', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$gambar2 = $_FILES['gambar2']['name'];

			if ($gambar2) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/berita/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar2')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar2', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$gambar3 = $_FILES['gambar3']['name'];

			if ($gambar3) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/berita/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar3')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar3', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->db->set("tgl", date('d-m-Y'));
			$this->db->set("judul", $this->input->post('judul'));
			$this->db->set("isi", $this->input->post('isi'));
			$this->db->insert('berita');
		}

		public function update()
		{
			$gambar1 = $_FILES['gambar1']['name'];

			if ($gambar1) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/berita/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar1')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar1', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$gambar2 = $_FILES['gambar2']['name'];

			if ($gambar2) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/berita/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar2')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar2', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$gambar3 = $_FILES['gambar3']['name'];

			if ($gambar3) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/berita/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar3')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar3', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set("tgl", date('d-m-Y'));
			$this->db->set("judul", $this->input->post('judul'));
			$this->db->set("isi", $this->input->post('isi'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('berita');
		}
		
		public function delete($id)
		{
			$this->db->delete('berita', ['id' => $id]);
		}
	}
?>