<div class="row">
    <div class="col-sm-12">
        <div class="card border-primary mb-6">
            <div class="card-header">
                Pengembalian Buku
                <a href="<?= site_url('peminjaman'); ?>" class="btn btn-warning float-end">Kembali</a>
            </div>
            <div class="card-body text-primary">
                <form method="post" action="<?=site_url('pengembalian/update');?>">
                    <input type="hidden" name="id_pinjam" value="<?=$show->id_pinjam;?>">
                    <input type="hidden" name="tgl_kembali" value="<?=$show->tgl_kembali;?>">
                    <input type="hidden" name="denda" value="<?=$show->denda;?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" name="tgl_pengembalian" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>