<div class="row">
    <div class="col-sm-12">
        <div class="card border-primary mb-6">
            <div class="card-header">
                Daftar Peminjaman
                <a href="<?=site_url('peminjaman/add');?>" class="btn btn-success float-end"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body text-primary">
                <table class="table table-striped table-hover" id="datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Judul Buku</th>
                        <th>Nama Anggota</th>
                        <th width="8%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($show as $key => $value)
                    {
                        if ($value->status_peminjaman == 1 &&  $value->status_pengembalian == 0){
                        ?>
                        <tr>
                            <td><?= $key + 1; ?></td>
                            <td><?= date("d M Y", strtotime($value->tgl_pinjam)); ?></td>
                            <td><?= date("d M Y", strtotime($value->tgl_kembali)); ?></td>
                            <td><?= $value->judul_buku; ?></td>
                            <td><?= $value->nama_anggota; ?></td>
                            <td>
                                <a href="<?=site_url('pengembalian/edit/'.$value->id_pinjam);?>" class="btn btn-primary btn-sm" title="Pengembalian"><i class="fa fa-box-open"></i> Pengembalian</a>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Judul Buku</th>
                        <th>Nama Anggota</th>
                        <th width="8%">Aksi</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>