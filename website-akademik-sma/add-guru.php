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
                            Tambah Data Guru
                            <a href="data-guru.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">
                        
                            <div class="form-group mb-3">
                                <label for="">NIP</label>
                                <input type="number" name="nip" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nama Guru</label>
                                <input type="text" name="name_guru" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control">
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
                                <label for="">Jenis PTK</label>
                                <input type="text" name="jenis_ptk" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Status Pegawai</label>
                                <input type="text" name="status" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_guru" class="btn btn-primary">Simpan</button>
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