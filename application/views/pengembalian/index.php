<div class="row">
    <div class="col-sm-12">
        <div class="card border-primary mb-6">
            <div class="card-header">
                Daftar Pengembalian
            </div>
            <div class="card-body text-primary">
                <table class="table table-striped table-hover" id="datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Judul Buku</th>
                        <th>Nama Anggota</th>
                        <th>Denda</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($show as $key => $value)
                    {
                        if ($value->status_peminjaman == 1 && $value->status_pengembalian == 1) {
                        ?>
                        <tr>
                            <td><?= $key + 1; ?></td>
                            <td><?= date("d M Y", strtotime($value->tgl_pinjam)); ?></td>
                            <td><?= date("d M Y", strtotime($value->tgl_pengembalian)); ?></td>
                            <td><?= $value->judul_buku; ?></td>
                            <td><?= $value->nama_anggota; ?></td>
                            <td><?= "Rp " . number_format($value->total_denda,2,',','.'); ?></td>
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
                        <th>Tanggal Pengembalian</th>
                        <th>Judul Buku</th>
                        <th>Nama Anggota</th>
                        <th>Denda</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>