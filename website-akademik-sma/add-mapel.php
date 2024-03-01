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
                            Tambah Data Mapel
                            <a href="data-mapel.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">
                        
                            <div class="form-group mb-3">
                                <label for="">Kode Mapel</label>
                                <input type="text" name="kode" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nama Mapel</label>
                                <input type="text" name="name_mapel" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tingkat</label>
                                <input type="text" name="tingkat" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Guru Pengampu</label>
                                <input type="text" name="guru_pengampu" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_mapel" class="btn btn-primary">Simpan</button>
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