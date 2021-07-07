<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Transaksi_Model extends CI_Model
{
    public function read()
    {
        // baca data;
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('buku', 'buku.id_buku = transaksi.id_buku');
        $this->db->join('anggota', 'anggota.id_anggota = transaksi.id_anggota');
        return $this->db->get();
    }

    public function create($data) {
        // input data baru
        if($this->db->insert('transaksi', $data)){
            return true;
        }else{
            return false;
        }
    }

    public function show($id)
    {
        // baca data
        $this->db->where('id_pinjam', $id);
        return $this->db->get('transaksi');
    }

    public function update($id, $data)
    {
        // ubah data

        $this->db->where('id_pinjam', $id);
        if($this->db->update('transaksi', $data)){
            return true;
        }else{
            return false;
        }
    }
}