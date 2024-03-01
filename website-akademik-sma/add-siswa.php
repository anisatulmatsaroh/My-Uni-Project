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
                            Tambah Data Siswa
                            <a href="data-siswa.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">
                        
                            <div class="form-group mb-3">
                                <label for="">NISN</label>
                                <input type="number" name="nisn" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nama Siswa</label>
                                <input type="text" name="name_siswa" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">No Telepon</label>
                                <input type="number" name="no" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Kelas</label>
                                <input type="text" name="kelas" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Angkatan</label>
                                <input type="text" name="angkatan" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nilai</label>
                                <input type="text" name="nilai" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_siswa" class="btn btn-primary">Simpan</button>
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