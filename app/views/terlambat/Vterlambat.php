<div class="page-content">
    <div class="col-md-12 card p-3">
        <div class="card-header">
            <form class="row" action="<?= BASE_URL ?>Terlambat/cari" method="POST">
                <div class="col-md-3">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="nama" class="form-control form-control-sm" placeholder="Nama" aria-label="Nama" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-users"></i></span>
                        </div>
                        <input type="text" name="kelas" class="form-control form-control-sm" placeholder="Kelas" aria-label="Nama" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-box"></i></label>
                        </div>
                        <select class="selectpicker form-control-sm form-control" data-live-search="true" name="id_buku" id="inputGroupSelect01">
                            <option value="0" selected>Pilih Buku</option>
                            <?php foreach($data['getBuku'] as $buku): ?>
                            <option value="<?= $buku['id_buku'] ?>"><?= $buku['nama_buku'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-search"></i> Cari</button>
                </div>
            </form>
            
        </div>
        <div class="card-body">
            <?= Flasher::flash(); ?>
            <table class="table table-striped" id="datatable" style="width:100%">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Buku</th>
                <th scope="col">Kode Buku</th>
                <th scope="col">Tgl Pinjam</th>
                <th scope="col">Tgl Mengembalikan</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($data['getDataTerlambat'] as $terlambat): ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $terlambat['nama'] ?></td>
                    <td><?= $terlambat['kelas'] ?></td>
                    <td><?= $terlambat['nama_buku'] ?></td>
                    <td><?= $terlambat['kode'] ?></td>
                    <td><?= date('d/F/Y', strtotime($terlambat['tgl_pinjam'])) ?></td>
                    <td><?= date('d/F/Y', strtotime($terlambat['tgl_mengembalikan'])) ?></td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus-<?= $terlambat['id_peminjam'] ?>"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="modalHapus-<?= $terlambat['id_peminjam'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= BASE_URL ?>Terlambat/hapusData" method="POST">
                        <div class="modal-body">
                                <input type="hidden" name="id_peminjam" id="id_peminjam_edit" value="<?= $terlambat['id_peminjam'] ?>">
                                <p>Apakah anda yakin ingin menghapus <b><?= $terlambat['nama'] ?></b> ?</p>
                                 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
                <?php $no++; endforeach ?>
            </tbody>
        </table>
        </div>
        <div class="card-footer">
            <a href="<?= BASE_URL ?>Terlambat/exportExcel" class="btn btn-success btn-sm"><i class="fas fa-file-excel mr-2"></i> Print Excel</a>

            <button onclick="window.open('<?= BASE_URL ?>Terlambat/print','_blank')" type="button" class="btn btn-primary btn-sm"><i class="fas fa-print"></i> Print</button>
        </div>

        
    </div>
</div>