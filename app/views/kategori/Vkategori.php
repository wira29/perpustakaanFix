

                    
                    
                    <!-- Page Content -->
                    <div class="page-content">
                        
                        <form class="row content-header" action="<?= BASE_URL; ?>Kategori/cari" method="POST">
                            <div class="col-lg-3">
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-sm" name="nama_kategori" placeholder="Nama kategori" aria-label="Nama" aria-describedby="addon-wrapping">
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
                                            <form action="<?= BASE_URL; ?>Kategori/tambahData" method="POST" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah kategori</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-box"></i></span>
                                                    </div>
                                                    <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" aria-label="Nama" aria-describedby="addon-wrapping">
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
                            <?php 
                            $warna = ['info', 'dark', 'success', 'secondary'];
                            $count = 0;
                            foreach($data['kategoriAll'] as $kategori): ?>
                            <div class="col-md-3  mt-3">
                                <div class="card bg-<?= $warna[$count] ?> text-white mr-5" style="width:100%">
                                    <div class="card-body text-center">
                                        <i class="fas fa-box fa-7x mb-3"></i>
                                        <h6><?= $kategori['nama_kategori'] ?></h6>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-warning btn-sm text-white" data-toggle="modal" data-target="#modalEdit-<?= $kategori['id_kategori'] ?>">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm text-white" data-toggle="modal" data-target="#modalHapus-<?= $kategori['id_kategori'] ?>">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                                <div class="modal fade" id="modalEdit-<?= $kategori['id_kategori'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= BASE_URL; ?>Kategori/editData" method="POST" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori'] ?>">
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-box"></i></span>
                                                    </div>
                                                    <input type="text" name="nama_kategori" class="form-control" placeholder="Nama kategori" aria-label="Nama" aria-describedby="addon-wrapping" value="<?= $kategori['nama_kategori'] ?>">
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
                                <div class="modal fade" id="modalHapus-<?= $kategori['id_kategori'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= BASE_URL; ?>Kategori/hapusData" method="POST" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus kategori</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori'] ?>">
                                                <p>Apakah anda yakin ingin menghapus <b><?= $kategori['nama_kategori'] ?> </b> ?</p>
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
                            <?php 
                            if ($count == 3) {
                                $count = 0;
                            }else{
                                $count++;
                            }
                            endforeach ?>
                                
                        </div>
                    </div>
                    <!-- End Page Content -->

                