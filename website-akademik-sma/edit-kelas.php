<?php
include('authentication.php');
include('includes/header.php');
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-header">
                        <h4>
                            Edit dan Update Data Kelas
                            <a href="data-kelas.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                            include('dbcon.php');

                            if (isset($_GET['id'])) {
                                $key_child = $_GET['id'];

                                $ref_table = "data_kelas";
                                $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                                if ($getdata > 0) {
                                    ?>

                                   
                        <form action="code.php" method="POST">
                        
                            <input type="hidden" name="key" value="<?=$key_child;?>">
                            <div class="form-group mb-3">
                                <label for="">Kode Kelas</label>
                                <input type="text" name="kode" value="<?=$getdata['kode'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nama Kelas</label>
                                <input type="text" name="name_kelas" value="<?=$getdata['nama_kelas'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Wali Kelas</label>
                                <input type="text" name="wali_kelas" value="<?=$getdata['wali_kelas'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan" value="<?=$getdata['jurusan'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Ruangan</label>
                                <input type="text" name="ruangan" value="<?=$getdata['ruangan'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Jumlah Siswa</label>
                                <input type="text" name="jumlah_siswa" value="<?=$getdata['jumlah_siswa'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_kelas" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                        <?php
                                } else {
                                    $_SESSION['status'] = "Data tidak ditemukan";
                                    header('Location: data-kelas.php');
                                    exit();
                                }
                                
                            } else {
                                $_SESSION['status'] = "Tidak ditemukan";
                                    header('Location: data-kelas.php');
                                    exit();
                            }
                            
                            
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include('includes/footer.php');
?>