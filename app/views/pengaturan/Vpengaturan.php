

                    
                    
                    <!-- Page Content -->
                    <div class="page-content row">
                        <div class="col-md-12">
                            <?= Flasher::flash(); ?>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card bg-danger text-white">
                                <div class="card-header">
                                    <h4>Hapus Semua Data</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Semua data akan di hapus kecuali data admin.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#modalHapus"><i class="fas fa-trash"></i>
                                    Hapus</a>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                                <div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= BASE_URL ?>Pengaturan/hapusSemua" method="POST" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus kategori</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">    
                                                <p>Apakah anda yakin ingin menghapus <b>semua data</b> ?</p>
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

                        <div class="col-md-8">
                            <div class="col-md-12 card">
                                <div class="card-header">
                                    <h4>Edit Data</h4>
                                </div>
                                <form method="POST" action="<?= BASE_URL ?>Pengaturan/editData">
                                <div class="card-body text-center">
                                    <?php foreach ($data['user'] as $user) {
                                        $username = $user['username'];
                                        $id = $user['id'];
                                    } ?>
                                    <div class="col-md-12">
                                        <img src="<?= BASE_URL ?>assets/img/2.png" class="rounded-circle mx-auto d-block" width="150" alt="">
                                    </div>
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <div class="col-md-12 mt-3">
                                        <div class="input-group mx-auto mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" value=<?= $username ?> required aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="input-group mx-auto mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="text" name="password" class="form-control" placeholder="Password" aria-label="Password" required aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i>
                                    Edit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Page Content -->

                