<?= $this->extend('layouts_rs/template_rs') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pendonor</h1>
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
                                            <label for="goldar" class="form-label">Tanggal Donor</label>
                                            <input type="date" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="goldar" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">Nomor ID (KTP/SIM)</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">Nomor HP / WA</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">Golongan Darah</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Golongan Darah</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
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
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Donor</th>
                    <th>Nama Lengkap</th>
                    <th>ID (KTP / SIM)</th>
                    <th>No HP / WA</th>
                    <th>Golongan Darah</th>
                    <th>Keterangan (Sudah Donor / Belum)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>15 Maret 2024</td>
                    <td>Sara Puja</td>
                    <td>1234567890123456</td>
                    <td>087812505224</td>
                    <td>O</td>
                    <td></td>
                    <td>
                        <!-- Button Edit Pendonor -->
                        <button type="button" class="btn p-0 px-1" data-bs-toggle="modal" data-bs-target="#modalEditPendonor"><i class="fas fa-edit"></i></button>

                        <!-- Modal Edit Pendonor -->
                        <div class="modal fade text-left" id="modalEditPendonor" tabindex="-1" aria-labelledby="modalEditPendonorLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalEditPendonorLabel">Edit Data Pendonor</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="goldar" class="form-label">Tanggal Donor</label>
                                            <input type="date" class="form-control" id="" placeholder="15 Maret 2024">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="" placeholder="Sara Puja">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">ID (KTP/SIM)</label>
                                            <input type="text" class="form-control" id="" placeholder="1234567890123456">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">No HP/WA</label>
                                            <input type="text" class="form-control" id="" placeholder="087812505224">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">Golongan Darah</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Golongan Darah</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">Keterangan</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Keterangan</option>
                                                <option value="Sudah">Sudah Melakukan Donor</option>
                                                <option value="Belum">Belum Belakukan Donor</option>
                                            </select>
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