

                    
                    
                    <!-- Page Content -->
                    <div class="page-content">
                        
                        <form class="row content-header" action="<?= BASE_URL; ?>Buku/cari" method="POST">
                            <div class="col-lg-3">
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-sm" name="buku" placeholder="Nama Buku" aria-label="Nama" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-sm" name="nama" placeholder="Penulis" aria-label="Nama" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-box"></i></label>
                                    </div>
                                    <select class="form-control-sm form-control" name="kategori" id="inputGroupSelect01">
                                        <option value="0" selected>Pilih Kategori</option>
                                        <?php foreach($data['kategori'] as $kt): ?>
                                        <option value="<?= $kt['id_kategori'] ?>"><?= $kt['nama_kategori'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1 text-right">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fas fa-search"></i> Cari
                                </button>
                            </div>
                            <div class="col-lg-2 text-right ml-auto">
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalTambah">
                                    <i class="fas fa-plus mr-2"></i> Tambah
                                </button>

                                
                            </div>
                            

                        </form>
                        <!-- Modal -->
                                <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= BASE_URL; ?>Buku/tambahData" method="POST" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="input-group flex-nowrap mb-3">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-code"></i></span>
                                                    </div>
                                                    <input type="text" name="kode_buku" class="form-control" placeholder="Kode Buku" aria-label="Nama" aria-describedby="addon-wrapping">
                                                </div>
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-book"></i></span>
                                                    </div>
                                                    <input type="text" name="nama_buku" class="form-control" placeholder="Nama Buku" aria-label="Nama" aria-describedby="addon-wrapping">
                                                </div>
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" name="penulis" class="form-control" placeholder="Penulis" aria-label="Nama" aria-describedby="addon-wrapping">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-box"></i></label>
                                                    </div>
                                                    <select class="custom-select" name="kategori" id="inputGroupSelect01">
                                                        <option selected>Pilih Kategori</option>
                                                        <?php foreach($data['kategori'] as $ktg): ?>
                                                        <option value="<?= $ktg['id_kategori'] ?>"><?= $ktg['nama_kategori'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-image"></i></span>
                                                    </div>
                                                    <input type="file" name="gambar" class="form-control" placeholder="Nama Buku" aria-label="Nama" aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->

                        <div class="row" style="width:100%">
                            <div class="col-md-12 mt-3">
                                <?= Flasher::flash(); ?>
                            </div>
                        </div>

                        <div class="row" style="width:100%">
                            <?php foreach($data['bukuAll'] as $buku): ?>
                            <div class="col-md-3  mt-3">
                                <div class="card mr-5" style="width:100%">
                                    <img src="<?= BASE_URL ?>assets/img/<?= $buku['gambar'] ?>" height="150" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h6><?= $buku['nama_buku'] ?></h6>
                                        <p><?= $buku['penulis'] ?></p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-warning btn-sm text-white" data-toggle="modal" data-target="#modalEdit-<?= $buku['id_buku'] ?>">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm text-white" data-toggle="modal" data-target="#modalHapus-<?= $buku['id_buku'] ?>">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                                <div class="modal fade" id="modalEdit-<?= $buku['id_buku'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= BASE_URL; ?>Buku/editData" method="POST" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id_buku" value="<?= $buku['id_buku'] ?>">
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-code"></i></span>
                                                    </div>
                                                    <input type="text" name="kode_buku" class="form-control" placeholder="Nama Buku" aria-label="Nama" aria-describedby="addon-wrapping" value="<?= $buku['kode_buku'] ?>">
                                                </div>
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-book"></i></span>
                                                    </div>
                                                    <input type="text" name="nama_buku" class="form-control" placeholder="Nama Buku" aria-label="Nama" aria-describedby="addon-wrapping" value="<?= $buku['nama_buku'] ?>">
                                                </div>
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" name="penulis" class="form-control" placeholder="Penulis" aria-label="Nama" aria-describedby="addon-wrapping" value="<?= $buku['penulis'] ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-box"></i></label>
                                                    </div>
                                                    <select class="custom-select" name="kategori" required id="inputGroupSelect01">
                                                        <?php foreach($data['kategori'] as $ktg): ?>
                                                        <?php if($ktg['id_kategori'] == $buku['id_kategori']){ ?>
                                                        <option selected value="<?= $ktg['id_kategori'] ?>"><?= $ktg['nama_kategori'] ?></option>
                                                        <?php }else{ ?>
                                                        <option value="<?= $ktg['id_kategori'] ?>"><?= $ktg['nama_kategori'] ?></option>
                                                        <?php } ?>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-image"></i></span>
                                                    </div>
                                                    <input type="file" name="gambar" class="form-control" placeholder="Nama Buku" aria-label="Nama" aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-warning">Edit</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->

                            <!-- Modal -->
                                <div class="modal fade" id="modalHapus-<?= $buku['id_buku'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= BASE_URL; ?>Buku/hapusData" method="POST" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Buku</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id_buku" value="<?= $buku['id_buku'] ?>">
                                                <p>Apakah anda yakin ingin menghapus <b><?= $buku['nama_buku'] ?> </b> ?</p>
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
                            <?php endforeach ?>
                                
                        </div>

                        <div class="row" style="width:100%">
                            <div class="col-md-6 mt-5 ml-auto">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2 ml-auto" role="group" aria-label="First group">
                                    <?php if($data['jumlahHalaman'] != 1): ?>
                                        <?= $data['halamanSebelum'] ?>
                                        <?php for($hal = 1; $hal <= $data['jumlahHalaman']; $hal++):
                                            if($hal == $data['halamanAktif']): ?>
                                            <a href="<?= BASE_URL ?>Buku/<?= $hal ?>" class="btn btn-primary"><?= $hal ?></a>
                                            <?php else: ?>
                                            <a href="<?= BASE_URL ?>Buku/<?= $hal ?>" class="btn btn-light"><?= $hal ?></a>
                                        <?php 
                                            endif;
                                        endfor ?>
                                        <?= $data['halamanSesudah'] ?>
                                    <?php endif ?>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- End Page Content -->

                