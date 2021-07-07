<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

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
	 	$this->load->model('Buku_Model');
	 	$this->load->model('Anggota_Model');
	 }

	public function index()
	{
		$data = [
			'title' => 'Peminjam',
			'sub_title' => 'Daftar Peminjam',
			'content' => 'peminjaman/index',
            'show' => $this->Transaksi_Model->read()->result()
		];
		$this->load->view('template/my_template', $data);
	}

    public function add()
    {
        $data = [
            'title' => 'Peminjam',
            'sub_title' => 'Tambah Peminjam',
            'content' => 'peminjaman/add',
            'anggota' => $this->Anggota_Model->read()->result(),
            'buku' => $this->Buku_Model->read()->result()
        ];
        $this->load->view('template/my_template', $data);
    }

    public function create()
    {

        $data = array(
            'id_anggota' => $this->input->post('id_anggota'),
            'id_buku' => $this->input->post('id_buku'),
            'tgl_pinjam' => date('Y-m-d', strtotime($this->input->post('tgl_pinjam'))),
            'tgl_kembali' => date('Y-m-d', strtotime($this->input->post('tgl_kembali'))),
            'tgl_pencatatan' => date('Y-m-d H:i:s'),
            'status_pengembalian' => 0,
            'status_peminjaman' => 1,
            'total_denda' => 0,
            'denda' => $this->input->post('denda'),
        );
        // kirim data ke model
        $insert_data = $this->Transaksi_Model->create($data);

        if ($insert_data) {
            redirect('peminjaman');
        } else {
            redirect('peminjaman/add');
        }

    }
}
