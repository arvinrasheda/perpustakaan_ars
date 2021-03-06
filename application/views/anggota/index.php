<div class="row">
    <div class="col-sm-12">
        <div class="card border-primary mb-6">
            <div class="card-header">
                Daftar Anggota
                <a href="<?=site_url('anggota/add');?>" class="btn btn-success float-end"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body text-primary">
                <table class="table table-striped table-hover" id="datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>No. Telp</th>
                        <th>Email</th>
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
                            <td><?= $value->nama_anggota; ?></td>
                            <td><?= $value->gender; ?></td>
                            <td><?= $value->no_telp; ?></td>
                            <td><?= $value->email; ?></td>
                            <td>
                                <a href="<?=site_url('anggota/edit/'.$value->id_anggota);?>" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="<?=site_url('anggota/delete/'.$value->id_anggota);?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Anda yakin akan menghapus Anggota dengan nama ' + '<?=$value->nama_anggota;?>' + ' ini ?');"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>No. Telp</th>
                        <th>Email</th>
                        <th width="8%">Aksi</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>