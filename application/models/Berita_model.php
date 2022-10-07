<?php 

	class Berita_model extends CI_Model
	{
		
		public function getAllBerita()
		{
			$this->db->from('berita');
			$this->db->select('*');
			$this->db->select('str_to_date(tgl, "%d-%m-%Y") tgl',false);
			$this->db->order_by('tgl', 'DESC');
			$this->db->limit(5);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getBeritaRandom()
		{
			$this->db->from('berita');
			$this->db->select('*');
			$this->db->select('str_to_date(tgl, "%d-%m-%Y") tgl',false);
			$this->db->order_by('rand()');
			$this->db->limit(3);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getBeritaById($id)
		{
			return $this->db->get_where('berita', ['id' => $id])->row_array();
		}

		public function add()
		{
			$gambar = $_FILES['gambar']['name'];

			if ($gambar) {

				if (!is_dir('./upload/berita/')) {
					mkdir('./upload/berita/', 0777, true);
				}
				
				$config['file_name'] = random_string('alnum', 16);
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['upload_path'] = './upload/berita/';

				$this->load->library('upload');
				$this->upload->initialize($config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set("tgl", $this->input->post('tgl'));
			$this->db->set("nama", $this->session->userdata('nama'));
			$this->db->set("judul", $this->input->post('judul'));
			$this->db->set("isi", $this->input->post('isi'));
			$this->db->insert('berita');
		}

		public function update()
		{
			$gambar = $_FILES['gambar']['name'];

			if ($gambar) {
				
				if (!is_dir('./upload/berita/')) {
					mkdir('./upload/berita/', 0777, true);
				}
				
				$config['file_name'] = random_string('alnum', 16);
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['upload_path'] = './upload/berita/';

				$this->load->library('upload');
				$this->upload->initialize($config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set("tgl", $this->input->post('tgl'));
			$this->db->set("judul", $this->input->post('judul'));
			$this->db->set("nama", $this->session->userdata('nama'));
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