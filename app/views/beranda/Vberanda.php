

                    
                    
                    <!-- Page Content -->
                    <div class="page-content row">
                        <div class="col-md-3 mb-3">
                            <div class="card bg-info mb-3">
                                <div class="card-body text-white">
                                    <div class="card-body-icon mr-3 mt-3" style="opacity: 0.4; position:absolute;top:35px;right:6px">
                                        <i class="fas fa-book fa-5x"></i>
                                    </div>
                                    <h5 class="card-title">JUMLAH BUKU</h5>
                                    <div class="display-4"><b><?= $data['getBuku'][0]['jumlahBuku'] ?></b></div>
                                    <a href="<?= BASE_URL ?>Buku">
                                        <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                                    </a>
                                </div>
                            </div>

                            <div class="card bg-dark mb-3">
                                <div class="card-body text-white">
                                    <div class="card-body-icon mr-3 mt-3" style="opacity: 0.4; position:absolute;top:35px;right:6px">
                                        <i class="fas fa-users fa-5x"></i>
                                    </div>
                                    <h5 class="card-title">JUMLAH PEMINJAM</h5>
                                    <div class="display-4"><b><?= $data['getPeminjam'][0]['jumlahPeminjam'] ?></b></div>
                                    <a href="<?= BASE_URL ?>Peminjam">
                                        <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                                    </a>
                                </div>
                            </div>

                            <div class="card bg-success">
                                <div class="card-body text-white">
                                    <div class="card-body-icon mr-3 mt-3" style="opacity: 0.4; position:absolute;top:35px;right:6px">
                                        <i class="fas fa-box fa-5x"></i>
                                    </div>
                                    <h5 class="card-title">JUMLAH KATEGORI</h5>
                                    <div class="display-4"><b><?= $data['getKategori'][0]['jumlahKategori'] ?></b></div>
                                    <a href="<?= BASE_URL ?>Kategori">
                                        <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="col-md-12 card" >
                                <div class="card-body" id="calendar">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Page Content -->

                