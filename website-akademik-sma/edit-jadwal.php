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
                            Edit dan Update Data Jadwal
                            <a href="data-jadwal.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                            include('dbcon.php');

                            if (isset($_GET['id'])) {
                                $key_child = $_GET['id'];

                                $ref_table = "data_jadwal";
                                $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                                if ($getdata > 0) {
                                    ?>

                                   
                        <form action="code.php" method="POST">
                        
                            <input type="hidden" name="key" value="<?=$key_child;?>">
                            <div class="form-group mb-3">
                                <label for="">Mata Pelajaran</label>
                                <input type="text" name="mapel" value="<?=$getdata['mapel'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Kelas</label>
                                <input type="text" name="kelas" value="<?=$getdata['kelas'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Guru Pengampu</label>
                                <input type="text" name="guru_pengampu" value="<?=$getdata['guru_pengampu'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Hari</label>
                                <input type="text" name="hari" value="<?=$getdata['hari'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mulai</label>
                                <input type="text" name="mulai" value="<?=$getdata['mulai'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Selesai</label>
                                <input type="text" name="selesai" value="<?=$getdata['selesai'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Ruangan</label>
                                <input type="text" name="ruangan" value="<?=$getdata['ruangan'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_jadwal" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                        <?php
                                } else {
                                    $_SESSION['status'] = "Data tidak ditemukan";
                                    header('Location: data-jadwal.php');
                                    exit();
                                }
                                
                            } else {
                                $_SESSION['status'] = "Tidak ditemukan";
                                    header('Location: data-jadwal.php');
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