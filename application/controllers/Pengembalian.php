<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('Transaksi_Model');
	 }

	public function index()
	{
		$data = [
			'title' => 'Pengembalian',
			'sub_title' => 'Daftar Pengembalian',
			'content' => 'pengembalian/index',
            'show' => $this->Transaksi_Model->read()->result()
		];
		$this->load->view('template/my_template', $data);
	}

    public function edit($id)
    {
        $data = [
            'title' => 'Pengembalian',
            'sub_title' => 'Pengembalian Buku',
            'content' => 'pengembalian/edit',
            'show' => $this->Transaksi_Model->show($id)->row()
        ];
        $this->load->view('template/my_template', $data);
    }

    public function update()
    {
        $id_pinjam = $this->input->post('id_pinjam');
        $denda = $this->input->post('denda');
        $tgl_pengembalian = date('Y-m-d', strtotime($this->input->post('tgl_pengembalian')));
        $tgl_kembali = date('Y-m-d', strtotime($this->input->post('tgl_kembali')));
        $total_denda = 0;

        $pinjam = strtotime($tgl_kembali);
        $kembali = strtotime($tgl_pengembalian);
        $timeDiff = abs($kembali - $pinjam);

        $days = $timeDiff/86400;  // 86400 seconds in one day
        $diffDays = intval($days);

        if ($diffDays > 0) {
            $total_denda = $denda * $diffDays;
        }

        $data = array(
            'tgl_pengembalian' => $tgl_pengembalian,
            'status_pengembalian' => 1,
            'total_denda' => $total_denda
        );

        // kirim data ke model
        $update_data = $this->Transaksi_Model->update($id_pinjam, $data);

        if ($update_data) {
            redirect('pengembalian');
        } else {
            redirect('peminjaman');
        }

    }
}
