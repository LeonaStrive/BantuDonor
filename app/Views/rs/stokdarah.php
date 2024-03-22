<?= $this->extend('layouts_rs/template_rs') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Stok Darah</h1>
                </div>
                <div class="col-sm-6">
                    <!-- Button Tambah Data -->
                    <button type="button" class="btn btn-primary float-sm-right" data-bs-toggle="modal" data-bs-target="#modalTambahStok">
                        <i class="fas fa-plus-square"></i>
                        Tambah Data
                    </button>
                    
                    <!-- Modal Tambah Data -->
                    <div class="modal fade text-left" id="modalTambahStok" tabindex="-1" aria-labelledby="modalTambahStokLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalTambahStokLabel">Tambah Data Stok Darah</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="goldar" class="form-label">Golongan Darah</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Golongan Darah</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">Jumlah Stok</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Tabel Data RS -->
    <div class="container-fluid">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Golongan Darah</th>
                    <th>Jumlah Stok Darah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>O</td>
                    <td>2</td>
                    <td>
                        <!-- Button Edit Stok Darah -->
                        <button type="button" class="btn p-0 px-1" data-bs-toggle="modal" data-bs-target="#modalEditStok"><i class="fas fa-edit"></i></button>

                        <!-- Modal Edit Stok Darah -->
                        <div class="modal fade text-left" id="modalEditStok" tabindex="-1" aria-labelledby="modalEditStokLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalEditStokLabel">Edit Data Stok Darah</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="goldar" class="form-label">Golongan Darah</label>
                                            <input type="text" class="form-control" id="" placeholder="O" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">Jumlah Stok</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        <!-- Button Hapus Data -->
                        <button type="button" class="btn p-0 px-1" data-bs-toggle="modal" data-bs-target="#modalHapusStok"><i class="fas fa-trash-alt"></i></button>

                        <!-- Modal Hapus Data-->
                        <div class="modal fade" id="modalHapusStok" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalHapusStokLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalHapusStokLabel">Hapus Data Stok Darah</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Yakin ingin menghapus Data Stok Darah Golongan O?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-primary">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>