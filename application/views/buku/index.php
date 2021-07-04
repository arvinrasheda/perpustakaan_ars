<div class="row">
    <div class="col-sm-12">
        <div class="card border-primary mb-6">
            <div class="card-header">
                Daftar Buku
                <a href="<?=site_url('buku/add');?>" class="btn btn-success float-end"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body text-primary">
                <table class="table table-striped table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>ISBN</th>
                            <th>Tahun</th>
                            <th width="8%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($show as $key => $value) 
                        {
                        ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><?= $value->judul_buku; ?></td>
                                <td><?= $value->pengarang; ?></td>
                                <td><?= $value->penerbit; ?></td>
                                <td><?= $value->isbn; ?></td>
                                <td><?= $value->thn_terbit; ?></td>
                                <td>
                                    <a href="<?=site_url('buku/edit/'.$value->id_buku);?>" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="<?=site_url('buku/delete/'.$value->id_buku);?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Anda yakin akan menghapus Buku dengan nama ' + '<?=$value->judul_buku;?>' + ' ini ?');"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>ISBN</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>