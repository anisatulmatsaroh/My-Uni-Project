<?php
include('authentication.php');
include('includes/header.php');
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">
                        <h4>
                            Tambah Data Kelas
                            <a href="data-kelas.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">
                        
                            <div class="form-group mb-3">
                                <label for="">Kode Kelas</label>
                                <input type="text" name="kode" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nama Kelas</label>
                                <input type="text" name="name_kelas" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Wali Kelas</label>
                                <input type="text" name="wali_kelas" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Ruangan</label>
                                <input type="text" name="ruangan" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Jumlah Siswa</label>
                                <input type="text" name="jumlah_siswa" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_kelas" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include('includes/footer.php');
?>