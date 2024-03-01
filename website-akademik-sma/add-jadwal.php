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
                            Tambah Data Jadwal Pelajaran
                            <a href="data-jadwal.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">
                        
                            <div class="form-group mb-3">
                                <label for="">Mata Pelajaran</label>
                                <input type="text" name="mapel" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Kelas</label>
                                <input type="text" name="kelas" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Guru Pengampu</label>
                                <input type="text" name="guru_pengampu" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Hari</label>
                                <input type="text" name="hari" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mulai</label>
                                <input type="text" name="mulai" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Selesai</label>
                                <input type="text" name="selesai" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Ruangan</label>
                                <input type="text" name="ruangan" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_jadwal" class="btn btn-primary">Simpan</button>
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