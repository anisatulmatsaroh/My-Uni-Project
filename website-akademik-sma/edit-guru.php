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
                            Edit dan Update Data Guru
                            <a href="data-guru.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                            include('dbcon.php');

                            if (isset($_GET['id'])) {
                                $key_child = $_GET['id'];

                                $ref_table = "data_guru";
                                $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                                if ($getdata > 0) {
                                    ?>

                                   
                        <form action="code.php" method="POST">
                        
                            <input type="hidden" name="key" value="<?=$key_child;?>">
                            <div class="form-group mb-3">
                                <label for="">NIP</label>
                                <input type="text" name="nip" value="<?=$getdata['nip'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nama Guru</label>
                                <input type="text" name="name_guru" value="<?=$getdata['nama_guru'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" value="<?=$getdata['jenis_kelamin'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" value="<?=$getdata['email'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">No Telepon</label>
                                <input type="number" name="no" value="<?=$getdata['no'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" value="<?=$getdata['alamat'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Jenis PTK</label>
                                <input type="text" name="jenis_ptk" value="<?=$getdata['jenis_ptk'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Status</label>
                                <input type="text" name="status" value="<?=$getdata['status'];?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_guru" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                        <?php
                                } else {
                                    $_SESSION['status'] = "Data tidak ditemukan";
                                    header('Location: data-guru.php');
                                    exit();
                                }
                                
                            } else {
                                $_SESSION['status'] = "Tidak ditemukan";
                                    header('Location: data-guru.php');
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