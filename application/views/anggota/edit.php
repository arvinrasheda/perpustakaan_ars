<div class="row">
    <div class="col-sm-12">
        <div class="card border-primary mb-6">
            <div class="card-header">
                Edit Data Anggota
                <a href="<?= site_url('anggota'); ?>" class="btn btn-warning float-end">Kembali</a>
            </div>
            <div class="card-body text-primary">
                <form method="post" action="<?=site_url('anggota/update');?>">
                    <input type="hidden" name="id_anggota" value="<?= $show->id_anggota ?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" name="nama_anggota" class="form-control" id="exampleFormControlInput1"
                               placeholder="isi dengan Nama Anggota" value="<?= $show->nama_anggota ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="" disabled>Pilih</option>
                            <option value="Laki-Laki" <?php if ($show->gender == "Laki-Laki") { echo 'selected'; } ?>>Laki-Laki</option>
                            <option value="Perempuan" <?php if ($show->gender == "Perempuan")  { echo 'selected'; } ?>>Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No Telp</label>
                        <input type="number" name="no_telp" class="form-control" id="exampleFormControlInput1"
                               placeholder="62.." value="<?= $show->no_telp ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="isi dengan alamat"><?= $show->alamat ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                               placeholder="isi@email.com" value="<?= $show->email ?>">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Ubah</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>