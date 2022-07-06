<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function sejarah()
	{
		$this->load->view('template/header.php');
		$this->load->view('menu-tentang/sejarah.php');
		$this->load->view('template/footer.php');
    }

    public function pendidikan()
	{
        $data['pendidikan'] = [
            "IAIN Kerinci",
            "STIE Sakti Alam Kerinci",
            "STIA Nusantara Kerinci",
            "LP3N",
            "STIT",
            "SKIP Muhammadiyah",
            "AMIK Depati Parbo",
            "AKPER Bina Insani Sakti",
            "MAN 1 Sungai Penuh",
            "MAN 2 Sungai Penuh",
            "SMA Negeri 1 Sungai Penuh",
            "SMA Negeri 2 Sungai Penuh",
            "SMA Negeri 3 Sungai Penuh",
            "SMA Negeri 4 Sungai Penuh",
            "SMA PGRI Sungai Penuh",
            "SMA Muhammadiyah Sungai Penuh",
            "SMK Negeri 1 Sungai Penuh",
            "SMK Negeri 2 Sungai Penuh",
            "SMK Negeri 3 Sungai Penuh",
            "SMK Negeri 4 Sungai Penuh",
            "SMK Negeri 5 Sungai Penuh",
            "SMP Islam Terpadu (IT) Sungai Penuh",
            "SMP N 1 Sungai Penuh",
            "SMP N 2 Sungai Penuh",
            "SMP N 3 Sungai Penuh",
            "SMP N 4 Sungai Penuh",
            "SMP N 5 Sungai Penuh",
            "SMP N 6 Sungai Penuh",
            "SMP N 7 Sungai Penuh",
            "SMP N 8 Sungai Penuh",
            "SMP N 9 Sungai Penuh",
            "SMP N 10 Sungai Penuh",
            "MTS N Model Sungai Penuh",
            "MTS N Rawang Kota Sungai Penuh",
            "Pondok Pesantren Modern Arafah",
        ];
		$this->load->view('template/header.php');
		$this->load->view('menu-tentang/pusat_pendidikan.php', $data);
		$this->load->view('template/footer.php');
    }

    public function kesehatan()
	{
        $data['kesehatan'] = [
            "RSU Mayjen. H. A. Thalib",
            "RS DKT Sungai Penuh",
            "Puskesmas Kec. Sungai Penuh",
            "Puskesmas Kec. Pondok Tinggi",
            "Puskesmas Kec. Bungkal",
            "Puskesmas Kec. Pesisir Bukit",
            "Puskesmas Kec. Koto Baru",
            "Puskesmas Kec. Hamparan Rawang",
            "Puskesmas Kec. Tanah Kampung",
            "Puskesmas Kec. Kumun Debai",
        ];
		$this->load->view('template/header.php');
		$this->load->view('menu-tentang/layanan_kesehatan.php', $data);
		$this->load->view('template/footer.php');
    }

    public function keuangan()
	{
        $data['keuangan'] = [
            "BMT SERAMBI MADINAH (Lembaga Keuangan Syariah)",
            "Unit Layanan (ULaMM) Syariah Sungai Penuh (PT. PNM Persero)",
            "Bank BNI",
            "Bank BRI",
            "Bank Mandiri",
            "Bank Danamon Simpan Pinjam",
            "Bank Mega Mitra",
            "Bank Pembangunan Kerinci",
            "Bank BTPN",
            "POS INDONESIA (Persero)",
        ];
		$this->load->view('template/header.php');
		$this->load->view('menu-tentang/layanan_keuangan.php', $data);
		$this->load->view('template/footer.php');
    }

    public function perbelanjaan()
	{
        $data['perbelanjaan'] = [
            "Pasar Tanjung Bajure Kota Sungai Penuh",
            "Kincai Plaza",
            "Minum Kawo Square",
        ];
		$this->load->view('template/header.php');
		$this->load->view('menu-tentang/perbelanjaan.php', $data);
		$this->load->view('template/footer.php');
    }

    public function hotel()
	{
        $data['hotel'] = [
            "Hotel Kerinci",
            "Hotel Mahkota",
            "Hotel Jaya Wisata 1",
            "Hotel Jaya Wisata 2",
            "Hotel Busana",
            "Hotel Yani",
            "Hotel Aroma",
            "Hotel Masgo",
        ];
		$this->load->view('template/header.php');
		$this->load->view('menu-tentang/hotel.php', $data);
		$this->load->view('template/footer.php');
    }

    public function wisata()
	{
        $this->load->view('template/header.php');
		$this->load->view('menu-tentang/wisata.php');
		$this->load->view('template/footer.php');
    }
}

?>