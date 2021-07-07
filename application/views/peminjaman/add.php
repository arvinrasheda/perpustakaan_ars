<div class="row">
    <div class="col-sm-12">
        <div class="card border-primary mb-6">
            <div class="card-header">
                Tambah Buku
                <a href="<?= site_url('peminjaman'); ?>" class="btn btn-warning float-end">Kembali</a>
            </div>
            <div class="card-body text-primary">
                <form method="post" action="<?= site_url('peminjaman/create'); ?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Anggota</label>
                        <select class="form-control" name="id_anggota" required>
                            <option value="" disabled selected>Pilih Anggota</option>
                            <?php foreach ($anggota as $key => $value) { ?>
                                <option value="<?= $value->id_anggota ?>"><?= $value->nama_anggota ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Buku</label>
                        <select class="form-control" name="id_buku" required>
                            <option value="" disabled selected>Pilih Buku</option>
                            <?php foreach ($buku as $key => $value) { ?>
                                <option value="<?= $value->id_buku ?>"><?= $value->judul_buku ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" class="form-control" id="exampleFormControlInput1"
                               placeholder="isi dengan Tanggal Pinjam">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" class="form-control" id="exampleFormControlInput1"
                               placeholder="isi dengan Tanggal Kembali">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Denda Bila Telat (Per Hari)</label>
                        <input type="number" name="denda" class="form-control" id="exampleFormControlInput1"
                               placeholder="isi dengan denda telat per hari">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>