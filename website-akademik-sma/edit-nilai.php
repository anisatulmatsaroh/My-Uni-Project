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
                            Edit dan Update Data Siswa
                            <a href="data-nilai.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                            include('dbcon.php');

                            if (isset($_GET['id'])) {
                                $key_child = $_GET['id'];

                                $ref_table = "data_siswa";
                                $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                                if ($getdata > 0) {
                                    ?>

                                   
                        <form action="code.php" method="POST">
                        
                            <input type="hidden" name="key" value="<?=$key_child;?>">
                            <div class="form-group mb-3">
                                <label for="">NISN</label>
                                <input type="text" name="nisn" value="<?=$getdata['nisn'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nama Siswa</label>
                                <input type="text" name="name_siswa" value="<?=$getdata['nama_siswa'];?>" class="form-control">
                            </div>
                                <input type="hidden" name="jk" value="<?=$getdata['jenis_kelamin'];?>" class="form-control">
                                <input type="hidden" name="email" value="<?=$getdata['email'];?>" class="form-control">
                                <input type="hidden" name="no" value="<?=$getdata['no'];?>" class="form-control">
                                <input type="hidden" name="alamat" value="<?=$getdata['alamat'];?>" class="form-control">
                                <input type="hidden" name="angkatan" value="<?=$getdata['angkatan'];?>" class="form-control">
                            <div class="form-group mb-3">
                                <label for="">Kelas</label>
                                <input type="text" name="kelas" value="<?=$getdata['kelas'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nilai</label>
                                <input type="text" name="nilai" value="<?=$getdata['nilai'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_nilai" class="btn btn-primary">Input</button>
                            </div>

                        </form>
                        <?php
                                } else {
                                    $_SESSION['status'] = "Data tidak ditemukan";
                                    header('Location: data-nilai.php');
                                    exit();
                                }
                                
                            } else {
                                $_SESSION['status'] = "Tidak ditemukan";
                                    header('Location: data-nilai.php');
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