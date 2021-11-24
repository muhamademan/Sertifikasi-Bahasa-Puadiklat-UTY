<div class="container-fluid">
    <div class="col-md-8 mb-4">
        <?= $this->session->flashdata('message'); ?>
        <div class="card shadow">
            <div class="card-header bg-primary border-bottom-warning py-2">
                <div class="row">
                    <div class="col">
                        <!-- <span class="text-light">Fakultas</span> -->
                    </div>
                    <div class="col text-right">
                        <button class="btn btn-success py-0" data-toggle="modal" data-target="#newMenu">Tambah
                            prodi</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="example">
                        <thead>
                            <tr>
                                <th class="py-1 text-center" width="10">No</th>
                                <th class="py-1 text-center">Program Studi</th>
                                <th class="py-1 text-center">Akreditas</th>
                                <th class="py-1 text-center">Fakultas</th>
                                <th class="py-1 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($prodi as $m) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td class="text-left pl-5 pr-0"><?= $m['nama']; ?></td>
                                <td class="text-center"><?= $m['akreditas']; ?></td>
                                <td class="text-center"><?= $m['alias']; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('kelola_web/editprodi/') . $m['id']; ?>"><i
                                            class="fa fa-edit text-light mx-0 rounded-circle py-2 pl-2 pr-2 bg-success icon-kelas"></i></span></a>
                                    <a href="<?= base_url('kelola_web/deleteprodi/') . $m['id']; ?>"
                                        class="tombol-delete-prodi"><i
                                            class="fa fa-trash text-light mx-0 rounded-circle py-2 px-2 bg-danger icon-kelas"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('kelola_web/addinstitusi'); ?>" method="post">
                        <div class="form-group">
                            <label for="Formenu">Fakultas</label>
                            <select class="form-control" id="Formenu" name="id_fakultas">
                                <?php foreach ($fakultas as $s) : ?>
                                <option value="<?= $s['id'] ?>"><?= $s['nama'] ?> (<?= $s['alias'] ?>)</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNama">program studi</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputNama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNama">Akreditas</label>
                            <input type="text" name="akreditas" class="form-control" id="exampleInputNama" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>