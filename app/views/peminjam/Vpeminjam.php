<div class="page-content">
    <div class="col-md-12 card p-3">
        <div class="card-header">
            <form class="row" method="POST" action="<?= BASE_URL ?>Peminjam/cari">
                <div class="col-md-3">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="Nama" name="nama" aria-label="Nama" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-box"></i></label>
                        </div>
                        <select class="selectpicker form-control-sm form-control" data-live-search="true" name="id_buku" id="inputGroupSelect01">
                            <option value="0" selected>Pilih Buku</option>
                            <?php foreach($data['getBukuAll'] as $bk): ?>
                            <option value="<?= $bk['id_buku'] ?>"><?= $bk['nama_buku'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input autocomplete="off" name="tanggal" type="text" class="form-control form-control-sm" placeholder="Tanggal"  id="datepicker3" aria-label="Nama" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-search"></i> Cari</button>
                </div>
                
                <div class="col-md-2 ml-auto text-right">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalTambah"><i class="fas fa-plus"></i> Tambah</button>
                </div>
            </form>  
            <!-- Modal -->
                <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="<?= BASE_URL; ?>Peminjam/tambahData" enctype="multipart/form-data">
                        <div class="modal-body">
                              
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-code"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="kode_buku" placeholder="Kode Buku" aria-label="Nama" aria-describedby="addon-wrapping" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama" aria-label="Nama" aria-describedby="addon-wrapping" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-users"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="kelas" placeholder="Kelas" aria-label="Nama" aria-describedby="addon-wrapping" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect02"><i class="fas fa-book"></i></label>
                                    </div>
                                    <select class="selectpicker form-control" data-live-search="true" name="id_buku" id="buku" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                        <option value="">Pilih Buku</option>
                                        <?php foreach($data['getBukuAll'] as $buku): ?>
                                        <option value="<?= $buku['id_buku'] ?>"><?= $buku['nama_buku'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input autocomplete="off" type="text" class="form-control" name="tgl_pinjam" placeholder="Tanggal Peminjaman" aria-label="Nama" aria-describedby="addon-wrapping" id="datepicker1" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input autocomplete="off" type="text" class="form-control" name="tgl_mengembalikan" placeholder="Tanggal Pengembalian" aria-label="Nama" aria-describedby="addon-wrapping" id="datepicker2" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
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
                foreach($data['dataPeminjam'] as $peminjam): ?>
                <tr>
                    <th><?= $no ?></th>
                    <td><?= $peminjam['nama'] ?></td>
                    <td><?= $peminjam['kelas'] ?></td>
                    <td><?= $peminjam['nama_buku'] ?></td>
                    <td><?= $peminjam['kode'] ?></td>
                    <td><?= date('d/F/Y', strtotime($peminjam['tgl_pinjam']))  ?></td>
                    <td><?= date('d/F/Y', strtotime($peminjam['tgl_mengembalikan']))  ?></td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm text-white tampilEdit" data-toggle="modal" data-target="#modalEdit" data-id="<?= $peminjam['id_peminjam'] ?>">
                            <i class="fas fa-edit"></i>
                        </button> | 
                        <button type="button" class="btn btn-danger btn-sm text-white" data-toggle="modal" data-target="#modalHapus-<?= $peminjam['id_peminjam'] ?>">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">
                                <input type="hidden" name="id_peminjam" id="id_peminjam_edit" value="<?= $peminjam['id_peminjam'] ?>">
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="kode-edit" type="text" class="form-control" name="kode_buku" placeholder="Kode Buku" aria-label="Nama" aria-describedby="addon-wrapping" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="nama-edit" type="text" class="form-control" name="nama" placeholder="Nama" aria-label="Nama" aria-describedby="addon-wrapping" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-users"></i></span>
                                    </div>
                                    <input id="kelas-edit" type="text" class="form-control" name="kelas" placeholder="Kelas" aria-label="Nama" aria-describedby="addon-wrapping" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect02"><i class="fas fa-book"></i></label>
                                    </div>
                                    <select class="form-control myselectpicker" id="select-buku" name="id_buku" data-live-search="true" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                        <option selected value="">Pilih Buku</option>
                                        <?php foreach($data['getBukuAll'] as $buku): ?>
                                        <option value="<?= $buku['id_buku'] ?>"><?= $buku['nama_buku'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input autocomplete="off" type="text" class="form-control tgl-pinjam" name="tgl_pinjam" placeholder="Tanggal Peminjaman" aria-label="Nama" aria-describedby="addon-wrapping" id="datepicker<?= $peminjam['id_peminjam'] ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input autocomplete="off" type="text" class="form-control tgl-mengembalikan" name="tgl_mengembalikan" placeholder="Tanggal Pengembalian" aria-label="Nama" aria-describedby="addon-wrapping" id="datepick<?= $peminjam['id_peminjam'] ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>   
                                 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" id="submit-edit" class="btn btn-warning">Edit</button>
                        </div>
                        
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
                <!-- Modal -->
                <div class="modal fade" id="modalHapus-<?= $peminjam['id_peminjam'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= BASE_URL ?>Peminjam/hapusData" method="POST">
                        <div class="modal-body">
                                <input type="hidden" name="id_peminjam" id="id_peminjam_edit" value="<?= $peminjam['id_peminjam'] ?>">
                                <p>Apakah anda yakin ingin menghapus <b><?= $peminjam['nama'] ?></b> ?</p>
                                 
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
                <?php $no++;
                endforeach ?>
            </tbody>
        </table>
        </div>
        <div class="card-footer">
            <a href="<?= BASE_URL ?>Peminjam/exportExcel" class="btn btn-success btn-sm"><i class="fas fa-file-excel mr-2"></i> Print Excel</a>

            <button onclick="window.open('<?= BASE_URL ?>Peminjam/print','_blank')" type="button" class="btn btn-primary btn-sm"><i class="fas fa-print"></i> Print</button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

       $('.tampilEdit').on('click', function() {
           
           const id_peminjam = $(this).data('id');
           $.ajax({
                method: 'POST',
                url: '<?= BASE_URL ?>Peminjam/getUbah',
                data: {id_peminjam: id_peminjam},
                dataType: 'json',
                success: function(data){
                    $('#kode-edit').val(data[0].kode);
                    $('#nama-edit').val(data[0].nama);
                    $('#kelas-edit').val(data[0].kelas);
                    $('.tgl-pinjam').val(data[0].tgl_pinjam);
                    $('.tgl-mengembalikan').val(data[0].tgl_mengembalikan);
                    console.log(data);
                }
           });
       })

       $('#submit-edit').on('click', function(){
           var id_peminjam = $('#id_peminjam_edit').val();
           var kode = $('#kode-edit').val();
           var nama = $('#nama-edit').val();
           var kelas = $('#kelas-edit').val();
           var id_buku = $('#select-buku').val();
           var tgl_pinjam = $('.tgl-pinjam').val(); 
           var tgl_mengembalikan = $('.tgl-mengembalikan').val();

        //    alert(nama); 

           $.ajax({
                method: 'POST',
                url:    '<?= BASE_URL ?>Peminjam/editData',
                data: {id_peminjam: id_peminjam, kode_buku: kode, nama: nama, kelas: kelas, id_buku: id_buku, tgl_pinjam: tgl_pinjam, tgl_mengembalikan: tgl_mengembalikan},
                dataType: 'json',
                success: function(data){
                    window.location.href = '<?= BASE_URL ?>Peminjam';
                },
                error: function(e){
                    console.log(e);
                }
           });
       })
    })
</script>